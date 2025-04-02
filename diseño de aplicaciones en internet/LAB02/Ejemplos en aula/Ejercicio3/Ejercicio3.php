<?php 
session_start();
$saldo = $_SESSION["saldo"];
$saldo = 0;
if (isset($_SESSION["saldo"])) {
    $saldo = $_SESSION["saldo"];
}

$opcion = $_GET["opcion"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajero</title>
</head>
<body>
    <h1>Cajero automático</h1>
    <?php 
    do {
        switch($opcion){
            case "1":
                echo "<h3> Saldo disponible (S/.)". $saldo. " <h3>";
                break;
            case "2":
                $monto = $_GET["monto"];
                $saldo += $monto;
                echo "<h3> Usted ha depositado S/.".$monto."</h3>";
                break;
            case "3":
                $monto = $_GET["monto"];
                $saldo -= $monto;
                echo "<h3> Usted ha retirado S/. ".$monto."</h3>";
                echo "<h3> Saldo disponible (S/.)". $saldo. " <h3>";
                break;
            case "4":
                session_destroy();
        }
       // header('Location')
    
     } while ($opcion != 4);
     $_SESSION['saldo'] = $saldo;
    ?>    
</body>
</html>