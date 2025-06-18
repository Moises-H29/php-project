<?php include 'includes/header.php';


$autenticado = false;
$admin = true;

if($autenticado && $admin){
    echo "El usuario está autenticado correctamente";
} else{
    echo "El usuario no está autenticado";
}

// If anidados...

echo "<br>";

$cliente = [
    'nombre' => "Moises",
    'saldo' => 0,
    'informacion' => [
        "tipo" => 'Regular'
    ]
];

if( !empty($cliente) ){
    echo "El arreglo de cliente NO está vacío";

    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo disponible";
    } else {
        echo "No hay saldo disponible";
    }

}


// else-if

echo "<br>";

if($cliente['saldo']>0){
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'Premium'){
    echo "El cliente es Premium";
} else {
    echo "El cliente no tiene saldo y tampoco es Premium";
}

// Switch
echo "<br>";
$tecnologia = 'HTML';

switch($tecnologia){
    case 'PHP':
        echo "PHP un excelente lenguaje de programación";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo 'Emmm...';
        break;
    default:
        echo 'Ese lenguaje no lo tengo definido';
        break;
}



include 'includes/footer.php';