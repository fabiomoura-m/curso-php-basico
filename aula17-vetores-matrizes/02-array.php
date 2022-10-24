<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border='1'>
        <tr>

            <?php
            $c = range(5, 20, 2); // Array ( [0] => 5 [1] => 7 [2] => 9 [3] => 11 [4] => 13 [5] => 15 [6] => 17 [7] => 19 )

            //foreach - para cada
            foreach ($c as $v) {
                echo "<td>$v</td>";
            }
            ?>
        </tr>
    </table>

</body>

</html>