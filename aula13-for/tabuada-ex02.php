<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<!-- Exibir a tabuada de um número escolhido pelo usuário, de 1 a 10. -->

<body>
    <?php
    $num = $_GET['num'];

    for ($i = 1; $i <= 10; $i++) {
        $res = $num * $i;

        echo "$num x $i = $res </br>";
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>