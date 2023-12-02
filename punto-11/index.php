<?php
//Numeros impares y la suma de ellos
$suma = 0;
for ($i = 1; $i <= 100; $i = $i + 2) {
    echo $i . "\n ";
    $suma += $i;
  }

echo "La suma de los números impares es: " . $suma;
?>