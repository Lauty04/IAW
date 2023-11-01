<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arai4 = [11, 37, 34, 37, 44, 47, 34, 42, 29, 29];
        $calcular = 0; 
        $inicial = 1;
        function calcular_media($arai4) {
            $calcular = 0;
            $inicial = 0; 
            foreach ($arai4 as $numero => $valor){
                $media = $valor;
                $calcular = $calcular + $media;
                $inicial = $inicial + 1;
            }
            $calcular = $calcular / $inicial;
            return $calcular;
        }
        
        $media = calcular_media($arai4, $calcular);
        echo "La media de los valores del array es: " . $media;
        $cuatro = "La media de los valores del array es: " . $media
    ?>
</body>
</html>