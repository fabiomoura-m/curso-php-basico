<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>

<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    echo "Os valores passados foram $n1 e $n2 </br>";

    // Operador Ternário
    $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;

    echo "O resultado será $r";

    $nota1 = 5;
    $nota2 = 4;
    $media = ($nota1 + $nota2) / 2;
    echo "</br>A situacao do aluno e " . ($media < 6 ? "REPROVADO" : "APROVADO");

    //Operadores lógicos && || !
    $idade = 20;
    $verifica = ($idade >= 18 && $idade < 64 ? "Obrigatório" : "Não obrigatório");
    echo "</br> Você tem $idade anos e seu voto é $verifica";
    ?>

</body>

</html>