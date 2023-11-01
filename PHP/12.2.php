<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Números</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Número</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
