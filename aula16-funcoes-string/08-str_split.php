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

    $nome = "Maria";
    $vetor = str_split($nome);

    print_r($vetor); // Array ( [0] => M [1] => a [2] => r [3] => i [4] => a )
    ?>
</body>

</html>