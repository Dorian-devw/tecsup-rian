<?php
$contra = $_POST['clave']; // se tiene el valor de la contraseña
$valida = true; //se da como V

if(strlen($contra) < 8){echo "Error: Debe tener al menos 8 caracteres<br>"; $valida = false;} // se valida que la longitud sea mayor a 8 caracteres

$mayus = false; //mayus como F

$i = 0; //empieza
while($i < strlen($contra)){
    if(ctype_upper($contra[$i])){$mayus= true; break;} // si es mayus, se cambia a V y se sale del bucle
    $i++; //incremento
}
if(!$mayus){echo "Error: Debe tener al menos una letra mayúscula<br>"; $valida = false;} // si no es mayus, da error y cambia a F
$numer = false;

$j = 0;    //empieza, j como indice del string
while($j < strlen($contra)){ //lo mismo pero con j
    if(is_numeric($contra[$j])){$numer = true; break;} // si es numer, cambia a V y se sale del bucle
    $j++; //incremento
}
if(!$numer){echo "Error: Debe tener al menos un número<br>";$valida = false;} // si no es numer, da error y cambia a F

// SE TERMINAN LAS 3 VALIDACIONES

if($valida){echo "<h2>Contraseña aceptada, bien hecho campeón</h2>"; echo "La contraseña cumple con todos los requisitos";} // si es valida, se imprime el mensaje 
else{
    echo "<br><a href='Propuesto2.html'>Volver a intentar</a>"; // si no es valida, te dice volver a hcer y te redirige a Propuesto2.html
}
?>
