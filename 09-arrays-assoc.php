<?php include 'includes/header.php';

// Se utilizan como los objetos en JavaScript

$cliente = array(
    'nombre' => 'Moises',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
);

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 5484984151616;

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';