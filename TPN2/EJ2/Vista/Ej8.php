<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php include_once "../Vista/Estructura/header.php" ?>
    <p>
        La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
        función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
        clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
        es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
        de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
        formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
        un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
        Agregar un botón para limpiar el formulario y volver a consultar.
    </p>

    <form action="Accion/Ej8.php" method="post" onSubmit="return Validar();">
        <label for="edad">Ingrese su edad</label>
        <input type="text" id="edad" name="edad"><br>
        <label>¿Es estudiante?</label><br>

        <label for="siEstudiante">Si</label>
        <input type="radio" id="siEstudiante" name="estudiante" value="si">
        <label for="noEstudiante">No</label>
        <input type="radio" id="noEstudiante" name="estudiante" value="no">
        <br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>
    <script src="assets/js/ej8.js"></script>
    <?php include_once "../Vista/Estructura/footer.php" ?>

</body>

</html>