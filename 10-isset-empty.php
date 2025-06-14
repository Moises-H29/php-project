<?php include 'includes/header.php';


$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Moises',
    'saldo' => 200
];

// Empty (Revisar si un arreglo está vacío)
var_dump( empty($clientes) );
var_dump( empty($clientes2) );
var_dump( empty($clientes3) );


// Isset (Revisar si un arreglo está creado o una propiedad está definida)
echo "<br>";
var_dump( isset($clientes4) );
var_dump( isset($clientes) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );

// Isset permite revisar si una propiedad de un arreglo asociativo existe o está definida
var_dump( isset($cliente['saldo']) );
var_dump( isset($cliente['codigo']) );
var_dump( isset($clientes3[0]) );  // Checar si el elemento en la posición indice 0 está definido

include 'includes/footer.php';