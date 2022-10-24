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
    // passando parâmetros por valor 
    function teste($x)
    {
        $x += 2;
        echo "<p>O valor de X é $x</p>";
    }

    $a = 3;
    teste($a);
    echo "<p>O valor de A é $a</p>"; // 3

    // passando parâmetros por referência
    function teste2(&$x)
    {
        $x += 2;
        echo "<p>O valor de X é $x</p>";
    }

    $a = 3;
    teste2($a); // ao chamar a função, está passando a referência de A, então muda o valor da variavél.
    echo "<p>O valor de A é $a</p>"; // 5
    ?>
</body>

</html>