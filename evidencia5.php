<?php
echo "INICIO DE SESION.";

$nom = readline("\ningrese su nombre:");
$contra = readline("ingrese su contraseña: ");
$empleados = [];

if ($nom == "kevin" && $contra == 1234) {
    for ($i=0; $i <=7; $i++) { 
        echo "Persona $i:\n";
        $nombre = readline("nombre: ");
        $dni = readline("DNI ");
        $estatura = readline("estatura");
        $edad = readline("edad ");
        $genero = readline("genero M O F");
        $peso = readline("peso kg");
        $fuma = readline("fuma si o no");

        $empleado =[

            'nombre' => $nombre,
            'dni' => $dni,
            'estatura' => $estatura,
            'edad' => $edad,
            'genero' => $genero,
            'peso' => $peso,
            'fumador' =>$fuma,
        ];



    }
}else {
    echo "el inicio de sesion es incorrecto verifique el nombre o la contraseña";
}

