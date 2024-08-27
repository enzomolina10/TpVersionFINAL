<?php

include_once '../../../utils/funciones.php';
include_once '../../Control/signo.php';

$datos = darDatosSubmitted();

$objNumero = new Numero($datos);

$mensaje = $objNumero->devolverSigno();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
    
    <main class="container my-5">
        <p><?php echo 'El número ' .
                $objNumero->getNumero() .
                ' es ' .
                $mensaje .
                '.'; ?></p>
        <a href="../Ej1.php">Volver</a>
        

</body>