<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01</title>
</head>
<body>
    <?php
         echo "<h2>Conversión de euros/pesetas</h2>";
         $variable = 1;
         $pesseta = 166.386;
         while ($variable <= 10){
            $resultado = $variable * $pesseta;
            echo "$variable" . "€ = " . "$resultado" . " pts <br>";
        $variable = $variable +1;
         }
    ?>
</body>
</html>