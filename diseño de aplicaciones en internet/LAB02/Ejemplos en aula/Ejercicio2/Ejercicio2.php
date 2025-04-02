<?php 
$numero = $_GET["numero"]
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1> Cálculo de un factorial:</h1>
    <h3> Base: <?php echo $numero ?> </h3>    
    <?php
    $factorial = 1;
    $i =1;
    while($i <= $numero){
        $factorial = $factorial * $i;
        $i++;
    }
    ?>

    <h3>El factorial de <?php $numero?> es <?php echo $factorial ?></h3>
</body>
</html>