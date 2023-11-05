<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01 sección 5 </title>
</head>
<body>
    <h2><a href="Ejercicio52.php">Conversor de monedas</a></h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cambio">Cantidad de euros :</label><br>
        <input type="number" id="cambio" name="cambio" value=""><br>
        <br>
        <label for="moneda">Convertir a :</label><br>
        <select name="monedas" id="moneda">
            <option value="pesetas">Pesetas</option>
            <option value="dolares">Dolares</option>
            <option value="libras">Libra Esterlinas</option>
            <option value="yenes">Yenes</option>
            <option value="francos">Francos</option>
        </select><br>
        <br>
        <input type="submit" value="Submit">
        <br>
    </form>
    <?php
        if ($_POST["cambio"] == "") {
            echo "Debes introducir un valor";
        }else{

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $euro = $_POST["cambio"];
                $moneda = $_POST["monedas"];
                $peseta = 166.386;
                $dolar = 1.325;
                $libra = 0.927;
                $yanes = 118.232;
                $francos = 1.515;
                
                if ($moneda == 'pesetas') {
                    $resultado = $euro * $peseta;
                    echo "$euro euros son $resultado pesetas";
                } elseif ($moneda == 'dolares') {
                    $resultado = $euro * $dolar;
                    echo "$euro euros son $resultado dólares";
                } elseif ($moneda == 'libras') {
                    $resultado = $euro * $libra;
                    echo "$euro euros son $resultado libras esterlinas";
                } elseif ($moneda == 'yenes') {
                    $resultado = $euro * $yanes;
                    echo "$euro euros son $resultado yenes";
                } else {
                    $resultado = $euro * $francos;
                    echo "$euro euros son $resultado francos";
                }
            }
        }
            ?>

</body>
</html>