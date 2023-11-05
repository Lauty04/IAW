<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02</title>
    <style>
        .centro {
            display: flex;
            justify-content: center;
            align-items: center;
            
        } 
    </style>
</head>
<body>
<h2 class="centro">Conversión de euros/pesetas</h2>
    <div class="centro">

            <?php
            //  echo "<h2>Conversión de euros/pesetas</h2>";
             $variable = 1;
             $pesseta = 166.386;
             ?>
        <table border="2">
            <tr>
                <th>Euros €</th>
                <th>Pesetas pts</th>
            </tr>
            <?php
                while ($variable <= 10){
                    $resultado = $variable * $pesseta;

                    echo "<tr>";
                    echo "<td>$variable €</td>";
                    echo "<td>$resultado pts</td>";
                    echo "</tr>";
                    $variable = $variable +1;
                }    
            ?>


        </table>
    </div>
</body>
</html>