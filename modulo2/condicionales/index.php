<?php
//Estructura condcional if-else- elseif

/*En Colombia hay medidas que regulan la velocidad de los automóviles según
las zonas donde se encuentre:
- 30KM/H - zonas escolares
- 60KM/H - vías urbanas
- 80KM/H - vías rurales
- 100KM/H - rutas nacionales
Realice un algoritmo que permita determinar, según una velocidad X, a qué
grupo de límites pertenezco.*/

$velocidad = 20;

if ($velocidad <= 0) {
    echo "la velocidad no puede ser negativa o 0";
}
elseif ($velocidad > 0 && $velocidad <= 30) {
    echo "Zona escolar";
}
elseif ($velocidad > 30 && $velocidad <= 60) {
    echo "Vias urbanas";
}
elseif ($velocidad > 60 && $velocidad <= 80) {
    echo "Vias rurales";
}
elseif ($velocidad > 80 && $velocidad <= 100) {
    echo "Rutas nacionales";    
}
else {
    echo "esta excediendo los limites de velocidad permitidos";
}

echo "<br>";
//Estructura condicional switch

$dia = "martes";
$mensaje = "";

switch ($dia) {
    case "lunes":
    case "martes":
    case "miercoles":
    case "jueves":
    case "viernes":
        $mensaje = "dia laboral";
        break;
    case "sabado":
    case "domingo":
        $mensaje = "fin de semana";
        break;    
    default:
        echo "ERROR ".$dia." no es un dia de la semana";
        break;
}

if ($mensaje != "") {
    echo "el ".$dia." es un ".$mensaje;
}

echo "<br>";

$notaMateria = 5;
$notaParcial = 5;

switch ($notaMateria) {
    case 1:
    case 2:
    case 3:
        echo "perdiste la materia";
    case 4:
    case 5:
        echo "Gano la materia<br>";
        switch ($notaParcial) {
            case 1:
            case 2:
            case 3:
                echo "pero perdiste el parcial";
                break;
            case 4:
            case 5:
                echo "y tambien el parcial";
                break;            
            default:
                echo "ERROR";
                break;
        }
        break;    
    default:
        echo "ERROR";
        break;
}
?>