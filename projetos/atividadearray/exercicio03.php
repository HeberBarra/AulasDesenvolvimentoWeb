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
    <h2>Tabela de Notas</h2>
    <form action="exercicio03.php" method="GET">
        <label>Ana: <input type="text" name="ana"></label>
        <label>Kayo: <input type="text" name="kayo"></label>
        <label>Maria: <input type="text" name="maria"></label>
        <label>Pedro: <input type="text" name="pedro"></label>
        <label>Renato: <input type="text" name="renato"></label>
        <button type="submit">ENVIAR</button>
    </form>
    <?php
        if (!isset($_GET["ana"]) || !isset($_GET["kayo"]) || !isset($_GET["maria"]) || !isset($_GET["pedro"]) || !isset($_GET["renato"]))
            return;

        $conceitos = [];
        $conceitos[] = $_GET["ana"];
        $conceitos[] = $_GET["kayo"];
        $conceitos[] = $_GET["maria"];
        $conceitos[] = $_GET["pedro"];
        $conceitos[] = $_GET["renato"];

        foreach ($conceitos as $nome => $conceito) {
            echo "Aluno: $nome - Conceito: $conceito - Situação:";

            if ($conceito == "D") {
                echo "Reprovado<br>";
                continue;
            }
            echo "Aprovado<br>";
        }

    ?>
</body>
</html>
