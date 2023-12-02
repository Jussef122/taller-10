<?php

$tipoAfiliacion = "";
$numPersonas = 0;
const COSTO_POR_PERSONA = 25000;


echo "Ingrese el tipo de afiliación: ";
$tipoAfiliacion = strtoupper (readline());
echo "Ingrese el número de personas: ";
$numPersonas = readline();

$costoTotal = $numPersonas * COSTO_POR_PERSONA; 

if ($tipoAfiliacion == "A" || $tipoAfiliacion == "B") {
  $descuento = $costoTotal * 0.3;
  $costoTotal = $costoTotal - $descuento;

} else {
  echo "Tipo de afiliación inválida.";
}
echo "El costo total es: $" . $costoTotal;

?>