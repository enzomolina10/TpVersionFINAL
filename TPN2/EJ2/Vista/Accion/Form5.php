<?php

include_once '../../../../utils/funciones.php';
include_once '../../Control/Persona.php';
include_once '../../Control/GeneroYEstudios.php';

$datos = darDatosSubmitted();
$persona = new GeneroYEstudios($datos);
$mensaje = "Hola, yo soy " . $persona->getNombre() . " " . $persona->getApellido() . ".<br>Tengo " . $persona->getEdad() . " y vivo en " . $persona->getDireccion() . "<br>Mi género es " . $persona->getGenero() . " y mi nivel de estudios es " . $persona->getEstudios();


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
    echo $mensaje;
    ?>

    <a href="../Ej5.php">Volver</a>
    

</body>

</html>