<?php
//instruccion para tipificacion estricta
declare(strict_types=1);

//declaracion de una funcion

function saludo(){
    echo "Funciones en php";
}
function enviarEmail($remite, $destinos, $asunto,$mensaje) {
    echo "Enviando correo/s<br>";
    echo "Remite: ",$remite,"<br>Asunto: ",$asunto,"<br>Mensaje: ",$mensaje;
    foreach ($destinos as $destino) {
        echo "<br>Para: ",$destino;
    }
    
    echo "<br>Enviado!";        
}

$destinos = array("topboki@cheeran.com","valen@valorant.com","coxwipeligro@elbarrio.com");
enviarEmail("juliakam@hotmail.com",$destinos,"Viaje a bogota","bogota es muy lindo y frio");

//retorno de valores
function guardarNumero(int $numero, array  $telefonos=array ()) : array {
    $telefonos[count($telefonos)]=$numero;
    return $telefonos;    
}

function mostrarTelefonos(array $telefonos){
    foreach ($telefonos as $numero) {
        echo "<br>",$numero;
    }   
}

$telefonos= guardarNumero(3117766630);
$telefonos= guardarNumero(3155343441,$telefonos);
mostrarTelefonos($telefonos);

function imc(float $peso, float $altura) : float {
    return $peso /pow($altura,2);        
}

echo "<br>",imc(71,1.73);


?>