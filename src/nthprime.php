<?php

for ($primeNumber= 2; $primeNumber<= 100; $primeNumber++) {
    if (getPrimo($primeNumber)) {
        //echo "$primeNumber<br>";
    } 
    getPrimo($primeNumber);
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

$primeNumberArray = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];


for ($position=1; $position<=100; $position++) {
    //echo "$position<br>";
}

$position = $_POST['posicion'] - 1;

echo "<h1>El número primo que ocupa esa posición es $primeNumberArray[$position]</h1>"; 
echo "<a href='./index.php'><< Atrás</a>";

?>