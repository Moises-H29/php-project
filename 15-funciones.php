<?php 
declare( strict_types = 1 );  // Obtener en tiempo real un error de tipado
include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
}

// sumar(10, 20);
// echo "<br>";
// sumar(3, -15);
// echo "<br>";
// sumar(19, 2);
// echo "<br>";
// sumar(100000, 20);
// echo "<br>";

sumar(10, 20);


include 'includes/footer.php';