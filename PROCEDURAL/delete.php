<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE MYSQLiPROCEDURAL</title>
    <link rel="stylesheet" href="csss/insert.css">
</head>

<body>
    <header>
        <?php
            include "Conexionprocedural.php";
        ?>
        <h1>Eliminar Paciente</h1>
    </header>
    <div class="principal">
    <?php
        $id_paciente_a_eliminar = $_GET['id'];
        $sql = "DELETE FROM paciente WHERE id_paciente = $id_paciente_a_eliminar ";
        if ($conn->query($sql) === TRUE) {
            echo '<script>
            alert("Paciente eliminado correctamente");
            window.location.href = "index.php";
            </script>';
          } else {
            echo "No se encontró el paciente con el ID: $id_paciente_a_eliminar";
            echo "<br>";
            echo "Error deleting record: " . $conn->error;
          }



        
    ?>
    </div>
</body>

</html>