<?php
$numer = $_GET['numer'];

if ($numer < 1) {echo "Error: El número de términos debe ser un entero positivo."; exit;} // se valida que sea posi

$a = 0; // empieza la secuencia
$b = 1; // continua la secuencia    
echo "<h2>Secuencia de Fibonacci hasta $numer términos:</h2>"; //imprime
echo "$a, $b"; // tiene que si o si imprimir los primeros, que son 0 y 1

$i = 2; // representa el contador de terminos, es 2, porque ya está 0 y 1
while ($i < $numer) { // empieza el bucle while, hasta numer. numer es el n° de términos que se imprimirán
    $sumita = $a + $b; // suma los dos anteriores
    echo ", $sumita"; // imprime la sumita
    $a = $b; // el anterior se convierte en el penúltimo
    $b = $sumita; // el penúltimo se convierte en el último, donde se forma el fibo
    $i++; // incrementa!
}
?>
