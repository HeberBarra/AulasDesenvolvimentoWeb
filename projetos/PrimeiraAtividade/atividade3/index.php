<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Potência e Raiz Quadrada</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Raíz Quadrada e Potência de um número real <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>Número: <input type="number" name="numero" step="0.1" max="1000" min="-1000"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!isset($_POST["numero"]))
            return;

        $numero = $_POST["numero"];

        echo "<div class='mensagem'>";
        if ($numero < 0) {
            $resultado = $numero * $numero;
            echo "$numero ao quadrado é igual a $resultado";
        } else {
            $resultado = sqrt($numero);
            echo "A raíz quadrada de $numero é igual a $resultado";
        }
        echo "</div>";
    ?>
</body>
</html>