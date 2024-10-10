<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ímpar ou Par?</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Ímpar ou Par <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>Número: <input type="number" name="numero" required></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!isset($_POST["numero"]))
            return;

        $numero = $_POST["numero"];

        if ($numero % 2 == 0) {
            echo "<div class='mensagem'>O número $numero é par<div/>";
        } else {
            echo "<div class='mensagem'> O número $numero é ímpar<div/>";
        }
    ?>
</body>
</html>