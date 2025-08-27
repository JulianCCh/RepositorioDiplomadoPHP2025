<?php

//declaracion de un ciclo for

for ($i=0; $i < 10; $i++) { 
    echo $i." ";

}
echo "<br>";
/*Desarrollar un programa que permita contar cuántos números entre 1 y 1000
son múltiplos de 7, mostrar el resultado final.*/

$cont=0;

for ($i=1; $i <= 1000; $i++) { 
    if ($i % 7 == 0) {
        $cont++;
    }
}

echo "existen ".$cont." multiplos de 7 entre 1 y 1000";

/*Desarrollar un problema que imprima las tablas de multiplicar del 1 al 10 con
su respectivo resultado.*/

for ($i=1; $i <= 10 ; $i++) { 
    for ($j=1; $j <= 10 ; $j++) { 
        echo $i." x ".$j." = ".($i*$j)."<br>";
    }
    echo "<br>";
}

// declaracion de un ciclo while 
$x= true;
while ($x) {
    echo "ciclo while<br >";
    $x = false;
}

$a=0;
while ($a <= 10) {
    echo $a." ";
    $a++;
}

/*- Desarrollar un programa que imprima los números impares entre 1 y 25.*/
echo "<br>Impares entre 1 y 25<br>";
$x=1;
while ($x<=25) {
    if ($x % 2 !=0) {
        echo $x."<br>";
    }
    $x++;    
}

/*- Desarrollar un programa que, dada una palabra, descompone todos sus
caracteres.*/

$palabra = "palabra";

$cont = 0;

while ($cont < strlen($palabra)) {
    echo $palabra[$cont]."<br>";
    $cont++;
}

/*- Desarrollar un programa que genere números aleatorios entre 1 y 50 y se
detenga cuando genere un múltiplo de 10.*/

$flag = false;

while (!$flag) {
    $ram = mt_rand(1,50);
    echo $ram." ";

    if ($ram % 10 == 0) {
        $flag = true;
    }
}




?>