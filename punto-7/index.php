<?php

// Datos de usuario
$numberOne = 0;
$numberTwo = 0;
$operation = 0;

echo "Digite el primer número: ";
  $numberOne = readline();

echo "Digite el segundo número: ";
  $numberTwo = readline();

echo "Escoja la operación que desee realizar: \n";
  echo "1. Suma \n";
  echo "2. Resta \n";
  echo "3. Multiplicación \n";
  echo "4. División \n";
  $operation = readline();

switch ($operation) {
  case 1:
    $result = $numberOne + $numberTwo;
    echo "El resultado de la suma es: " . $result;
    break;
  case 2:
    $result = $numberOne - $numberTwo;  
    echo "El resultado de la resta es: " . $result;
    break;
  case 3:
    $result = $numberOne * $numberTwo;
    echo "El resultado de la multiplicación es: " . $result;
    break;
  case 4:
    $result = $numberOne / $numberTwo;
    echo "El resultado de la división es: " . $result;
    break;
  default:
    echo "La opción escogida no es válida";
    break;
}
?>