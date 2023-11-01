<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
    <tr>
    <?php
        $variable = 1;
        while ($variable <= 10){
            echo "<td>$variable</td>";
            $variable = $variable +1 ;
        }
    ?>
    </tr>
    </table>
</body>
</html>