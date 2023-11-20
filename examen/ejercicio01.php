<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen IAW</title>
    <link rel="stylesheet" href="ejercicio01.css">
</head>
<body>
    <header>
        <h1>Calculadora de la liga</h1>
    </header>
    <div class='php'>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
        <legend>Profesor1</legend>
        <div class='nombre'>

            <label for="nombre">Nombre y Apellidos :</label><br>
            <input type="text" id="nombre" name="nombre" placeholder="Lautaro Lorca" ><br> 
            <label for="nombre">Correo Electronico :</label><br>
            <input type="email" id="email" name="email" placeholder="lautaro_lorca@gmail.com" ><br>
        </div>

        <div class='numeros'>

            <br>
            <label for="nombre">Partida1 :</label><br>
            <input type="number" id='partida1' name="partida1" placeholder="puntos"><br>
            <label for="nombre">Partida2 :</label><br>
            <input type="number" id='partida2' name="partida2" placeholder="puntos"><br>
            <label for="nombre">Partida3 :</label><br>
            <input type="number" id='partida3' name="partida3" placeholder="puntos"><br>
        </div>


    </fieldset>

    <fieldset>
        <legend>Profesor2</legend>
        <div class='nombre'>

            <label for="nombre">Nombre y Apellidos :</label><br>
            <input type="text" id="nombre2" name="nombre2" placeholder="Lautaro Lorca" ><br> 
            <label for="nombre">Correo Electronico :</label><br>
            <input type="email" id="email" name="email2" placeholder="lautaro_lorca@gmail.com" ><br>
        </div>

        <div class='numeros'>

            <br>
            <label for="nombre">Partida1 :</label><br>
            <input type="number" id='partida1' name="partida12" placeholder="puntos"><br>
            <label for="nombre">Partida2 :</label><br>
            <input type="number" id='partida2' name="partida22" placeholder="puntos"><br>
            <label for="nombre">Partida3 :</label><br>
            <input type="number" id='partida3' name="partida32" placeholder="puntos"><br>
        </div>


    </fieldset>
    

    <fieldset>
        <legend>Profesor3</legend>
        <div class='nombre'>

            <label for="nombre">Nombre y Apellidos :</label><br>
            <input type="text" id="nombre2" name="nombre3" placeholder="Lautaro Lorca" ><br> 
            <label for="nombre">Correo Electronico :</label><br>
            <input type="email" id="email" name="email3" placeholder="lautaro_lorca@gmail.com" ><br>
        </div>

        <div class='numeros'>

            <br>
            <label for="nombre">Partida1 :</label><br>
            <input type="number" id='partida1' name="partida13" placeholder="puntos"><br>
            <label for="nombre">Partida2 :</label><br>
            <input type="number" id='partida2' name="partida23" placeholder="puntos"><br>
            <label for="nombre">Partida3 :</label><br>
            <input type="number" id='partida3' name="partida33" placeholder="puntos"><br>
        </div>


    </fieldset>



    <fieldset>
        <legend>Profesor4</legend>
        <div class='nombre'>

            <label for="nombre">Nombre y Apellidos :</label><br>
            <input type="text" id="nombre" name="nombre4" placeholder="Lautaro Lorca" ><br> 
            <label for="nombre">Correo Electronico :</label><br>
            <input type="email" id="email" name="email4" placeholder="lautaro_lorca@gmail.com" ><br>
        </div>

        <div class='numeros'>

            <br>
            <label for="nombre">Partida1 :</label><br>
            <input type="number" id='partida1' name="partida14" placeholder="puntos"><br>
            <label for="nombre">Partida2 :</label><br>
            <input type="number" id='partida2' name="partida24" placeholder="puntos"><br>
            <label for="nombre">Partida3 :</label><br>
            <input type="number" id='partida3' name="partida34" placeholder="puntos"><br>
        </div>


    </fieldset>






    <input type="submit" name="submit" value="CALCULAR LIGA"><br>
    </form>
    </div>

    

    <?php
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $partida1 = $_POST["partida1"];
        $partida2 = $_POST["partida2"];
        $partida3 = $_POST["partida3"];
        $media1 = $partida1 + $partida2 + $partida3;



        $nombre2 = $_POST["nombre2"];
        $email2 = $_POST["email2"];
        $partida12 = $_POST["partida12"];
        $partida22 = $_POST["partida22"];
        $partida32 = $_POST["partida32"];
        $media2 = $partida12 + $partida22 + $partida32;



        $nombre2 = $_POST["nombre3"];
        $email2 = $_POST["email3"];
        $partida12 = $_POST["partida13"];
        $partida22 = $_POST["partida23"];
        $partida32 = $_POST["partida33"];
        $media3 = $partida13 + $partida23 + $partida33;



        $nombre2 = $_POST["nombre4"];
        $email2 = $_POST["email4"];
        $partida12 = $_POST["partida14"];
        $partida22 = $_POST["partida24"];
        $partida32 = $_POST["partida34"];
        $media4 = $partida14 + $partida24 + $partida34;



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




            if (empty($nombre2)) {
                echo "El campo Nombre y Apellidos es obligatorio";
                echo "<br>";
            }else{
                $comnom = "true";
            }

            
            if (empty($email2)) {
                
                echo "El campo email es obligatorio";
                echo "<br>";
            } elseif (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
                
                echo "El formato del email es inválido";
                echo "<br>";
            }else{
                $comemail = "true";
            }



            if (empty($nombre3)) {
                echo "El campo Nombre y Apellidos es obligatorio";
                echo "<br>";
            }else{
                $comnom = "true";
            }

            
            if (empty($email3)) {
                
                echo "El campo email es obligatorio";
                echo "<br>";
            } elseif (!filter_var($email3, FILTER_VALIDATE_EMAIL)) {
                
                echo "El formato del email es inválido";
                echo "<br>";
            }else{
                $comemail = "true";
            }



            if (empty($nombre4)) {
                echo "El campo Nombre y Apellidos es obligatorio";
                echo "<br>";
            }else{
                $comnom = "true";
            }

            
            if (empty($email4)) {
                
                echo "El campo email es obligatorio";
                echo "<br>";
            } elseif (!filter_var($email4, FILTER_VALIDATE_EMAIL)) {
                
                echo "El formato del email es inválido";
                echo "<br>";
            }else{
                $comemail = "true";
            }


        }

        if ($media1 > $media2){
            $ganador1 = $nombre;
            $media1 = $media;
        }else{
            $ganador1 = $nombre2;
            $media1 = $media2;
        }

        if ($media3 > $media4){
            $ganador2 = $nombre3;
            $media2 = $media3;
        }else{
            $ganador2 = $nombre4;
            $media2 = $media4;
        }

        if ($ganador1 > $ganador2){
            $ganador = $ganador1;
            $medias = $media1;
        }else{
            $ganador = $ganador2;
            $medias = $media2;
        }


        


    ?>

        <div class='fin'>
            <?php
                   echo "<h2>Ganador de la liga</h2>";
                   echo "<br>";
                   echo "EL ganador es $ganador con una media de $medias";
            ?>
        </div>

</body>
</html>