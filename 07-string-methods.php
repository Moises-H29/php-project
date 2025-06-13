<?php include 'includes/header.php';


$nombreCliente = "Moises Hernandez";

// Conocer extensión de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertirlo a mayúsculas
echo strtoupper($nombreCliente);

// Convertirlo en minúsculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

// Reemplazar un caracter

echo str_replace('Moises','M',$nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, "Moises");
echo strpos($nombreCliente, "Marco");

$tipoCliente = "Premium";
echo "<br>";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';