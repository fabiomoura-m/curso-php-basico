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

    $nome = "   José da Silva   ";
    echo (strlen($nome)); // 20

    $novo = trim($nome); // corta os caracteres vazios
    echo "</br>$novo";

    echo "</br>" . (strlen($novo)); // 14 

    // Temos a variação ltrim, que elimina apenas os espaços do início, e o rtrim elimina apenas os espaços vazios no final.

    ?>
</body>

</html>