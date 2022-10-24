<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Ordenando vetores-->

<body>
    <pre>
        <?php
        $v = array("A", "J", "M", "X", "K");
        print_r($v);

        sort($v); // ordena em ordem crescente
        print_r($v);

        rsort($v); // ordena em ordem decrescente
        print_r($v);

        // ordenação associativa

        asort($v); // ordena em ordem crescente, porem mantém os indices de cada elemento.
        print_r($v);

        arsort($v); // ordena em ordem decrescente, porem mantém os indices de cada elemento.

        // Ordenação por chaves
        echo "<p>Ordenação por chaves</p>";
        $n = array(2 => "A", 5 => "J", 0 => "M", 1 => "J", 4 => "k");
        print_r($n);

        ksort($n); // ordena por chaves em ordem crescente
        print_r($n);

        krsort($n); // ordena por chaves em ordem decrescente
        print_r($n);


        ?>
    </pre>

</body>