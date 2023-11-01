<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arai5 = [11, 37, 34, 37, 44, 47, 34, 42, 29, 29];
        $inicial = 1; 
        function calcular_maximo($arai5){
            
            foreach ($arai5 as $numero => $valor){
                if ($valor >  $inicial){
                    $inicial = $valor;
                }
            }
            return $inicial;
        }
        $funcion = calcular_maximo($arai5);
        echo "El valor maximo es : " . $funcion;
        $cinco= "El valor maximo es : " . $funcion;
    ?>
</body>
</html>