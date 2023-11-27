<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Modificar con PHP (PDO)</title>
    <link rel="stylesheet" href="csss/insert.css">
</head>
<body>
    <?php
        include "ConexionPDO.php";
        $id = $_GET['id'];
/*         $variable = "SELECT id_paciente, nombre, apellido1, apellido2, genero, f_nacimiento, cod_post, telf_contacto, cod_enfermedad FROM paciente WHERE id_paciente = $id";
        echo $variable; */
        $stmt = $conn->prepare("SELECT id_paciente, nombre, apellido1, apellido2, genero, f_nacimiento, cod_post, telf_contacto, cod_enfermedad FROM paciente WHERE id_paciente = $id");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $pnombre = $result['nombre'];
        $papelido1 = $result['apellido1'];
        $papelido2 = $result['apellido2'];
        $pgenero = $result['genero'];
        $pf_nacimiento = $result['f_nacimiento'];
        $pcod_post = $result['cod_post'];
        $ptelf_contacto = $result['telf_contacto'];
        $pcod_enfermedad = $result['cod_enfermedad'];
        
/*         foreach ($result as $campo => $valor) {
            $campo = strtoupper($campo);
            echo "<br>";
            echo " $valor ";
        } */
        ?>

<header>
    <h1>CRUD Básico con PHP (PDO)</h1>
    
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
                        <select name="Genero" >
                            <option value=<?php echo $pgenero; ?> ><?php echo $pgenero; ?></option>
                            <option value="hombre">hombre</option>
                            <option value="mujer">mujer</option>
                        </select>
                    </td>
                    <td><input type="text" name="fecha" placeholder="AAAA-MM-DD" value=<?php echo $pf_nacimiento; ?>></td>
                    <td><input type="text" name="postal" value=<?php echo $pcod_post; ?>></td>
                    <td><input type="text" name="telefono" value=<?php echo $ptelf_contacto; ?>></td>
                    <td>
                        <select name="enfermedad" >
                            <option value=<?php echo $pcod_enfermedad; ?> ><?php echo $pcod_enfermedad; ?></option>
                            <option value="Resfriado común">Resfriado común</option>
                            <option value="Gripe">Gripe</option>
                            <option value="Hipertensión">Hipertensión</option>
                            <option value="Diabetes">Diabetes</option>
                            <option value="Asma">Asma</option>
                            <option value="Artritis">Artritis</option>
                            <option value="Estres">Estres</option>
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
        $genero = strtoupper($_POST["Genero"]);
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
                
                try{
                    $conn->beginTransaction();
                    $conn->exec("UPDATE paciente SET nombre='$nombre' ,apellido1='$apellido1' ,apellido2='$apellido2' ,genero='$genero' ,f_nacimiento='$fecha' ,cod_post=$postal ,telf_contacto=$telefono ,cod_enfermedad=$enfermedad WHERE id_paciente=$id");
                    $conn->commit();
                    echo "New records update successfully";
                    echo "<br>";
                    echo "El paciente $nombre $apellido1 $apellido2 fue editado con éxito.";
                    echo "<br>";
                    echo "<a href='PDO.php'>Volver</a>";
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