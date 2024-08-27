<?php

include_once '../../../../utils/funciones.php';
include_once '../../Control/Persona.php';
include_once '../../Control/GeneroYEstudios.php';
include_once '../../Control/Deportes.php';
//include_once '../../Control/EJ4/verificarEdad.php';

$datos = darDatosSubmitted();
$persona = new Deportes($datos);
$generoYEstudios = new GeneroYEstudios($datos);

$deportes = $persona->mostrarDeportes();
$mensaje = "Hola, yo soy " . $persona->getNombre() . " " . $persona->getApellido() . "<br>.Tengo " . $persona->getEdad() . " y vivo en " . $persona->getDireccion() . ".<br>Mi género es " . $generoYEstudios->getGenero() . " y mi nivel de estudios es " . $generoYEstudios->getEstudios() . ".<br>Los deportes que practico son " . $deportes . "\n";


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
    
    <?php echo $mensaje; ?>

    <a href="../Ej6.php">Volver</a>
  

</body>

</html>