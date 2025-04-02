# 📄💻 LABORATORIO O2 | Desarrollo de aplicaciones en Internet  💻📄

###### 🏫Tecsup | 2025-1 | Frank Sinca Orozco

---

##### 🧩 El presente laboratorio presenta lo que son las ==Estructuras de Control==, las cuales son instrucciones que permiten controlar el flujo de ejecución de un programa. Estas estructuras son fundamentales para la toma de decisiones y la repetición de acciones en la programación. 

> ###### 💡 Estos son mecanismos los cuales son instrucciones que permiten controlar el flujo de ejecución de un programa. Estas estructuras son fundamentales para la toma de decisiones y la repetición de acciones en la programación. En este laboratorio se abordarán los siguientes temas:

##### 📁 1. Estructuras de Control de Selección 📁

- **if**: Permite ejecutar un bloque de código si se cumple una condición.
- **if-else**: Permite ejecutar un bloque de código si se cumple una condición y otro bloque si no se cumple.
- **if-else if-else**: Permite evaluar múltiples condiciones y ejecutar el bloque correspondiente a la primera condición que se cumpla.
- **switch**: Permite evaluar una expresión y ejecutar el bloque correspondiente al valor de la expresión.

##### 📁2. Estructuras de Control de Repetición 📁

- **for**: Permite repetir un bloque de código un número determinado de veces.
- **while**: Permite repetir un bloque de código mientras se cumpla una condición.
- **do-while**: Permite repetir un bloque de código al menos una vez y luego mientras se cumpla una condición.
- **foreach**: Permite iterar sobre los elementos de una colección o array.

##### 📁 3. Estructuras de Control de Salida 📁

- **break**: Permite salir de un bucle o switch.
- **continue**: Permite saltar a la siguiente iteración de un bucle.
- **return**: Permite salir de una función y devolver un valor.
- **exit**: Permite terminar la ejecución del script.

##### 🔥🔥🔥 Ejemplo de Estructuras de Control en PHP 🔥🔥🔥

```php
<?php   
// estructura de eontrol de selección
$edad = 18;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}

// estructura de control de repetición
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i\n";
}

// estructura de control de salida
function suma($a, $b) {
    return $a + $b;
}

echo suma(5, 10); // aquí debería imprimir 15

?>

```

---

#### 📕 LABORATORIO O2 | RESOLUCIÓN | PROPUESTOS 📕

##### 📚Propuesto 1: Calculadora de números primos 📚

---

> ##### Descripción: Crear una calculadora que determine si un número es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo. Utilizar estructuras de control de selección y repetición.

###### HTML:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<!-- Es mi css-->
<style>
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 250px;
    }

    input[type="number"]{
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #218838;
    }
</style>

<body>
    <h1>Números Primos</h1>
    <form action="Propuesto1.php" method="get">
        <label for="inicio">Número de inicio:</label>
        <input type="number" id="inicio" name="inicio" min="1" required><br><br>

        <label for="fin">Número de fin:</label>
        <input type="number" id="fin" name="fin" min="1" required><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
```

---

###### PHP:

```php
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
```

---

##### 📚 Propuesto 2: Validador de contraseñas 📚

---

> ##### Descripción: Crear un validador de contraseñas que verifique si una contraseña es segura. Una contraseña segura debe tener al menos 8 caracteres, al menos una letra mayúscula, al menos un número. Utilizar estructuras de control de selección y repetición.

###### HTML:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de Contraseña</title>
</head>
<!-- Es mi css-->
<style>
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 250px;
    }

    input[type="password"]{
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #218838;
    }
</style>
<body>
    <h1>Validador de Contraseña</h1>
    <form action="Propuesto2.php" method="post">
        Ingrese su contraseña: 
        <input type="password" name="clave" required>
        <button type="submit">Verificar</button>
    </form>
  
    <h3>Requisitos:</h3>
    <ul>
        <li>Mínimo 8 caracteres</li>
        <li>Al menos 1 mayúscula</li>
        <li>Al menos 1 número</li>
    </ul>
</body>
</html>
```

---

###### PHP:

```php
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
```

---

##### 📚Propuesto 3: Generador de secuencias de Fibonacci

---

> ##### Descripción: Crear un generador de secuencias de Fibonacci que genere una cantidad determinada de números de la secuencia. Utilizar estructuras de control de repetición.

###### HTML:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secuencia de Fibonacci</title>
</head>
<!-- Es mi css-->
<style>
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 250px;
    }

    input[type="number"]{
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #218838;
    }
</style>
<body>
    <h1>Fibonacci</h1>
    <form action="Propuesto3.php" method="get">
        Ingrese el n° de términos: 
        <input type="number" name="numer" min="1" required>
        <button type="submit">Generar fibonacci</button>
    </form>
</body>
</html>
```

---

###### PHP:

```php
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
```

---

##### 📚Propuesto 4: Suma de dígitos de un número 📚

---

> ##### Descripción: Crear un programa que sume los dígitos de un número de más de 2 cifras ingresado por el usuario. Utilizar estructuras de control de repetición.

###### HTML:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Dígitos</title>
</head>
<!-- Es mi css-->
<style>
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 250px;
    }

    input[type="number"]{
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #218838;
    }
</style>
<body>
    <h1>Calculadora de Suma de Dígitos</h1>
    <form action="Propuesto4.php" method="get">
        Ingrese un número entero positivo (más de 2 cifras): <!-- Muchos problemas con 2 cifras-->
        <input type="number" name="numer" min="10" required>
        <button type="submit">Calcular Suma</button>
    </form>
</body>
</html>
```

---

###### PHP:

```php
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
```

---

##### 📚 Propuesto 5: Patrón pirámide 📚

---

> ##### Descripción: Crear un programa que genere un patrón de pirámide ennumerada de una altura determinada por el usuario. Utilizar estructuras de control de repetición.

###### HTML:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirámide de Números</title>
</head>
<!-- Es mi css-->
<style>
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 250px;
    }

    input[type="number"]{
        width: 95%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #218838;
    }
</style>
<body>
    <h1>Generador de Pirámide de Números</h1>
    <form action="Propuesto5.php" method="get">
        Ingrese un número entero positivo (N): 
        <input type="number" name="n" min="1" required>
<!-- No sé porque no me deja poner en name= "numer", solo funciona con "n"-->
        <button type="submit">Generar pirámide</button>
    </form>
</body>
</html>
```

---

###### PHP:

```php
<?php
$numerr = $_GET['numer']; //

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
```

---

> ### 📌 Eso es todo, por parte del laboratorio 02 del curso Desarrollo de aplicaciones en Internet. 😊
