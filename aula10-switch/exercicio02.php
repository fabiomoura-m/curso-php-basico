<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<!-- Ler o dia da semana (2-7) e mostrar se precisa ou não ir pra escola -->

<body>
    <?php
    $dia = isset($_GET["dia"]) ? $_GET["dia"] : 0;

    switch ($dia) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar!";
            break;
        case 7:
        case 8:
            echo "Descanse, pequeno gafanhoto!";
            break;
        default:
            echo "Dia da semana inválido";
    }

    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>