<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $variable = 1;
        while ($variable <= 10){
            $rando = rand(1,30);
            $lista[] = $rando; 
            $variable = $variable +1;
        }
        
        print_r($lista);

    ?>
</body>
</html>