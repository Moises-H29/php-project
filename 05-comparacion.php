<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";

var_dump($numero2 === $numero4);  // Revisa valor y tipo de dato
echo "<br>";

//* -1 si el de la izq es menor al de la derecha, cero si son iguales, 1 si el de la izquierda es mayor al de la derecha

var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero2 <=> $numero3);
echo "<br>";

var_dump($numero2 <=> $numero1);
echo "<br>";

var_dump($numero4 <=> $numero1);
echo "<br>";

var_dump($numero2 != $numero3);
echo "<br>";


include 'includes/footer.php';