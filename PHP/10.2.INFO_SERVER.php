<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "• La dirección IP del servidor donde se está ejecutando el script." . $_SERVER['SERVER_ADDR'] . '<br>';
        echo "<br>";
        echo  "• El nombre del host del servidor donde se está ejecutando el script.". $_SERVER['SERVER_NAME'] . '<br>';
        echo "<br>";
        echo  "• El software que está utilizando el servidor para servir el script.". $_SERVER['SERVER_SOFTWARE'] . '<br>';
        echo "<br>";
        echo  "• Información sobre el agente de usuario (User Agent) desde el que se está solicitando el script.". $_SERVER['HTTP_USER_AGENT'] . '<br>';
        echo "<br>";
        echo  "• La dirección IP del cliente que está solicitando el script.". $_SERVER['REMOTE_ADDR'] . '<br>';
    ?>
</body>
</html>
