<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fórmula Quadrática</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Fórmula Quadrática <br> Heber F Barra & João Gabriel de Cristo</h1>
    <form action="index.php" method="post">
        <label>Coeficiente A: <input type="number" name="a" step="0.1"></label>
        <label>Coeficiente B: <input type="number" name="b" step="0.1"></label>
        <label>Coeficiente C: <input type="number" name="c" step="0.1"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])))
            return;

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $delta = pow($b, 2) - 4 * $a * $c;

        echo "<div class='mensagem'>";
        echo "Delta: $delta <br/>";
        if ($delta < 0) {
            echo "Não existem raízes reais.";
            echo "</div>";
            return;
        }

        $primeiraRaiz = (-1 * $b + sqrt($delta)) / 2 * $a;
        $segundaRaiz = (-1 * $b - sqrt($delta)) / 2 * $a;

        echo "X¹ = $primeiraRaiz<br/>";
        echo "X² = $segundaRaiz<br/>";
        echo "</div>";
    ?>
</body>
</html>
