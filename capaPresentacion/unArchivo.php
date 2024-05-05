<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <title>Un Archivo</title>
</head>
<body style="margin:0 auto;">
    <nav style="margin:-16px">
        <ul style="padding-top:15px;">
            <a href="index.php"><li>Inicio</li></a>
            <a href="variosArchivos.php"><li>Varios Archivos</li></a>
            <a style="background-color: rgb(15, 130, 168); cursor:default;"><li>Un Archivo</li></a>
        </ul>
    </nav>
    <header>
        <h1 style="text-align:center;">Reenombrar un archivo</h1>
    </header>
    <main class="mainUnArchivo">
        <h2 class="subtitleUnArchivo">Selecciona un archivo</h2>
        <section>
            <!-- Ponerlo con PHP -->
            <input class="inputFile" style="margin-bottom:50px;" type="file" title="Selecciona un archivo">
        </section>
        <section class="nuevoNombreArchivo">
            <h3>Escribe el nombre nuevo</h3>
            <!-- Ponerlo con PHP -->
            <form class="formUnArchivo" action="procesarUnArchivo" method="POST">
                <input class="inputTextUnArchivo">
                <input class="buttonInput" type="submit" value="Aceptar">
                <input class="buttonInput" type="reset" value="Borrar nombre">
            </form>
            
        </section>
    </main>
</body>
</html>