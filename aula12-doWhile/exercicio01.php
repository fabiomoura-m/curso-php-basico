<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<!-- Mostrar uma contagem progressiva de 1 até 10 -->

<body>
    <?php

    $i = 1;
    do {
        echo "$i";
        $i++;
    } while ($i <= 10);

    // valores pares de 0 a 20
    echo "<p>Numeros pares de 0 a 20:</p>";

    $num = 0;
    do {
        echo "$num, ";
        $num += 2;
    } while ($num <= 20);
    ?>


</body>

</html>