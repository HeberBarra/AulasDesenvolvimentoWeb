<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 03</title>
</head>
<body>
<h1>Exercício 03 - Heber Ferreira Barra</h1>
<form action="exercicio03.php" method="GET">
    <label>Ana: <input type="text" name="conceito1"></label>
    <label>Kayo: <input type="text" name="conceito2"></label>
    <label>Maria: <input type="text" name="conceito3"></label>
    <label>Pedro: <input type="text" name="conceito4"></label>
    <label>Renato: <input type="text" name="conceito5"></label>
</form>
<?php
    if (!isset($_GET["conceito1"]) || !isset($_GET["conceito2"]) || !isset($_GET["conceito3"]) || !isset($_GET["conceito4"]) || !isset($_GET["conceito5"]))
        return;


?>
</body>
</html>
