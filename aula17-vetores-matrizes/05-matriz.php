<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        $matriz = array(
            array(6, 4),
            array(4, 9),
            array(3, 2)
        );

        $matriz[1][1] = $matriz[2][1]; // a posição 1 1 que era 9 passou a receber o valor da posicao 2 1, que é 2.

        print_r($matriz);
        ?>
    </pre>

</body>

</html>