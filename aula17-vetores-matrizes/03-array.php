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
        // chaves personalizadas
        $v = array(1 => "A", 3 => "B", 6 => "C", 8 => "D"); // [A, B, C, D], onde A é pos1, B pos3, C pos6 e D pos8.

        print_r($v); // Array ( [1] => A [3] => B [6] => C [8] => D )

        $v[] = "E"; // cria um indice novo e atribui a E, neste caso vai criar na posicao 9;

        print_r($v); // Array ( [1] => A [3] => B [6] => C [8] => D [9] => E )

        unset($v[1]); // remove a posição 1

        print_r($v); // Array ([3] => B [6] => C [8] => D [9] => E )



        ?>
    </pre>

</body>

</html>