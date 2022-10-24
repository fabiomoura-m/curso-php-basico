<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        $cad = array(
            "nome" => "Ana",
            "idade" => 23,
            "peso" => 65.5
        );

        $cad["fuma"] = true; // adicionando nova posição no array

        print_r($cad);

        foreach ($cad as $campo => $valor) {
            echo "O valor de $campo é $valor. ";
        }
        ?>
    </pre>

</body>

</html>