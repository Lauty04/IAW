<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10.3</title>
</head>
<body>
    <?php
        echo "Variable GLOBAL <br>";
        echo "<pre>";
        print_r($GLOBALS);
        echo "</pre><br>";
        echo "Variable SERVER <br>";
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre><br>";
        echo "Variable GET <br>";
        echo "<pre>";
        print_r($_GET);
        echo "</pre><br>";
        echo "Variable POST <br>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre><br>";
        echo "Variable FILES <br>";
        echo "<pre>";
        print_r($_FILES);
        echo "</pre><br>";
        echo "Variable COIKIE <br>";
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre><br>";
        echo "Variable SESSION <br>";
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre><br>";
        echo "Variable REQUEST <br>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre><br>";
        echo "Variable ENV <br>";
        echo "<pre>";
        print_r($_ENV);
        echo "</pre><br>";
    ?>
</body>
</html>
