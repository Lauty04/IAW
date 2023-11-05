<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>
<body>
    <?php
         $nombre = $_GET['nombre'];
         $ape = $_GET['apellido'];
         if (isset($_GET['nombre']) && isset($_GET['apellido'])  ){

             echo "El nombre es " .  htmlspecialchars($nombre) . " y su apellido es " .  htmlspecialchars($ape);
             echo "<br>";
             echo strlen($nombre);         
            }
         else{
                echo "El nombre es Laautaro y su apellido es Lorca";
         }

    ?>
</body>
</html>