<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $n = array(3, 5, 8, 2);
    print_r($n); // Array ( [0] => 3 [1] => 5 [2] => 8 [3] => 2 )

    echo "</br>";

    $c = range(5, 20, 5); // cria um vetor que inicia com 5 e termina com 20, o ultimo valor passado é o incremento da posições, será um array -> [5,10,15,20];

    print_r($c); // Array ( [0] => 5 [1] => 10 [2] => 15 [3] => 20 )
    ?>
</body>

</html>