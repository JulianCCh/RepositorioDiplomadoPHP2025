<?php

/*- Crear una variable para almacenar el nombre de un estudiante.
- Crear 5 variables para almacenar 5 diferentes notas decimales.
- Calcular el promedio final del estudiante a partir de las 5 notas
decimales. (Recuerda que un promedio se calcula sumando todos los
valores y dividiendo el resultado por el número de valores).
- Mostrar el resultado y el nombre del estudiante.
*/

echo "Ejercicio 1<br>";

$nombre = "Julian Camacho";

$notas = array(3.0,4.5,3.8,5.0,4.8);

$lenArray = count($notas);

$average = array_sum($notas)/$lenArray;

echo "<br>promedio<br> nombre: ",$nombre," promedio: ",$average,"<br>";

/*- Crear una variable con el valor de 9.
- Crear una variable con el valor de 7.
- Calcular la suma de la variable número uno más la variable número
dos.
- Calcular la resta de la variable número uno menos la variable número
dos.
- Calcular la multiplicación de la variable número uno por la variable
número dos.
- Calcular la división de la variable número uno dividida la variable
número dos.
- Mostrar los resultados de cada operación.
*/

echo "<br>Ejercicio 2<br>";

$numero1 = 9;
$numero2 = 7;

$suma = $numero1 + $numero2;

$resta = $numero1 - $numero2;

$multi = $numero1 * $numero2;

$div = $numero1/$numero2;

echo "<br>Operaciones<br>suma: ",$suma,"<br>resta: ",$resta,"<br>multiplicacion: ",$multi,"<br>division: ",$div,"<br>";

/*- Crear una variable de nombre “numeroUno” con el valor de 8.
- Crear una variable de nombre “numeroDos” con el valor de 2.
- Intercambiar los valores de ambas variables, de modo que
“numeroUno” valga 2, y “numeroDos” valga 8. (Utiliza una variable
auxiliar).
- Mostrar los resultados de ambas variables.
*/

echo "<br>Ejercicio 3<br>";

$numeroUno = 8;

$numeroDos = 2;

echo "<br>numeroUno: ",$numeroUno," numeroDos: ",$numeroDos;

$aux = $numeroUno;

$numeroUno = $numeroDos;

$numeroDos = $aux;

echo "<br>numeroUno: ",$numeroUno," numeroDos: ",$numeroDos,"<br>";

/*- Crear una variable llamada “Estado”.
- Realizar la siguiente operación sobre la variable “Estado”: (5 == 2)
|| (2 > 1).
- Mostrar el resultado de la variable “Estado”. */

echo "<br>Ejercicio 4<br>";

$estado = (5 == 2) || (2 > 1);

echo "<br>valor de la variable \"estado\": ",$estado,"<br>";
var_dump($estado);
echo "<br>";

/*- Crear una variable llamada “Resultado”.
- Dentro de la variable “Resultado”, crear una operación aritmética
donde se haga uso de todos los operadores matemáticos en
repetidas ocasiones con los números que tú determines. Ejemplo:
(9/2) +8*2/1-(2+2) ….
- Mostrar el resultado de la operación.*/

echo "<br>Ejercicio 5<br>";

$resultado = ((9+3)+((9**2)+(9*3)+(3**2)));

echo "<br>El resultado de ((9+3)+((9**2)+(9*3)+(3**2))) es: ",$resultado,"<br>";

/*- Crear una variable llamada “ladoCuadrado” de valor 8.
- Calcular el área y el perímetro del cuadrado a partir de la variable
anteriormente creada.
- Crear una variable llamada “baseTriangulo” de valor 9.
- Crear una variable llamada “alturaTriangulo” de valor 8.
- Crear dos variables llamadas “ladoUnoTriangulo” y
“ladoDosTriangulo” de valor 8 ambas.
- Calcular el área y el perímetro del triángulo a partir de variables
anteriormente creadas.
- Crear una variable llamada “baseRectangulo” de valor 8.
- Crear una variable llamada “alturaRectangulo” de valor 6.
- Calcular el área y el perímetro del rectángulo a partir de variables
anteriormente creadas.
- Mostrar el resultado de las operaciones.
*/
echo "<br>Ejercicio 6<br>";

$ladoCuadrado = 8;

$area = $ladoCuadrado**2;

$perimetro = $ladoCuadrado*4;

$baseTriangulo = 9;
$alturaTriangulo = 8;

$ladoUnoTriangulo = 8;
$ladoDosTriangulo = 8;

$areaTriangulo = ($baseTriangulo*$alturaTriangulo)/2;

$periTriangulo = (sqrt((8**2)+(8**2))+$ladoDosTriangulo+$ladoUnoTriangulo);

$baseRectangulo = 8;
$alturaRectangulo = 6;

$areaRec = $baseRectangulo * $alturaRectangulo;

$periRec = (2*$baseRectangulo)+(2*$alturaRectangulo);


echo "<br>area cuadrado: ",$area,"<br>perimetro cuadrado: ",$perimetro;
echo "<br>area triangurlo: ",$areaTriangulo,"<br>perimetro triangulo: ",$periTriangulo;
echo "<br>area rectangulo: ",$areaRec,"<br>perimetro rectangulo: ",$periRec;

?>