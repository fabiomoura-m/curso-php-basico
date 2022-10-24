<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>


<body>
    <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $idade = date("Y") - $ano;
    echo "Você nasceu em $ano e tem $idade anos";

    if ($idade < 16) {
        $tipoVoto = 'não vota';
    } else if (($idade >= 16 && $idade < 18) || $idade > 65) {
        $tipoVoto = 'voto opcional';
    } else {
        $tipoVoto = 'voto obrigatório';
    }

    echo "</br> Para essa idade, $tipoVoto."
    ?>
    <a href="exercicio02.html">Voltar</a>
</body>

</html>