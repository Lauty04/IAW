<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE (PDO)</title>
    <link rel="stylesheet" href="csss/insert.css">
</head>

<body>
    <header>
        <?php
            include "Conexion.php";
        ?>
        <h1>CRUD Delete con PHP (PDO)</h1>
    </header>
    <div class="principal">
        <?php
        $id_paciente_a_eliminar = $_GET['id'];
        echo $id_paciente_a_eliminar;
        $stmt = $conn->prepare("SELECT * FROM `paciente` WHERE id_paciente = $id_paciente_a_eliminar ");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $stmt = $conn->prepare("DELETE FROM paciente WHERE id_paciente = $id_paciente_a_eliminar ");
            $stmt->execute();
            echo '<script>
            alert("Paciente eliminado correctamente");
            window.location.href = "index.php";
          </script>';
        } else {
            echo "No se encontró el paciente con el ID: $id_paciente_a_eliminar";
        }

        
    ?>
    </div>
</body>

</html>