<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Básico con PHP (PDO)</title>
    <link rel="stylesheet" href="csss/PDO.css">
</head>
<body>
    <?php
        include "Conexionprocedural.php";
    ?>
    <header>
        <h1>CRUD Básico con PHP (MYSQLiPROCEDURAL)</h1>
    </header>
    <div class="boton">
        <h2><a href="insert.php" >INSERTAR</a></h2>
    </div>
    <div class="principal">
    <?php
    $sql = "SELECT `id_paciente`,`nombre`,`apellido1`,`apellido2`,`f_nacimiento`,`cod_post`,`telf_contacto`,enfermedades.nombre_enfermedad,genero.sexo FROM `paciente` 
    JOIN enfermedades ON paciente.cod_enfermedad=enfermedades.codigo
    JOIN genero ON paciente.id_genero=genero.id_genero";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    echo "<div>";
    echo "<table border='1'>";
    echo "<tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO1</th>
        <th>APELLIDO2</th>
        <th>GENERO</th>
        <th>F_NACIMIENTO</th>
        <th>CODIGO_POSTAL</th>
        <th>TELEFONO</th>
        <th>ENFERMEDAD</th>
        <th>ACCIONES</th>
        </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id_paciente']}</td>";
        echo "<td>{$row['nombre']}</td>";
        echo "<td>{$row['apellido1']}</td>";
        echo "<td>{$row['apellido2']}</td>";
        echo "<td>{$row['sexo']}</td>";
        echo "<td>{$row['f_nacimiento']}</td>";
        echo "<td>{$row['cod_post']}</td>";
        echo "<td>{$row['telf_contacto']}</td>";
        echo "<td>{$row['nombre_enfermedad']}</td>";
        echo "<td>
                <a href='update.php?id={$row['id_paciente']}' class='modificar-btn'>MODIFICAR</a>
                <button class='eliminar-btn' data-id='{$row['id_paciente']}'>ELIMINAR</button>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    ?>

    <script>
        var eliminarButtons = document.getElementsByClassName('eliminar-btn');
        Array.from(eliminarButtons).forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                // Obtiene el ID del paciente a eliminar
                var pacienteID = this.getAttribute('data-id');

                // Pregunta al usuario antes de eliminar
                var confirmacion = confirm('¿Estás seguro de que quieres eliminar este registro?');

                // Si el usuario confirma, redirige a eliminar.php con el ID correspondiente
                if (confirmacion) {
                    window.location.href = 'delete.php?id=' + pacienteID;
                }
            });
        });

        // Agrega un listener para los botones de modificar
        var modificarButtons = document.getElementsByClassName('modificar-btn');
        Array.from(modificarButtons).forEach(function (button) {
            button.addEventListener('click', function (event) {
                // No es necesario prevenir el comportamiento por defecto del botón
                // porque es un enlace y ya tiene el comportamiento de redirección

                // Puedes agregar aquí la lógica adicional para la acción de modificar si es necesario
            });
        });
    </script>
</div>






    <footer>

    </footer>
</body>
</html>
