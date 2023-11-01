<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $arai6 = [11, 37, 34, 37, 44, 47, 34, 42, 29, 29];
        $inicial = 555; 
        function calcular_minimo($arai6,$inicial){
            
            foreach ($arai6 as $numero => $valor){
                if ($valor <  $inicial){
                    $inicial = $valor;
                }
            }
            return $inicial;
        }
        $funcion = calcular_minimo($arai6, $inicial);
        echo "El valor minimo es : " . $funcion;
        $seis = "El valor minimo es : " . $funcion;
    ?>
</body>
</html>