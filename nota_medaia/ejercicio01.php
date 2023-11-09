<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo nota media</title>
    <link rel="stylesheet" href="ejercicio01.css">
</head>
<body>
    <header>
        <h1>Prácticas y Examenes</h1>
    </header>
    <div class="practicas">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>Información Personal</legend>
                <label for="nombre">Nombre y Apellidos :</label><br>
                <input type="text" id="nombre" name="nombre" placeholder="Julian Martinez" value="" required><br> 
                <label for="nombre">Correo Electronico :</label>
                <input type="email" id="email" name="email" placeholder="julimartinez@gmail.com" value="" required ><br> 
                <label for="DNI">DNI :</label><br>
                <input  type="text" name="dni" placeholder="Introduzca su DNI" pattern="[A-Za-z]{1}[0-9]{7}[A-Za-z]{1}" title="Debe poner 8 números y una letra" minlength="9" maxlength="9" required/> 
            </fieldset>
            <fieldset>
            <legend>Practicas</legend>
                <label for="Practica1">Práctica 01 :</label><br>
                <input type="number" id="Practica1" name="Practica1" placeholder="5.5"  min="0" max="10" step="0.01" value=""><br>
                <label for="Practica2">Práctica 02 :</label><br>
                <input type="number" id="Practica2" name="Practica2" min="0" max="10" step="0.01" value=""><br>
                <label for="Practica3">Práctica 03 :</label><br>
                <input type="number" id="Practica3" name="Practica3" min="0" max="10" step="0.01" value=""><br>
                <label for="Practica4">Práctica 04 :</label><br>
                <input type="number" id="Practica4" name="Practica4" min="0" max="10" step="0.01" value=""><br>
                <br>
            </fieldset>
            <fieldset>
            <legend>Examenes</legend>
                <label for="Examen01">Examen 01 :</label><br>
                <input type="number" id="Examen01" name="Examen01" min="0" max="10" step="0.01" value=""><br>
                <label for="Examen02">Examen 02 :</label><br>
                <input type="number" id="Examen02" name="Examen02" min="0" max="10" step="0.01" value=""><br>
                <br>
            </fieldset>
            <br>
            <input type="submit" name="submit_examenes" value="Enviar Practicas y Exámenes"><br>
        </form>
    </div>
    <div class="pehpe">

        <?php
        $practica1 = $_POST["Practica1"] * 10 /100;
        $practica2 = $_POST["Practica2"] * 10 /100;
        $practica3 = $_POST["Practica3"] * 10 /100;
        $practica4 = $_POST["Practica4"] * 10 /100;
        $examen1 =  $_POST["Examen01"] * 30 / 100;
        $examen2 =  $_POST["Examen02"] * 30 / 100;
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $comemail = false;
        $comnom = false;
        $comdni = false;
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
            if (empty($nombre)) {
                echo "El campo Nombre y Apellidos es obligatorio";
                echo "<br>";
            }else{
                $comnom = "true";
            }



            
            if (empty($email)) {
                
                echo "El campo email es obligatorio";
                echo "<br>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                echo "El formato del email es inválido";
                echo "<br>";
            }else{
                $comemail = "true";
            }



            if (empty($dni)) {
                echo "El campo DNI es obligatorio";
                echo "<br>";
            }elseif(!preg_match("/[A-Z]{1}[0-9]{7}[A-Z]/",$dni)){
                echo "El dni es invalido";
                echo"<br>";
            }else{
                $comdni = "true";
            }


                
                if ($comemail == "true" and $comnom == "true" and  $comdni == "true") {
                        $practicas = array(
                            "Practica1" => $_POST["Practica1"],
                            "Practica2" => $_POST["Practica2"],
                            "Practica3" => $_POST["Practica3"],
                            "Practica4" => $_POST["Practica4"]
                        );
                        
                        $examenes = array(
                            "Examen1" => $_POST["Examen01"],
                            "Examen2" => $_POST["Examen02"]
                        );
                
                        /*             foreach ($practicas as $clave => $valor) {
                    echo "<br>";
                    echo "$clave => $valor<br>";
                    
                }
                
                foreach ($examenes as $clave => $valor) {
                    echo "<br>";
                    echo "$clave => $valor<br>";
                } */
                
                
                
                $resultado = $practica1 + $practica4 + $practica3 +$practica2 + $examen1 + $examen2;
                echo "Alumno : $nombre <br> Email : $email <br> DNI : $dni <br> Nota Final : $resultado";
                
            }else{
                echo "";
            }
        }
            ?>
            </div>
</body>
</html>
