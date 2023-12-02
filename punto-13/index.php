<?php

$number = array(10,20,30,40,50);
$suma = 0;

foreach($number as $numero){
    $suma = $suma + $numero;
}
echo "La suma de los numeros es: " . $suma;
?>