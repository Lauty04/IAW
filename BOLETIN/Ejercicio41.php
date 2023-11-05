<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1-Sección 4</title>
</head>
<body>
    <?php
        $tabla = 'Alumnos';
        $arrai = array(
            array("id" => 1 , "nombre" => "Adrian", "edad" => 23),
            array("id" => 2 , "nombre" => "Scripting", "edad" => 19),
            array("id" => 3 , "nombre" => "Jose", "edad" => 28),
        );

        foreach ($arrai as $registro){
            $id = $registro['id'];
            $nombre = $registro['nombre'];
            $edad = $registro['edad'];
            echo "INSERT INTO $tabla (id, nombre, edad) VALUES ($id, '$nombre', $edad);<br>";
            echo "<br>";
        }
    ?>
</body>
</html>
