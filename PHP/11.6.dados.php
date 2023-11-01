<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dado Aleatorio</title>
        <style>
	.centro {
	    border: 2px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
  <div class="centro">
    <?php
        $imagenes = [
            "IMGS/1dado.jpg",
            "IMGS/2dado.jpg",
            "IMGS/3dado.jpg",
            "IMGS/4dado.jpg",
            "IMGS/5dado.jpg",
            "IMGS/6dado.jpg",
        ];

        $variable = rand(0, 5); 
        echo '<img src="' . $imagenes[$variable] . '" alt="">';
?>
</div>
</body>
</html>
