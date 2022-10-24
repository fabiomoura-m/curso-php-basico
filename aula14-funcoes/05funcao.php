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
    // include - caso arquivo não seja encontrado, continua executando
    // require - caso arquivo não seja encontrado, para tudo
    // include_once e require_once - verifica sejá carregou o arquivo, se já carregou, não precisa carregar novamente.
    //inclue e require
    require "funcoes.php";

    echo "<h1>Testanto novas funcoes</h1>";
    ola();
    mostraValor(4);
    echo "<h2>Finalizando o programa</h2?";
    ?>
</body>

</html>