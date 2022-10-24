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

    $site = 'Curso em Video';
    $sub = substr($site, 0, 5); // funciona como o slice no javascript. do indice 0 ate a posicao 5.
    $sub2 = substr($site, 7); // pega tudo a partir do indice 7
    $sub3 = substr($site, -5); // pega as ultimos 5 indices
    $sub4 = substr($site, -5, 2); // dos 5 ultimos indices , que é Video, pega os 2 primeiros

    echo $sub; // Curso
    echo "</br>$sub2"; // m Vídeo
    echo "</br>$sub3"; // Video
    echo "</br>$sub4"; // Vi
    ?>
</body>

</html>