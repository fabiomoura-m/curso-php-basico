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
    for ($i = 1; $i <= 10; $i++) {
        echo "$i ";
    }
    echo "</br>";

    for ($i = 10; $i >= 1; $i--) {
        echo "$i ";
    }

    echo "</br>";

    for ($i = 0; $i <= 100; $i += 5) {
        echo "$i ";
    }

    echo "</br>";

    for ($i = 20; $i >= 0; $i -= 2) {
        print "$i ";
    }

    ?>
</body>

</html>