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

    $vetor[0] = "Curso";
    $vetor[1] = "em";
    $vetor[2] = "Vídeo";
    //$texto = implode("-", $vetor); // pode usar a função join()
    $texto = join("$", $vetor); // Curso$em$Vídeo

    echo $texto;
    ?>
</body>

</html>