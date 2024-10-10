<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conta de Água</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Conta de Água <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>Consumo de Água: (m³)<input type="number" name="consumo" step="0.1" min="0"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!isset($_POST["consumo"]))
            return;

        $consumo = $_POST["consumo"];

        if ($consumo < 20) {
            $valorTotal = $consumo * 8.50;
        } else {
            $valorTotal = $consumo * 11;
        }

        echo "<div class='mensagem'>O valor total da conta é R$" . number_format($valorTotal, 2, ",", "." . "</div>");
    ?>
</body>
</html>
