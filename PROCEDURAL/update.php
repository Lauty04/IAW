<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE (MYSQLiPROCEDURAL)</title>
    <link rel="stylesheet" href="csss/insert.css">
</head>

<body>
    <?php
        include "Conexionprocedural.php";
        $id = $_GET['id'];
/*         $variable = "SELECT id_paciente, nombre, apellido1, apellido2, genero, f_nacimiento, cod_post, telf_contacto, cod_enfermedad FROM paciente WHERE id_paciente = $id";
        echo $variable; */
        $sql = "SELECT `id_paciente`,`nombre`,`apellido1`,`apellido2`,`f_nacimiento`,`cod_post`,`telf_contacto`,enfermedades.codigo,enfermedades.nombre_enfermedad,genero.id_genero,genero.sexo
        FROM paciente 
        JOIN enfermedades ON enfermedades.codigo=paciente.cod_enfermedad  
        JOIN genero ON paciente.id_genero=genero.id_genero
        WHERE id_paciente = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $pnombre = $row['nombre'];
        $papelido1 = $row['apellido1'];
        $papelido2 = $row['apellido2'];
        $pgenero = $row['sexo'];
        $pf_nacimiento = $row['f_nacimiento'];
        $pcod_post = $row['cod_post'];
        $ptelf_contacto = $row['telf_contacto'];
        $penfermedad = $row['nombre_enfermedad'];
        $pcod_enfermedad =  $row['codigo'];
        
/*         foreach ($result as $campo => $valor) {
            $campo = strtoupper($campo);
            echo "<br>";
            echo " $valor ";
        } */
        ?>

    <header>
        <h1>CRUD Básico con PHP (MYSQLiPROCEDURAL)</h1>

    </header>

    <div class="principal">

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']. "?id=$id" ?>">
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

                    <td><input type="text" name="nombre" value=<?php echo $pnombre; ?>></td>
                    <td><input type="text" name="apellido1" value=<?php echo $papelido1; ?>></td>
                    <td><input type="text" name="apellido2" value=<?php echo $papelido2; ?>></td>
                    <td>
                    <select name="Genero">
    <?php
    $stmt = mysqli_prepare($conn, "SELECT `id_genero`,`sexo` FROM `genero` ");
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $id_genero, $sexo);

    $stmt2 = mysqli_prepare($conn, "SELECT paciente.id_genero,genero.sexo FROM `paciente` 
        JOIN genero ON genero.id_genero=paciente.id_genero
        WHERE id_paciente = ?");
    mysqli_stmt_bind_param($stmt2, "i", $id);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_store_result($stmt2);
    mysqli_stmt_bind_result($stmt2, $paciente_id_genero, $paciente_sexo);
    mysqli_stmt_fetch($stmt2);
    $pacienteGenero = $paciente_sexo;

    while (mysqli_stmt_fetch($stmt)) {
        $selected = ($sexo == $pacienteGenero) ? 'selected' : '';
        echo '<option value="' . $id_genero . '" ' . $selected . '>' . $sexo . '</option>';
    }

    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);
    ?>
</select>


                    </td>
                    <td><input type="text" name="fecha" placeholder="AAAA-MM-DD" value=<?php echo $pf_nacimiento; ?>>
                    </td>
                    <td><input type="text" name="postal" value=<?php echo $pcod_post; ?>></td>
                    <td><input type="text" name="telefono" value=<?php echo $ptelf_contacto; ?>></td>
                    <td>
                        <select name="enfermedad">
                            <?php
                            $sql = "SELECT `nombre_enfermedad`,`codigo` FROM `enfermedades`";
                            $result = mysqli_query($conn, $sql);
                            if (!$result) {
                                die("Error en la consulta: " . mysqli_error($conn));
                            }
                            while($row2 = mysqli_fetch_assoc($result)) {
                                if ($pcod_enfermedad == $row2['codigo']){

                                    echo '<option value="' . $row2['codigo'] . '"selected>' . $row2['nombre_enfermedad'] . '</option>';
                                }
                                echo '<option value="' . $row2['codigo'] . '">' . $row2['nombre_enfermedad'] . '</option>';
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
        if ($enfermedad == 'Resfriado común'){
            $enfermedad = 1;
        }elseif ($enfermedad == 'Gripe'){
            $enfermedad = 2;
        }elseif ($enfermedad == 'Hipertensión'){
            $enfermedad = 3;
        }elseif ($enfermedad == 'Diabetes'){
            $enfermedad = 4;
        }elseif ($enfermedad == 'Asma'){
            $enfermedad = 5;
        }elseif ($enfermedad == 'Artritis'){
            $enfermedad = 6;
        }else{
            $enfermedad = 7;
        }
        


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




            if ($comn_nombre == true and $comn_ape1 == true and $comn_ape2 == true and $comn_genero == true and $comn_fecha == true and $comn_postal == true and $comn_telf == true and $comn_enfermedad == true){
                
                $sql = "UPDATE paciente SET `nombre`='$nombre', `apellido1`='$apellido1', `apellido2`='$apellido2', `f_nacimiento`='$fecha', `cod_post`=$postal, `telf_contacto`=$telefono, `cod_enfermedad`= $enfermedad, `id_genero`= $genero WHERE id_paciente= $id ";
                if (mysqli_query($conn, $sql)) {
 
                    echo '<script>
                    alert("El paciente ' . $nombre . ' ' . $apellido1 . ' ' . $apellido2 . ' fue editado con éxito.");
                    window.location.href = "index.php";
                    </script>';
                  } else {
                    echo "Error updating record: " . mysqli_error($conn);
                  }
            }

        }
        
?>

    <footer>

    </footer>
</body>

</html>