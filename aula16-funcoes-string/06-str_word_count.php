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

    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase, 0); // se colocar 0, ele vai contar quantas palavras tem, que no caso é 4, se colocar 1, retorna um array com cada palavra em uma posição, 

    echo $cont; // 4, 4 palavras na frase.
    ?>
</body>

</html>