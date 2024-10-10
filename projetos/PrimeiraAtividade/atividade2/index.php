<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Média de Notas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Médias das Notas <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>Primeira Nota: <input type="number" name="primeira-nota" step="0.1" min="0" max="10" required></label>
        <label>Segunda Nota: <input type="number" name="segunda-nota" step="0.1" min="0" max="10" required></label>
        <label>Terceira Nota: <input type="number" name="terceira-nota" step="0.1" min="0" max="10" required></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!(isset($_POST["primeira-nota"]) && isset($_POST["segunda-nota"]) && isset($_POST["terceira-nota"]))) {
            return;
        }

        $primeiraNota = $_POST["primeira-nota"];
        $segundaNota = $_POST["segunda-nota"];
        $terceiraNota = $_POST["terceira-nota"];

        $media = ($primeiraNota + $segundaNota + $terceiraNota) / 3;

        echo "<div class='mensagem'>A média das notas é " . number_format($media, 2, ",", "." . "</div>");
    ?>
</body>
</html>
