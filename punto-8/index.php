<?php

// Datos de usuario
$tipoAfiliacion = "";
$numPersonas = 0;
const COSTO_POR_PERSONA = 25000;


echo "Ingrese el tipo de afiliación: ";
$tipoAfiliacion = readline();
echo "Ingrese el número de personas: ";
$numPersonas = readline();

$costoTotal = $numPersonas * COSTO_POR_PERSONA; 


switch ($tipoAfiliacion) {
  case "A":
    $costoTotal = $costoTotal * 0.7;
    break;
  case "B":
   $costoTotal = $costoTotal * 0.75; 
    break;
  case "C":
   $costoTotal = $costoTotal * 0.9;
    break;
  case "D":
   $costoTotal = $costoTotal * 0.95;
    break;
  default:
    echo "Usted no cuenta con membresia válida \n";
}
    echo "El costo total de su afiliación es: $" . $costoTotal;
?>