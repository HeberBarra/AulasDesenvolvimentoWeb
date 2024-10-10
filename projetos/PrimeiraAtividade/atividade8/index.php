<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificador Triângulo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Verificador Triângulo <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>Lado 1: <input type="number" name="primeiro-lado" step="0.1"></label>
        <label>Lado 2: <input type="number" name="segundo-lado" step="0.1"></label>
        <label>Lado 3: <input type="number" name="terceiro-lado" step="0.1"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!(isset($_POST["primeiro-lado"]) && isset($_POST["segundo-lado"]) && isset($_POST["terceiro-lado"])))
            return;

        $primeiroLado = $_POST["primeiro-lado"];
        $segundoLado = $_POST["segundo-lado"];
        $terceiroLado = $_POST["terceiro-lado"];

        if (
                $primeiroLado <= ($segundoLado + $terceiroLado) &&
                $segundoLado <= ($primeiroLado + $terceiroLado) &&
                $terceiroLado <= ($primeiroLado + $segundoLado)
        ) {
            echo "<div class='mensagem'>O triângulo é válido</div>";
        } else {
            echo "<div class='mensagem'>O triângulo é inválido</div>";
        }

    ?>
</body>
</html>
