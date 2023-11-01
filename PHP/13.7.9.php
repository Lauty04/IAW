<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista =  array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");
        echo"Asort-Ordenado por valor :";
        asort($lista);
        print_r($lista);
        echo "<br>";
        echo"Arsort-Ordenado descendente por valor :";
        arsort($lista);
        print_r($lista);
        echo "<br>";
        echo"Ksort-Ordenado por clave :";
        ksort($lista);
        print_r($lista);
        echo "<br>";
        echo"Krsort-Ordenado descendente por valor :";
        krsort($lista);
        print_r($lista);

    ?>
</body>
</html>