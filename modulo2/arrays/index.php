<?php

//declaracion de array

$arrayUno = array("julian","diana","valentino");

for ($i=0; $i < count($arrayUno) ; $i++) { 
    echo $arrayUno[$i]."<br>";
}

echo "con foreach<br>";

foreach ($arrayUno as $data) {
    echo $data."<br>";
}

//array asociativos
$edades = array("diana"=>33, "julian"=>33, "valentino"=>14);
$claves = array_keys($edades);

foreach ($edades as $key => $value) {
    echo "clave: ".$key.", valor: ".$value."<br>";
}

//array multidimencionales
$empleados = array(
    array("valentino",14,"habitacion5"),
    array("diana",33,"habitacion1"),
    array("julian",33,"habitacion1")
);

foreach ($empleados as $indice => $emp) {
    echo "<br>Elemento ".$indice."<br>";
    foreach ($emp as $key => $value) {
        echo "elemento ".$indice.",".$key." : ".$value."<br>";
    }
}

?>