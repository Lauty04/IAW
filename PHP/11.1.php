<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $variable = rand(1,2);
        if ($variable == 1) {
            echo "$variable";
            echo "cara";
            echo '<img src="./IMGS/cara.jpg" alt="">';
        } else {
            echo "$variable";
            echo "cruz";
            echo '<img src="./IMGS/Italy_1euro.jpg" alt="">';
        }
    ?>
</body>
</html>
