<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <?php
    // Incluye los archivos con las funciones
    include("14.3.php");
    include("14.4.php");
    include("14.5.php");
    include("14.6.php");
    include("14.7.php");

    echo "<h2>Resultado de función inicializar_array:</h2>";
    echo "<pre>";
    print_r($arai);
    echo "</pre>";

    echo "<h2>Resultado de función calcular_media:</h2>";
    echo "<pre>";
    print_r($cuatro);
    echo "</pre>";

    echo "<h2>Resultado de función calcular_maximo:</h2>";
    echo "<pre>";
    print_r($cinco);
    echo "</pre>";

    echo "<h2>Resultado de función calcular_minimo:</h2>";
    echo "<pre>";
    print_r($seis);
    echo "</pre>";

    ?>
</body>
</html>
