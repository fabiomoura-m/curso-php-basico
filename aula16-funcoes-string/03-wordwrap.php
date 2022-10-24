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

    $texto = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento do worwrap";
    $r = wordwrap($texto, 20, "</br>", true); // o true e o false apenas importa quando passamos supondo 5, se a palavra tiver mais de 5 caracteres e tiver como false, ele nao quebra a palavra ao meio.

    echo $r;


    ?>
</body>

</html>