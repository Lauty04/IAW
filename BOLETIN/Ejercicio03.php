<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio03</title>
    <style>
        .centro {
            display: flex;
            justify-content: center;
            align-items: center;
        } 
        .encabezados {
            background-color: #FFEECC;
        }

        .fila-par {
            background-color: #CCCCCC; 
        }
        .fila-impar {
            background-color: #CCEEFF; 
        }
    </style>
</head>
<body>
    <h2 class="centro">Conversión de euros/pesetas</h2>
    <div class="centro">
        <?php
            $variable = 1;
            $pesseta = 166.386;
        ?>
        <table border="0">
            <tr>
                <th class="encabezados">Euros €</th>
                <th class="encabezados">Pesetas pts</th>
            </tr>
            <?php
                while ($variable <= 10) {
                    $resultado = $variable * $pesseta;

                    $fila_clase = ($variable % 2 == 0) ? 'fila-par' : 'fila-impar';

                    echo "<tr class=\"$fila_clase\">";
                    echo "<td>$variable pts</td>";
                    echo "<td>$resultado pts</td>";
                    echo "</tr>";
                    $variable++;
                }
            ?>
        </table>
    </div>
</body>
</html>
s