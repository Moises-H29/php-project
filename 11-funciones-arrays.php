<?php include 'includes/header.php';

// in_array - Buscar elementos en un arreglo
$carrito = ["Tablet", "Computadora", "Television"];

var_dump( in_array("Tablet", $carrito) );
var_dump( in_array("Audifonos", $carrito) );

// Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,2,1);
sort($numeros);  // de menor a mayor (creciente)
rsort($numeros); // de mayor a menor (decreciente)

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo 
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);  // Ordena por valor (no por clave), primero numeros y luego letras
arsort($cliente);  // Ordena por valor (no por clave) en orden decreciente y primero letras y luego numeros

echo "<pre>";
var_dump($cliente);
echo "</pre>";

ksort($cliente);  // Ordena por clave o llave
krsort($cliente);  // Ordena por clave o llave en orden decreciente, de la Z a la A

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';