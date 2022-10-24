<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>

<body>
    <?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$ " . number_format($preco, 2);
    $preco += ($preco * 10 / 100);
    echo "</br>O novo preço com 10% de aumento é R$ " . number_format($preco, 2);

    // incremento / decremento
    $atual = $_GET['aa']; # pegar o ano na url
    echo "</br>O ano atual é $atual e o ano anterior é " . --$atual;

    //Variaveis referenciadas
    echo "<h2>Variáveis referenciadas</h2>";
    $a = 10;
    $b = $a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "</br>A variavel B vale $b";

    $c = 3;
    $d = &$c; // referenciando a variavel d 
    $d += 5;
    echo "</br>A variavel C vale $c";
    echo "</br>A variavel D vale $d";

    // Variáveis de variáveis
    $site = "cursoemvideo";
    $$site = "cursoPHP";
    echo "</br>O conteúdo da variavel site: $site"; // cursoemvideo
    echo "</br>A variável criada recebeu o valor: $cursoemvideo"; // cursoPHP
    ?>

</body>

</html>