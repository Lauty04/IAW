<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS</title>
    <style>
        .centro {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black; 
        }  
    </style>
</head>
<body>
    <div class="centro">

    <?php
    

    $random = rand(1,6);
    if ($random == 1) {
        echo '<img src="IMGS/1dado.jpg" alt="">';
    } elseif ($random == 2) {
        echo '<img src="IMGS/2dado.jpg" alt="">';

    } elseif ($random == 3) {
        echo '<img src="IMGS/3dado.jpg" alt="">';

    }  elseif ($random == 4) {
        echo '<img src="IMGS/4dado.jpg" alt="">';

    }  elseif ($random == 5) {
        echo '<img src="IMGS/5dado.jpg" alt="">';

    }  else {
        echo '<img src="IMGS/6dado.jpg" alt="">';

    }

    ?>
    </div>
</body>
</html>
