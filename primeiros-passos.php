<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciando com php</title>
</head>

<body>
    <?php
    // Pegando parâmetros passados pela url http://localhost/project/?a=9&b=3
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2> Valores recebidos: $n1 e $n2 </h2>";
    echo "O valor absoluto de $n2 é: " . abs($n2);
    echo "</br> O valor de $n1<sup>$n2</sup> é: " . pow($n1, $n2);
    echo "</br> A raiz quadrada de $n1 é: " . sqrt($n1);
    echo "</br> O valor arrendodado de $n2 é: " . round($n2); // a partir de 0.5 arredonda pra cima, tem também o ceil e o floor.
    echo "</br> A parte inteira de $n2 é: " . intval($n2); // pega a parte inteira do numero
    echo "</br> O valor de $n1 em moeda é: R$ " . number_format($n1, 2, ",", "."); // primeiro parametro as casas decimais que quer, o segundo se quer separar por virgula ou ponto, e o terceiro o separador de milhar.
    ?>

</body>

</html>

</html>