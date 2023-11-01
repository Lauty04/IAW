<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <?php
    // Desactivar la visualización de errores
    error_reporting(0);
    ini_set('display_errors', 0);

    // Incluye los archivos con las funciones


    echo "<h2>Resultado de función inicializar_array:</h2>";
    include("14.3.php");
    

    echo "<h2>Resultado de función calcular_media:</h2>";
    
    include("14.4.php");
    

    echo "<h2>Resultado de función calcular_maximo:</h2>";
    include("14.5.php");

    echo "<h2>Resultado de función calcular_minimo:</h2>";
    include("14.6.php");

    echo "<h2>Resultado de función imprimir_array:</h2>";
    include("14.7.php");
    ?>
</body>
</html>
