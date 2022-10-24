<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>


<body>
    <?php
    $i = 1; //1º while pega os dados da url
    while ($i <= 5) {
        $valor = "num" . $i;
        $url = "v" . $i;
        $$valor = isset($_GET[$url]) ? $_GET[$url] : 0;
        $i++;
    }

    /*echo "$num1 $num2 $num3 $num4 $num5"; //assim fica inline*/

    $i = 1; //este bloco mostra os dados pegos pela url
    while ($i <= 5) {
        $valor = "num" . $i;
        echo "Valor $i: " . $$valor . "</br>";
        $i++;
    }

    // usando o break dentro do while ele para a repetição, usando o continue ele não executa o que estiver embaixo e continua o laço.
    ?>

</body>

</html>