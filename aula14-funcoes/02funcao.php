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

    function soma($a, $b)
    {
        return $a + $b;
    }

    $x = 3;
    $y = 4;
    $resultado = soma($x, $y);

    echo "A soma entre $x e $y é: $resultado";
    ?>
</body>

</html>