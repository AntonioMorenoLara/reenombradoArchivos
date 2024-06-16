<?php

class ArchivoDatos {

    private string $extension;
    private string $nombreArchivo;
    private string $nombreDirectorio;
    private array $archivos;
    private $fileSelector;


    public function setExtensionDatos($extension) : void{

        $this->extension = $extension;
    }

    public function getExtensionDatos() : string {

        return $this->extension;
    }


    public function setNombreArchivoDatos($nombreArchivo) : void {

        $this->nombreArchivo = $nombreArchivo;
    }

    public function getNombreArchivoDatos() : string {

        return $this->nombreArchivo;
    }

    public function setNombreDirectorioDatos($nombreDirectorio) : void{

        $this->nombreDirectorio = $nombreDirectorio;
    }

    public function getNombreDirectorioDatos() : string {

        return $this->nombreDirectorio;
    }

    public function cambiarNombreArchivos() : bool {

        if (count(scandir($this->nombreDirectorio)) == 2) {
            return false;
        }

        $archivosDir = scandir($this->nombreDirectorio);
        $existeExt = false;

        if ($archivosDir) {

            foreach($archivosDir as $key => $value) {
                
                if ($key > 1) {
                    
                    $archivoArray = explode('.', $value);

                    if ($archivoArray[1] == $this->extension) {
                        $rutaArchivo = $this->nombreDirectorio . '/' . $value;
                        $this->fileSelector = @fopen($rutaArchivo,'r+');

                        if (!$this->fileSelector) {
                            return false;
                        }
                        fclose($this->fileSelector);

                        $existeExt = true;
                        $nuevoArchivo = $this->nombreDirectorio . '/' . $this->nombreArchivo . $key-1 . '.' . $this->extension;

                        rename($rutaArchivo, $nuevoArchivo);
                    }
                }
            }

            if (!$existeExt) {
                return false;
            }

            $nombreDir = $this->nombreDirectorio;
            exec("explorer $nombreDir");

            return true;
        }
        return false;
    }

    public function cambiarNombreArchivo() {

    }

}