<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divisível por 3 e por 5</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Divisível por 3 e por 5 <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>Número: <input type="number" name="numero" min="0"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!isset($_POST["numero"]))
            return;

        $numero = $_POST["numero"];

        $diviselPorTres = $numero % 3 == 0;
        $diviselPorCinco = $numero % 5 == 0;

        echo "<div class='mensagem'>";
        if ($diviselPorTres && $diviselPorCinco) {
            echo "O $numero é divisível por 3 e por 5";
        } else if ($diviselPorTres) {
            echo "O $numero é divisível por 3, mas não por 5";
        } else if ($diviselPorCinco) {
            echo "O $numero é divisível por 5, mas não por 3";
        } else {
            echo "O $numero não é divisível por 3 nem por 5";
        }
        echo "</div>";
    ?>
</body>
</html>
