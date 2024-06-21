<?php
echo "INICIO DE SESION.";

$nombre = readline("\ningrese su nombre:");
$contra = readline("ingrese su contraseña: ");

if ($nombre == "kevin" && $contra == 1234) {
    for ($i=0; $i < 5; $i++) { 
        echo $i;
    }
}else {
    echo "el inicio de sesion es incorrecto verifique el nombre o la contraseña";
}

