<?php

declare(strict_types=1);

function prime(int $number)
{
    throw new \BadFunctionCallException("Implement the prime function");
}

function getPrimo($num) {
    $contador = 0;
    for ($primeNumber=1; $primeNumber<=$num; $primeNumber++) {
        if ($num%$primeNumber==0) {
            $contador = $contador + 1;
        }
    }
   if ($contador==2) {
    return true;
   } else {
       return false;
   }
   
   }

for ($primeNumber= 2; $primeNumber<= 100; $primeNumber++) {
    if (getPrimo($primeNumber)) {
       // echo "$primeNumber<br>";
    } 
    getPrimo($primeNumber);
}


$primeNumberArray = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];


for ($position=1; $position<=100; $position++) {
    // echo "$position<br>";
}

$position = $_POST['posicion'] - 1;

echo "<h1>El número primo que ocupa esa posición es $primeNumberArray[$position]</h1>"; 
echo "<a href='./index.php'><< Atrás</a>";
