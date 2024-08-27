<?php

include_once '../../../utils/funciones.php';
include_once '../../Control/Persona.php';

$datos = darDatosSubmitted();

$persona = new Persona($datos);
$edad = $persona->getEdad();
if ($persona->esMayorEdad()) {
    $edad .= " años, soy mayor de edad";
} else {
    $edad .= " años, soy menor de edad";
}
$mensaje = "Hola, yo soy " . $persona->getNombre() . " " . $persona->getApellido() . ".Tengo " . $edad . " y vivo en " . $persona->getDireccion() . "\n";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    echo $mensaje . "<br>";
    ?>
    <a href="../Ej4.php">Volver</a>
</body>

</html>