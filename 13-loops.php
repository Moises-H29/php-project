<?php include 'includes/header.php';

// While

$i = 100;  // Inicializador

while($i < 10) {
    echo $i . "<br>";
    $i++;  // Incremento
}

echo "<br>";

// Do while

$i = 100;

do {
    echo $i ."<br>";
    $i++;
} while($i < 10);

echo "<br>";

// For

for($i = 0; $i < 10; $i++){
    echo $i."<br>";
}

echo "<br><br>";
// FizzBuzz

for($i=1; $i<=1000; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo $i." - FIZZ BUZZ <br>";
    }else if($i % 3 === 0){
        echo $i." - Fizz <br>";
    }else if($i % 5 === 0){
        echo $i." - Buzz <br>";
    }else{
        echo $i."<br>";
    }
}




include 'includes/footer.php';