<?php

//1. Funcion para poder obtener un número
function getNumber() {
  echo "Ingrese un número para operar: \n ";
  return readline();
}

//2. Funcion para poder obtener un string
function showMenu() {
  echo "Seleccione una operación: \n";
  echo "1. SUMAR \n";
  echo "2. RESTAR \n";
  echo "3. MULTIPLICAR \n";
  echo "4. DIVIDIR \n";
  return readline();
}

//3. Funcion para que realice la operación correcta
function operate($x, $y, $option){
  switch ($option) {
    case 1:
      return  add($x , $y);
    case 2:
      return sub($x , $y);
    case 3:
      return dot($x , $y);
    case 4:
      return split($x , $y);
    default:
      echo "Opción inválida";
      return 0;
  }  
}

//4. Funciones por cada operación
function add($x, $y){
  return $x + $y;
}

function sub($x, $y){
  return $x - $y;
}

function dot($x, $y){
  return $x * y;
}

function split($x, $y){
  return $x / $y;
}
?>