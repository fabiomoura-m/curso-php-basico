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

    $frase = 'Estou aprendendo PHP';

    $pos = strpos($frase, "PHP"); // em qual posição está a string php, se nao achar, retorna false, string vazia.

    echo "$frase </br>";
    echo "A string PHP foi encontrada na posição" . $pos;
    ?>
</body>

</html>