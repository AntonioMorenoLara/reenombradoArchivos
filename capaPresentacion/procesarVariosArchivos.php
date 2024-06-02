<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <title>Validar archivos</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
</head>
<body>
    <main>

        <section class="displayProcesar">
            <h3 class="exito">El nombre se ha cambiado con éxito</h3>
            <a href="index.php" class="botonCenter">
                <button class="buttonInput" style="padding:0 20px 0 20px;">Inicio</button>
            </a>
        </section>

        <section class="displayProcesar">
            <h3 class="error">No se ha podido cambiar el nombre por no existe la extensión en ese directorio</h3>
            <a href="variosArchivos.php" class="botonCenter">
                <button class="buttonInput" style="padding:0 20px 0 20px;">Volver</button>
            </a>
        </section>
        <section class="displayProcesar">
            <h3 class="error">No se ha podido cambiar el nombre, porque no existe el directorio</h3>
            <a href="variosArchivos.php" class="botonCenter">
                <button class="buttonInput" style="padding:0 20px 0 20px;">Volver</button>
            </a>
        </section>

    <!--<?php

        $archivo = new Archivo();



    if (isset($_POST['aceptarUnArchivo'])) {
        if ($archivo->cambiarNombreArchivo()) {
        
        }
        else {
            echo '<h3 class="error">Se ha producido un error al cambiar el nombre</h3>';
        }
    }
    else {
        echo '<h3 class="error">Se ha producido un error al cambiar el nombre</h3>';
    }


?>-->
    </main>

</body>
</html>