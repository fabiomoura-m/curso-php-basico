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
    $frase = "Gosto de estudar Matemática";
    $novaFrase = str_replace("Matemática", "PHP", $frase);

    echo $novaFrase;

    // se usar o str_ireplace ele ignora letras maisculas e minusculas.
    ?>
</body>

</html>