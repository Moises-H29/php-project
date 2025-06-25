<?php include 'includes/header.php';

// While

$i = 0;  // Inicializador

while($i < 4):
    echo $i . "<br>";
    if($i===0):
        echo "Hola <br>";
    endif;

    $i++;  // Incremento

endwhile;

echo "<br>";

// Do while

$i = 100;

do {
    echo $i ."<br>";
    $i++;
} while($i < 10);

echo "<br>";

// For loop

for($i = 0; $i < 10; $i++){
    echo $i."<br>";
}

echo "<br><br>";

// FizzBuzz

// for($i=1; $i<=1000; $i++){
//     if($i % 3 === 0 && $i % 5 === 0){
//         echo $i." - FIZZ BUZZ <br>";
//     }else if($i % 3 === 0){
//         echo $i." - Fizz <br>";
//     }else if($i % 5 === 0){
//         echo $i." - Buzz <br>";
//     }else{
//         echo $i."<br>";
//     }
// }


// For Each (recorre arreglos)
$clientes = ['Pedro', 'Juan', 'Karen'];

foreach( $clientes as $cliente ):
    echo $cliente . "<br>";
endforeach;

for($i=0; $i < count($clientes); $i++){
    echo $clientes[$i]."<br>";
}

$cliente = array(
    "nombre" => "Juan",
    "saldo" => 200,
    "tipo" => "Premium"
);

foreach( $cliente as $key => $valor ):
    echo $key." - ".$valor."<br>";
    if($valor === 200){
        echo "Es 200 <br>";
    }
endforeach;

include 'includes/footer.php';