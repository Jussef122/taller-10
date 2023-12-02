<?php

$number = 0;
$i = 0;

echo "Por favor digite un número: ";
$number = readline ();

for ($i = 0; $i <= 30; $i++) {
  $result = $number * $i;
  echo $number . " x " . $i . " = " . $result . "\n";
  }


?>