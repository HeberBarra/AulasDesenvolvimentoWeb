<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intervalo</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>C entre A e B <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>A (início): <input type="number" name="a" step="0.1"></label>
        <label>B (fim): <input type="number" name="b" step="0.1"></label>
        <label>C (valor): <input type="number" name="c" step="0.1"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])))
            return;

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        echo "<div class='mensagem'>";
        if ($a < $c && $c < $b) {
            echo "O valor C($c) está entre A($a) e B($b)";
        } else if ($b < $c && $c < $a) {
            echo "O valor C($c) está entre B($b) e A($a)";
        } else {
            echo "O valor C($c) não está dentro do intervalo especificado";
        }
        echo "</div>";
    ?>
</body>
</html>
