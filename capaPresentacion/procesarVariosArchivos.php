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

        

    <?php
        if (isset($_POST['aceptarFiles'])) {
            ?>

        <?php

            $archivo = new Archivo();

            $archivo->setExtension($_POST['extension']);
            $archivo->setNombreArchivo($_POST['nombreArchivo']);
            $archivo->setNombreDirectorio($_POST['directorio']);

            if ($archivo->cambiarNombreArchivo()) {
                ?>
                <section class="displayProcesar">
                    <h3 class="exito">El nombre se ha cambiado con éxito</h3>
                    <a href="index.php" class="botonCenter">
                        <button class="buttonInput" style="padding:0 20px 0 20px;">Inicio</button>
                    </a>
                </section>
            <?php
            }
            else {
                ?>
                <section class="displayProcesar">
                    <h3 class="error">Se ha producido un error al cambiar el nombre</h3>
                    <a href="unArchivo.php" class="botonCenter">
                        <button class="buttonInput" style="padding:0 20px 0 20px;">Volver</button>
                    </a>
                </section>
            <?php
            }
        }
        else {
            echo '<h3 class="error">Se ha producido un error al cambiar el nombre</h3>';
            ?>

            <a href="index.php" class="botonCenter">
                <button class="buttonInput" style="padding:0 20px 0 20px;">Inicio</button>
            </a>
            <?php
        }
    ?>
    </main>

</body>
</html>