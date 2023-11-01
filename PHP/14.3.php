<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $elementos = 10 ;
        $min = 5 ;
        $max = 50 ;
        function inicializar_array($elementos, $min, $max){
            $variable = 1;
            while ($variable <= $elementos){
                $rando = rand($min, $max,);
                $lista[] = $rando; 
                $variable = $variable +1;
            }
            #print_r($lista);
            return $lista;

        }
        $arai = inicializar_array($elementos, $min, $max);
        print_r($arai);
        
    ?>
</body>
</html>