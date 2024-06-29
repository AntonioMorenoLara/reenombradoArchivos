<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=family=Montserrat:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
</head>
<body>
    <header class="headerIndex">
        <img class="logo" src="./images/logo.jpg" alt="logoArchivo">
        <h1 class="tituloIndex">Reenombrado de archivos</h1>
    </header>
    <main class="mainUnArchivo borderFile">
        <section class="nuevoNombreArchivo">
            
            <form action="procesarVariosArchivos.php" method="POST">
                <h2 class="subtitleVariosArchivos">Escribe el directorio <br> (C:\Nombre\directorio)</h2>
                <input class="inputFile" style="margin-bottom:50px;" type="text" name="directorio" title="Selecciona directorio">
                <h2 class="subtitleVariosArchivos">Escribe la extensión <br> (Ejemplo: txt)</h2>
                <input class="inputFile" style="margin-bottom:50px;" type="text" name="extension" title="Selecciona extensión">
                    <h3>Escribe el nombre de los archivos</h3>
                <div class="displayNewNameFiles">
                    <input class="inputTextUnArchivo" name="nombreArchivo">
                    <input class="buttonInput" type="submit" name="aceptarFiles" value="Aceptar">
                    <input class="buttonInput" type="reset" value="Borrar datos">
                </div>
            </form>
        </section>
    </main>
</body>
</html>