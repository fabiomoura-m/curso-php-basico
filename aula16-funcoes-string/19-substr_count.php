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

    $frase = 'Estou aprendendo PHP no Curso em Vídeo de PHP';
    $cont = substr_count($frase, "PHP"); // quantas vezes a string php apareceu na frase

    echo "PHP encontrado $cont vezes";
    ?>
</body>

</html>