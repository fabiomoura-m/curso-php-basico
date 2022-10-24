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

    function soma()
    {
        $param = func_get_args();
        $totalparams = func_num_args();
        $soma = 0;
        for ($i = 0; $i < $totalparams; $i++) {
            $soma += $param[$i];
        }
        return $soma;
    }

    $resultado = soma(3, 4, 5, 8, 9);
    echo "A soma dos valores é: $resultado";
    ?>
</body>

</html>