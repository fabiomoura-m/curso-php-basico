<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<!-- Script para calcular o fatorial de um número inteiro -->

<body>
    <?php

    $num = 4;
    $fatorial = 1;

    do {
        $fatorial *= $num;
        $num--;
    } while ($num >= 1);

    echo "!4 é: $fatorial"
    ?>


</body>

</html>