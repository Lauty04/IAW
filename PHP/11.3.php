<?php
$variable = rand(1, 7);
echo "$variable";
switch ($variable) {
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miércoles";
        break;
    case 4:
        echo "jueves";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sábado";
        break;
    default:
        echo "domingo";
}
?>
