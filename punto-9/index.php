<?php
//Datos de entrada
$number = 0;
$i = 0;

//Proceso
echo "Ingrese un número: ";
$number = readline();

while ($i <= 30){
  $result = $number * $i;
  echo $number . "x" . $i . "=" . $result . "\n";
  $i++;
}
?>