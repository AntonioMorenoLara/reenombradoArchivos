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
        include '../capaNegocio/Archivo.php';
        if (isset($_POST['aceptarFiles'])) {
            ?>

        <?php
        try {
            $archivo = new Archivo();

            $archivo->setExtension($_POST['extension']);
            $archivo->setNombreArchivo($_POST['nombreArchivo']);
            $archivo->setNombreDirectorio($_POST['directorio']);

            $archivo->cambiarNombreArchivos();

                ?>
                <section class="displayProcesar">
                    <h3 class="exito">El nombre se ha cambiado con éxito</h3>
                    <a href="index.php" class="botonCenter">
                        <button class="buttonInput" style="padding:0 20px 0 20px;">Inicio</button>
                    </a>
                </section>
            <?php
            }
            catch(Exception $ex) {
                ?>
                <section class="displayProcesar">
                    <h3 class="error"><?= $ex->getMessage(); ?> </h3>
                    <a href="index.php" class="botonCenter">
                        <button class="buttonInput" style="padding:0 20px 0 20px;">Volver</button>
                    </a>
                </section>
            <?php
            }
        }
        else {
            echo '<h3 class="error">No se puede acceder a esta pagina</h3>';
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