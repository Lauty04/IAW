<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $variable = rand(1, 6);
        echo "$variable";
        switch ($variable) {
            case 1:
                echo '<img src="IMGS/1dado.jpg" alt="">';
                break;
            case 2:
                echo '<img src="IMGS/2dado.jpg" alt="">';
                break;
            case 3:
                echo '<img src="IMGS/3dado.jpg" alt="">';
                break;
            case 4:
                echo '<img src="IMGS/4dado.jpg" alt="">';
                break;
            case 5:
                echo '<img src="IMGS/5dado.jpg" alt="">';
                break;
            case 6:
                echo '<img src="IMGS/6dado.jpg" alt="">';
                break;
        }
     ?>
   </div>
</body>
</html>
