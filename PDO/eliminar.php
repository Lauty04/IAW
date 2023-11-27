<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR</title>
    <link rel="stylesheet" href="csss/insert.css">
</head>

<body>
    <header>
        <?php
            include "ConexionPDO.php";
        ?>
        <h1>Eliminar Paciente</h1>
    </header>
    <div class="principal">
        <?php
        $id_paciente_a_eliminar = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM `paciente` WHERE id_paciente = $id_paciente_a_eliminar ");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $stmt = $conn->prepare("DELETE FROM paciente WHERE id_paciente = $id_paciente_a_eliminar ");
            $stmt->execute();
            echo "<p>Has eliminado al paciente:</p>";
            foreach ($result as $campo => $valor) {
                $campo = strtoupper($campo);
                echo " $valor ";
            }
            echo "<br>";
            echo "<a href='PDO.php'>Volver</a>";
        } else {
            echo "No se encontró el paciente con el ID: $id_paciente_a_eliminar";
        }

        
    ?>
    </div>
</body>

</html>