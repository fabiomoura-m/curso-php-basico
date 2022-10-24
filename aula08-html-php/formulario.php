<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $nome = isset($_GET['nome']) ? $_GET['nome'] : "Não informado"; // isset é se foi passado como parâmetro, se foi configurado
    $ano = isset($_GET['ano']) ? $_GET['ano'] : 0;
    $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "Sem sexo";
    $idade = date('Y') - $ano;
    echo "$nome é $sexo e tem $idade anos."
    ?>
    <br>
    <a href="formulario.html">Voltar</a>
</body>

</html>