<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02 - Heber Ferreira Barra</h1>
    <form action="exercicio02.php" method="get">
        <label>Valor procurado: <input type="number" name="valor"></label>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if (!isset($_GET["valor"])) {
            return;
        }

        $valores = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15 ];
        $valorProcurado = $_GET["valor"];

        if (in_array($valorProcurado, $valores)) {
            echo "Valor encontrado<br>";
            return;
        }

        echo "Valor não encontrado<br>";
    ?>
</body>
</html>
