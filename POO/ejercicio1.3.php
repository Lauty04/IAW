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
    include("ejercicio1.2.php");

         echo "<h3>Primera Instancia</h3>";
         echo "<br>";
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
          echo "<h3>Concatenado</h3>";
          echo $lautaro->imprimir();
          echo "<br>";
          echo '<hr>';
          echo '<hr>';
          echo "<br>";
          echo "<h3>Segunda Instancia</h3>";
          echo "<br>";



          $andres = new Persona("Andres","Castro","Demichelis",19);
          echo $andres->get_nombre();
          echo "<br>";
          echo $andres->get_apellido1();
          echo "<br>";
          echo $andres->get_apellido2();
          echo "<br>";
          echo $andres->get_edad(); 
          echo "<br>";
          echo "<h3>Concatenado</h3>";
          echo $andres->imprimir();
          echo "<br>";
   
   
          echo "<h3>Segunda Parte</h3>";
           $andres->set_nombre('Enzo');
           $andres->set_apellido1('Perez');
           $andres->set_apellido2('Casco');
           $andres->set_edad(35);
           echo $andres->get_nombre();
           echo "<br>";
           echo $andres->get_apellido1();
           echo "<br>";
           echo $andres->get_apellido2();
           echo "<br>";
           echo $andres->get_edad();
           echo "<h3>Concatenado</h3>";
           echo $andres->imprimir();
    ?>
</body>
</html>