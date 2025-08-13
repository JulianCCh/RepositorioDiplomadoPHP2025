<?php

// VARIABLES

$variable1 = 456;
$x = "punto X";
$numero = 7;
$nombre = "Julian";
$estatura = 1.75;
$edad = 33;
$Apellido = "Camacho";
$numeroPar = 486;
//$this; #Variable que no puede ser asignada 

echo "numero ",$numero," nombre ",$nombre," estatura ",$estatura;

// variable por valor
$nombrePersona1 = $nombre;

$nombrePersona1 = "Diana";

echo $nombre, $nombrePersona1;

// variable por referencia
$nombrePersona2 = &$nombre;

$nombrePersona2 = "Diana";

echo $nombre, $nombrePersona2;

// Ambito de las variables

// variable global

$x = 5;

function prueba(){
    // variable local 
    $x = 0;
    echo "variable local: ".$x;
}

prueba();
echo "variable global: ".$x; 

// variable predefinoda $GLOBALS

function prueba2() {
    echo "variable global en una funcion: ".$GLOBALS['x'];
    $GLOBALS['x'] *= 5;     
}

prueba2();
echo "varible local despues de la funcion: ".$x;

// variable static

function prueba3() {

    static $x = 0;
    echo "variable con ambito static: ",$x;
    $x++;    
}

prueba3();
prueba3();
prueba3();

// variable const

const constante = "Camacho";
define("apellido","Camacho");
echo apellido;

?>