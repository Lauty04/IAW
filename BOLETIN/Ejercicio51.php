<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01 sección 5 </title>
</head>
<body>
    <h3><a href="Ejercicio51.php">Conversor de euros a pesetas</a></h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cambio">Cmbios de euros :</label><br>
        <input type="number" id="cambio" name="cambio" value=""><br>
        <br>
        <input type="submit" value="Submit">
        <br>
    </form>   
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $euro = $_POST["cambio"];
            $peseta = 166.386;
            $resultado = $euro * $peseta;
            echo "<br>";
            echo "$euro euros son $resultado pesetas";
        }
    ?>
</body>
</html>