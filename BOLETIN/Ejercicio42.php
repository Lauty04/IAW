<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-Sección 4</title>
</head>
<body>

    <?php
        $texto = "uno-dos-tres-cuatro-cinco";
        $nums = explode("-",$texto);
        echo"<h1>Manejo de cadenas</h1>";
        echo"<h3>Ejemplo 2</h3>";
    ?>
    <ul>
    <?php
        foreach ($nums as $numero){
            echo "<li>$numero</li>" . "<br>";
            
        }
            
    ?>
    <ul>
</body>
</html>
