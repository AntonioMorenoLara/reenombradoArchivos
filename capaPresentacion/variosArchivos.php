<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios Archivos</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
</head>
<body>
<nav style="margin:-16px">
        <ul style="padding-top:15px;">
            <a href="index.php"><li>Inicio</li></a>
            <a style="background-color: rgb(15, 130, 168); cursor:default;"><li>Varios Archivos</li></a>
            <a href="unArchivo.php"><li>Un Archivo</li></a>
        </ul>
    </nav>
    <header>
        <h1 style="text-align:center;">Reenombrar varios archivos</h1>
    </header>
    <main class="mainUnArchivo borderFile">
        <section>
            <!-- Ponerlo con PHP -->
            
        </section>
        <section class="nuevoNombreArchivo">
            
            <!-- Ponerlo con PHP -->
            <form action="procesarVariosArchivos.php" method="POST">
                <h2 class="subtitleVariosArchivos">Escribe el directorio</h2>
                <input class="inputFile" style="margin-bottom:50px;" type="text" name="directorio" title="Selecciona directorio">
                <h2 class="subtitleVariosArchivos">Escribe la extensión</h2>
                <input class="inputFile" style="margin-bottom:50px;" type="text" name="extension" title="Selecciona extensión">
                    <h3>Escribe el nombre de los archivos</h3>
                <div class="displayNewNameFiles">
                    <input class="inputTextUnArchivo" name="nombreArchivo">
                    <input class="buttonInput" type="submit" name="aceptarFiles" value="Aceptar">
                    <input class="buttonInput" type="reset" value="Borrar nombre">
                </div>

                
            </form>
        </section>
    </main>
</body>
</html>