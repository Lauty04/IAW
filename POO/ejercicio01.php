<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio Básico POO en PHP</h2>
    <?php
        class Persona{
            // Properties
            private $nombre;
            private $apellido1;
            private $apellido2;
            private $edad;
            public $imprimir;

            // Methods
            function __construct($nombre,$apellido1,$apellido2,$edad){
                $this->nombre = $nombre;
                $this->apellido1 = $apellido1;
                $this->apellido2 = $apellido2;
                $this->edad = $edad;
            }
            function get_nombre(){
                return $this->nombre;
            }
            function set_nombre($nombre){
                $this->nombre = $nombre;
            }


            function get_apellido1(){
                return $this->apellido1;
            }
            function set_apellido1($apellido1){
                $this->apellido1 = $apellido1;
            }


            function get_apellido2(){
                return $this->apellido2;
            }
            function set_apellido2($apellido2){
                $this->apellido2 = $apellido2;
            }


            function get_edad(){
                return $this->edad;
            }
            function set_edad($edad){
                $this->edad = $edad;
            }


            function imprimir(){
                $concatenar = "Nombre : " .  $this->nombre . "<br> Apellido1 : " .  $this->apellido1 . "<br> Apellido2 : " .  $this->apellido2 . "<br> Edad : " . $this->edad; 
                return $concatenar;
                
            }


        }
        echo "<h3>Primer Parte</h3>";
       $lautaro = new Persona("lautaro","lorca","fernandez",19);
       echo $lautaro->get_nombre();
       echo "<br>";
       echo $lautaro->get_apellido1();
       echo "<br>";
       echo $lautaro->get_apellido2();
       echo "<br>";
       echo $lautaro->get_edad(); 
       echo "<br>";
       echo "<h3>Concatenado</h3>";
       echo $lautaro->imprimir();
       echo "<br>";


       echo "<h3>Segunda Parte</h3>";
        $lautaro->set_nombre('Cesar');
        $lautaro->set_apellido1('Tomas');
        $lautaro->set_apellido2('Pirez');
        $lautaro->set_edad(35);
        echo $lautaro->get_nombre();
        echo "<br>";
        echo $lautaro->get_apellido1();
        echo "<br>";
        echo $lautaro->get_apellido2();
        echo "<br>";
        echo $lautaro->get_edad();
    ?>
</body>
</html>