<?php
$numberOne = 0;
$numberTwo = 0;

echo "Ingrese el primer número: ";
$numberOne = (int) readline();

echo "Ingrese el segundo número: ";
$numberTwo = (int) readline();

$result = $numberOne + $numberTwo;
echo "La suma de los dos números es: " . $result;
?>