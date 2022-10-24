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

    $site = "Curso em Vídeo";
    $vetor = explode(" ", $site);

    print_r($vetor); // Array ( [0] => Curso [1] => em [2] => Vídeo )
    ?>
</body>

</html>