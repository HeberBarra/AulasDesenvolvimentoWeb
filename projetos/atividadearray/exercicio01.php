<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 01</title>
</head>
<body>
    <header>
        <h1>Atividade 01 - Heber Ferreira Barra</h1>
    </header>
    <div class="resultado">
        <?php
            $valores = [ 4.5, 22, 2.31, 14.5];
            $total = 0;

            echo "Valores: ";
            foreach ($valores as $valor) {
                echo "$valor&nbsp";
                $total += $valor;
            }

            $media = $total / count($valores);
            echo "<br/>";
            echo "Média dos valores é igual a: $media";
    ?>
    </div>
</body>
</html>