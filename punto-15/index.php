<?php
  include "./operationUtils.php";

//datos de entrada
$numberOne = 0;
$numberTwo = 0;
$option = "";

//1. Llamar una funcion para pedir los números
$numberOne = getNumber();
$numberTwo = getNumber();
//2. Llamar una funcion para pedir la opción
$option = showMenu();

//3. Llamar una funcion para procesar la opción
$result = operate($numberOne, $numberTwo, $option);
//4. Llamar una funcion para mostrar el resultado
echo "El resultado de la operación es: " . $result;
?>