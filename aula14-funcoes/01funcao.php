<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function soma($a, $b)
    {
        $soma = $a + $b;
        echo "<p>A soma vale $soma</p>";
    }

    soma(3, 4);
    soma(8, 4);
    ?>
</body>

</html>