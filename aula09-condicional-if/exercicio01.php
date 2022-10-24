<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<!-- Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir -->

<body>
    <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $idade = date("Y") - $ano;
    echo "Você nasceu em $ano e tem $idade anos";

    if ($idade >= 18) {
        $voto = "já pode votar";
        $dirigir = "já pode dirigir";
    } else {
        $voto = "não pode votar";
        $dirigir = "não pode dirigir";
    }

    echo "</br> Com essa idade, voce $voto e também $dirigir."
    ?>
    <a href="exercicio01.html">Voltar</a>
</body>

</html>