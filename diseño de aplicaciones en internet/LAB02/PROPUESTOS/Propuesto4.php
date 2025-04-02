<?php
$numerr = $_GET['numer'];

if ($numerr <= 0) {echo "Error: El número debe ser un entero positivo."; exit;} // Chequea si es positivo
if ($numerr < 10) {echo "Advertencia: Por favor ingrese un número con más de 2 cifras."; exit;} // Chequea si tiene más de 2 cifras

//Quise hacerlo con cifras desde el 1, pero me rompía la cabeza, y lo empecé dsde el 10.

$sumita = 0; //  sumita empieza en 0

while ($numerr > 0) { // que numerr sea mayor que 0
    $digito = $numerr % 10; // obtiene el último dígito
    $sumita += $digito; // suma el dígito a la variable $suma
    $numerr = $numerr / 10; // elimina el último dígito
}

echo "<h2>Suma de los dígitos:</h2>"; //imprime
echo "La suma de los dígitos es: $sumita"; // imprime sumita de digitos
?>
