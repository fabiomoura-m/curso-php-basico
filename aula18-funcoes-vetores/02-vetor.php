<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Gerenciando elementos do array -->

<body>
    <pre>
        <?php
        $v = array("A", "J", "M", "X", "K");
        print_r($v);

        // inserindo elemento no final do array
        $v[] = "O";
        print_r($v);

        // outra maneira de adicionar elemento no final do array
        array_push($v, "P");
        print_r($v);

        // Removendo ultimo elemento do array
        array_pop($v);
        print_r($v);

        // Inserindo elemento no início do array
        array_unshift($v, "B");
        print_r($v);

        // Removendo elemento no início do array
        array_shift($v);
        print_r($v);

        ?>
    </pre>

</body>

</html>