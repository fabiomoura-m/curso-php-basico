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

    $nome = "Guanabara";
    $novo = str_pad($nome, 30, "-", STR_PAD_RIGHT); // quantidade de caracteres, qual caracteres quer completar, e onde quer completar(str_pad_center, str_pad_right, str_pad_left)

    echo "Professor $novo de PHP."
    ?>
</body>

</html>