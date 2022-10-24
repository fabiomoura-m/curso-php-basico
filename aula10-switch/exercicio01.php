<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<!-- Ler um numero e qual operação realizar: dobro, cubo ou raiz quadrada -->

<body>
    <?php
    $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
    $operacao = isset($_GET["operacao"]) ? $_GET["operacao"] : 1;

    switch ($operacao) {
        case 1:
            $resultado = $numero * 2;
            break;
        case 2:
            $resultado = $numero ** 3;
            break;
        case 3:
            $resultado = sqrt($numero); // $numero**(1/2)
            break;
    }

    echo "</br> O resultado da operação solicitada foi $resultado."
    ?>
    <a href="exercicio01.html">Voltar</a>
</body>

</html>