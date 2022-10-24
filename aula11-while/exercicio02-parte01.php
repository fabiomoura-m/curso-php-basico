<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>
<!-- Criar dinamicamente 5 caixas de texto em um formulário -->

<body>
    <form action="exercicio02-parte02.php">
        <?php
        $num = 1;
        while ($num <= 5) {
            echo "
            <div>
                <label>Valor $num:</label>
                <input type='number' name='v$num' max='100' min='0' value='0'>
            </div>
            ";
            $num++;
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
    <?php

    ?>

</body>

</html>