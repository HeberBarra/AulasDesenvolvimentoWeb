<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Exercício 04 - Heber Ferreira Barra</h1>
    </header>
    <form action="exercicio04.php" method="post">
        <label>Nome 1º produto: <input type="text" name="produto1"></label>
        <label>Preço 1º produto: <input type="number" name="preco1" step="0.01"></label>
        <label>Nome 2º produto: <input type="text" name="produto2"></label>
        <label>Preço 2º produto: <input type="number" name="preco2" step="0.01"></label>
        <label>Nome 3º produto: <input type="text" name="produto3"></label>
        <label>Preço 3º produto: <input type="number" name="preco3" step="0.01"></label>
        <label>Nome 4º produto: <input type="text" name="produto4"></label>
        <label>Preço 4º produto: <input type="number" name="preco4" step="0.01"></label>
        <label>Nome 5º produto: <input type="text" name="produto5"></label>
        <label>Preço 5º produto: <input type="number" name="preco5" step="0.01"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        function verificarVariaveis(): bool
        {
            for ($i = 1; $i <= 5; $i++) {
                if (!isset($_POST["produto" . $i]) || !isset($_POST["preco" . $i])) {
                    return true;
                }
            }

            return false;
        }

        function imprimirTabela(array $produtos): void
        {

            $tabela = <<<EOD
                <div class="resultado">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                <tbody>
            EOD;

            foreach ($produtos as $produto => $valor) {
                $valorFormatado = "R$" . number_format(doubleval($valor), 2, ',', '.');

                $tabela .= <<<EOD
                <tr>
                    <td>$produto</td>
                    <td>$valorFormatado</td>
                </tr>
                EOD;
            }

            $tabela .= "</tbody>";
            $tabela .= "</table>";
            $tabela .= "</div>";

            echo  $tabela;
        }

        function valorMaiorQueCinquenta(array $produtos): array | null {
            $listaProdutos = null;
            foreach($produtos as $produto => $valor) {
                if ($valor > 50) {
                    $listaProdutos[$produto] = $valor;
                }
            }

            return $listaProdutos;
        }

        function valorMenorQueCem(array $produtos): array | null {
            $listaProdutos = null;
            foreach($produtos as $produto => $valor) {
                if ($valor < 100) {
                    $listaProdutos[$produto] = $valor;
                }
            }

            return $listaProdutos;
        }

        function imprimirProdutosValoresEspecificos(array | null $produtos): void {

            if ($produtos == null || count($produtos) == 0) {
                echo "<div class='resultado'>Nenhum produto foi encontrado com o valor especificado</div>";
                return;
            }

            imprimirTabela($produtos);
        }

        function encontrarProdutoComMenorPreco(array $produtos): array {
            $produtoComMenorPreco = null;
            $menorPreco = null;

            foreach ($produtos as $produto => $valor) {
                if ($menorPreco == null) {
                    $menorPreco = $valor;
                    $produtoComMenorPreco = $produto;
                    continue;
                }

                if ($valor < $menorPreco) {
                    $menorPreco = $valor;
                    $produtoComMenorPreco = $produto;
                }
            }

            return ["nome" => $produtoComMenorPreco, "valor" => $menorPreco];
        }

        if (verificarVariaveis())
            return;

        $produtos = null;
        for ($i = 1; $i <= 5; $i++) {
               $produtos[$_POST["produto" . $i]] = $_POST["preco" . $i];
        }

        imprimirTabela($produtos);
        imprimirProdutosValoresEspecificos(valorMaiorQueCinquenta($produtos));
        imprimirProdutosValoresEspecificos(valorMenorQueCem($produtos));

        $produto = encontrarProdutoComMenorPreco($produtos);
        echo "<div class='resultado'>";
        echo $produto["nome"] . ": R$" . number_format(doubleval($produto["valor"]), 2, ",", ".");
        echo "</div>";
    ?>
</body>
</html>