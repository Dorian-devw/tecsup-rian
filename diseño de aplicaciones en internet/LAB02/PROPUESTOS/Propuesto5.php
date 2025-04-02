<?php
$numerr = $_GET['n']; //

if ($numerr <= 0) {echo "Error: El número debe ser un entero positivo."; exit; } // Chequea si es positivo

echo "<h2>Pirámide de números hasta $numerr:</h2>";

$i = 1; //empieza en 1
while ($i <= $numerr) { // condicion de la pirámide
    $j = 1; // j empieza en 1
    while ($j <= $i) { // condicion de la pirámide, j <= i
        echo "$j "; // imprime j
        $j++; //imcrementa j
    }
    echo "<br>"; // salto de linea
    $i++; // incrementa i
}
?>
