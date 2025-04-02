<?php
$inicio = $_GET['inicio']; // se obtiene el valor inicio y fin del parámetro GET
$fin = $_GET['fin'];

if ($inicio <= 0 || $fin <= 0) {echo "Ambos números deben ser enteros positivos."; exit;}   //$inicio y $fin se concatenan con ||. Esto valida que sean positivos
    
if ($inicio > $fin) {echo "El número de inicio debe ser menor o igual que el número de fin."; exit;} // la condición que $inicio sea mayor que $fin
    
$numerosprimos = []; // se abre un array vacío 
for ($i = $inicio; $i <= $fin; $i++) { // el primer parametro es el inicio y el segundo el fin. Se usa <= para incluir el fin y el tercero el incremento
    $primo = true; // se le da a $primo como verdadero

    if ($i <= 1) {$primo = false;} // esto valida que sea menor o igual a 1, sino, no es primo
    else { //si es mayor a 1, se abre un bucle for
        for ($j = 2; $j < $i; $j++) { // se usa < para no incluir el fin y el tercero el incremento
            if ($i % $j == 0) {$primo = false; break;} // el % es módulo, entre $i y $j. Si el residuo es 0, tonces $i es divisible con $j, lo que siginfica que no es primo.
                                                       // $primo es falso, se sale del bucle for     
        }
    }
    if ($primo) {$numerosprimos[] = $i;} // si $primo es V, se añade al array        
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <h1>Números Primos</h1>
    
    <?php if (empty($numerosprimos)): ?> 
        <h3>No se encontraron números primos en el rango de <?php echo $inicio; ?> a <?php echo $fin; ?>.</h3>

    <?php else: ?> 
        <h3>Números primos en el rango de <?php echo $inicio; ?> a <?php echo $fin; ?>:</h3> 
        <ul>
            <?php foreach ($numerosprimos as $primos): ?> 
                <li><?php echo $primos; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
</body>
</html>

