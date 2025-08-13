<?php

//Dada la siguiente cadena “Diego-Palacio.5;28;41;08” remplace los
//caracteres “-.;” de forma que la cadena termine de la siguiente forma:
//“Diego Palacio 5284108”

$cadena1 = "Diego-Palacio.5;28;41;08";
$quitar = array("-",".",";");

$formaCorrecta = str_replace($quitar," ",$cadena1);

$posicion = strpos($formaCorrecta,"5");

$parte2 = str_replace(" ","",substr($formaCorrecta,$posicion));
$formaCorrecta = substr($formaCorrecta,0,$posicion).$parte2; 

echo $formaCorrecta, "<br>";

//A partir de la contraseña: “dapv0102”, cifrar la misma con sha1 y md5,
//mostrar ambos resultados.

$contraseña = "dapv0102";

$cifradoSh1 = sha1($contraseña);

$cifradoMd5 = md5($contraseña);

echo $cifradoSh1, "<br>", $cifradoMd5, "<br>";

//Determinar la longitud del siguiente mensaje: “Buenos días estimados
//estudiantes. Hoy vamos aprender PHP”

$cadena = "Buenos días estimados estudiantes. Hoy vamos aprender PHP";

$longitud = strlen($cadena);

echo $longitud,"<br>";

var_dump($cadena);

//Almacena todo tu nombre en un variable, por ejemplo: “diego alejandro
//palacio valencia” y este mismo conviértelo a mayúscula por medio de una
//función de cadenas.

$miNombre = "julian alberto camacho chacon";

$nombreMayus = strtoupper($miNombre);

echo "<br>",$miNombre,"<br>",$nombreMayus,"<br>";

//Almacena todo tu nombre en un variable, por ejemplo: “DIEGO
//ALEJANDRO PALACIO VALENCIA” y este mismo conviértelo a minúsculas
//por medio de una función de cadenas.

$miNombre = "DIANA ISABEL GUALDRON DUARTE"; 

$nombreMinus = strtolower($miNombre);

echo "<br>",$miNombre,"<br>",$nombreMinus,"<br>";

?>