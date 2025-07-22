<?php 
declare( strict_types = 1 );  // Obtener en tiempo real un error de tipado
include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2 = 0) {  // Podemos definir el tipo de dato que espera la función
    echo $numero1;
    echo "<br>";
    echo $numero1 + $numero2;
}

sumar(numero2:10, numero1: 20);  // Parámetros nombrados (Named parameters)


include 'includes/footer.php';