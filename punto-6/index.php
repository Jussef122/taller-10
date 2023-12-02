<?php

$name = "";
$edad = 0;

echo "Por favor digite su nombre: ";
  $name = readline();
echo "Por favor digite su edad: ";
  $edad = readline();

echo "Hola ".$name." tienes ".$edad." años \n ";

if ( $edad >= 18) {
  echo "Eres mayor de edad";

} else {
   echo "Eres menor de edad";
}
?>