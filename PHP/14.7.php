<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de 2 columnas</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>Clave</th>
            <th>Valor</th>
        </tr>
        <?php
        $arai7 = [11, 37, 34, 37, 44, 47, 34, 42, 29, 29];
        
        function mostrar_array($arai7) {
            foreach ($arai7 as $clave => $valor) {
                echo "<tr>";
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo "</tr>";
            }
        }
        
        mostrar_array($arai7);
        ?>
    </table>
</body>
</html>
