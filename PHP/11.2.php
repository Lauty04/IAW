<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $variable = rand(1,10);
        if ($variable < 5)
            echo "Insuficiente: [0, 5)";
        elseif ($variable >= 5 && $variable < 6)
            echo " Suficiente: [5, 6)";
        elseif ($variable >= 6 && $variable < 7 )
            echo "Bien: [6, 7)";
        elseif ($variable >=7 && $variable < 9)
            echo "Notable: [7, 9)";
        else 
            echo "Sobresaliente: [9, 10]";
?>
</body>
</html>