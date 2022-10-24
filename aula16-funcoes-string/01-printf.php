<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Funções de manipulações de strings -->

<body>
    <?php

    $prod = "leite";
    $preco = 4.5;

    // echo "o $prod custa R$ " . number_format($preco, 2);

    printf("O %s custa R$ %.2f", $prod, $preco); // %s - string %f - float, o .2 significa que queremos 2 casas decimais
    /*
    %d - valor decimal (positivo ou negativo)
    %u - valor decimal sem sinal (apenas positivos)
    %f - valor real
    %s - string

    */
    ?>
</body>

</html>