<?php
 include "./passCheck.php";
//Datos de entrada
$user = "";
$password = "";

//proceso
echo "Digite su usuario a registrar\n";
$user = readline();

echo "Digite su contraseña a registrar\n";
$password = readline();

if (hasSecurityLong($password)) {
  echo "Su contraseña tiene una longitud válida \n";
  
  if(hasUpperLetter($password)){
    echo "Su contraseña tiene una letra mayúscula \n";
    
    if(hasNumber($password)){
      echo "Su contraseña tiene al menos un número \n";

    } else {
      echo "Su contraseña no tiene al menos un número \n";
    }

  } else {
    echo "Su contraseña no tiene al menos una letra mayúscula \n";
  }
} else {
  echo "Su contraseña no tiene una longitud válida \n";
}
?>
