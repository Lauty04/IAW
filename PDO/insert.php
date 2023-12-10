
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT (PDO)</title>
    <link rel="stylesheet" href="csss/insert.css">
</head>
<body>
    <?php
        include "Conexion.php";
    ?>
    <header>
        <h1>CRUD Insert con PHP (PDO)</h1>
        
    </header>

    
    <div class="principal">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table border="1">
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO1</th>
                    <th>APELLIDO2</th>
                    <th>GENERO</th>
                    <th>F_NACIMIENTO</th>
                    <th>CODIGO_POSTAL</th>
                    <th>TELEFONO</th>
                    <th>ENFERMEDAD</th>
                </tr>
                <tr>
                    
                    <td><input type="text" name="nombre"></td>
                    <td><input type="text" name="apellido1"></td>
                    <td><input type="text" name="apellido2"></td>
                    <td>
                        <select name="Genero">
                            <?php
                            $stmt = $conn->prepare("SELECT `id_genero`,`sexo` FROM `genero` ");
                            $stmt->execute();
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            echo '<option value=""></option>';
                            foreach ($stmt->fetchAll() as $row) {
                                echo '<option value="' . $row['id_genero'] . '">' . $row['sexo'] . '</option>';
                            }
                            ?>
                        </select>
                    </td>

                    <td><input type="text" name="fecha" placeholder="AAAA-MM-DD"></td>
                    <td><input type="text" name="postal"></td>
                    <td><input type="text" name="telefono"></td>
                    <td>
                        <select name="enfermedad">
                            <?php
                            $stmt = $conn->prepare("SELECT `nombre_enfermedad`,`codigo` FROM `enfermedades`");
                            $stmt->execute();
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                            echo '<option value=""></option>';
                            foreach ($stmt->fetchAll() as $row) {
                                echo '<option value="' . $row['codigo'] . '">' . $row['nombre_enfermedad'] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
        $nombre = strtoupper($_POST["nombre"]);
        $comn_nombre = false;
        $apellido1 = strtoupper($_POST["apellido1"]);
        $comn_ape1 = false;
        $apellido2 = strtoupper($_POST["apellido2"]);
        $comn_ape2 = false;
        $genero = $_POST["Genero"];
        $comn_genero = false;
        $fecha = $_POST["fecha"]; 
        $comn_fecha = false;
        $postal = strtoupper($_POST["postal"]);
        $comn_postal = false;
        $telefono = strtoupper($_POST["telefono"]);
        $comn_telf = false;
        $enfermedad = $_POST["enfermedad"];
        $comn_enfermedad = false;
        $stmt = $conn->prepare("SELECT MAX(id_paciente)+1 AS id FROM paciente");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = $result['id'];


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($nombre)){
                echo "El campo [NOMBRE] esta vacío.";
                echo "<br>";
            }else{
                $comn_nombre = true;
            }
            if (empty($apellido1)){
                echo "El campo [APELLIDO1] esta vacío.";
                echo "<br>";
            }else{
                $comn_ape1 = true;
            }
            if (empty($apellido2)){
                echo "El campo [APELLIDO2] esta vacío.";
                echo "<br>";
            }else{
                $comn_ape2 = true;
            }
            if (empty($genero)){
                echo "El campo [GENERO] esta vacío.";
                echo "<br>";
            }else{
                $comn_genero = true;
            }
            if (empty($fecha)){
                echo "El campo [FECHA] esta vacío.";
                echo "<br>";
            }else{
                $comn_fecha = true;
            }
            if (empty($postal)){
                echo "El campo [CODIGO POSTAL] esta vacío.";
                echo "<br>";
            }else{
                $comn_postal = true;
            }
            if (empty($telefono)){
                echo "El campo [TELEFONO] esta vacío.";
                echo "<br>";
            }else{
                $comn_telf = true;
            }
            if (empty($enfermedad)){
                echo "El campo [ENFERMEDADES] esta vacío.";
                echo "<br>";
            }else{
                $comn_enfermedad = true;
            }




            if ($comn_nombre == "true" and $comn_ape1 == "true" and $comn_ape2 == "true" and $comn_genero == "true" and $comn_fecha == "true" and $comn_postal == "true" and $comn_telf == "true" and $comn_enfermedad == "true"){
                
                try{
                    $conn->beginTransaction();
                    $conn->exec("INSERT INTO paciente (id_paciente,nombre,apellido1,apellido2,id_genero,f_nacimiento,cod_post,telf_contacto,cod_enfermedad) 
                        VALUES ($id,'$nombre','$apellido1','$apellido2',$genero,'$fecha',$postal,$telefono,$enfermedad)");
                    $conn->commit();
                    echo '<script>
                    alert("El paciente ' . $nombre . ' ' . $apellido1 . ' ' . $apellido2 . ' fue añadido con éxito.");
                    window.location.href = "index.php";
                    </script>';
                } catch(PDOException $e) {
                    $conn->rollback();
                    echo "Error: " . $e->getMessage();
                  } 
            }

        }
        
?>

    <footer>

    </footer>
</body>
</html>