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

    public function setNombreDirectorioDatos($nombreDirectorio) : void {

        $this->nombreDirectorio = $nombreDirectorio;
    }

    public function getNombreDirectorioDatos() : string {

        return $this->nombreDirectorio;
    }

    public function cambiarNombreArchivos() : void {

        if (count(scandir($this->nombreDirectorio)) == 2) {
            throw new Exception('No hay archivos en este directorio');;
        }

        $archivosDir = scandir($this->nombreDirectorio);



        $existeExt = false;

        if ($archivosDir) {
            $i = 1;
            foreach($archivosDir as $key => $value) {
                
                if ($key > 1) {
                    
                    $archivoArray = explode('.', $value);

                    if ($archivoArray[1] == $this->extension) {

                        $rutaArchivo = $this->nombreDirectorio . '/' . $value;
                        $this->fileSelector = @fopen($rutaArchivo,'r+');

                        $existeExt = true;
                        
                        if (!$this->fileSelector) {
                            throw new Exception('El archivo o archivos están abiertos');
                        }

                        
                        if ($archivoArray[1] == 'txt') {
                            if(stripos(shell_exec('tasklist'), 'notepad.exe')) {
                                throw new Exception('Estás intentando modificar el nombre de uno o varios .txt, cierra el bloc de notas');
                            }
                        }

                        fclose($this->fileSelector);

                        $nuevoArchivo = $this->nombreDirectorio . '/' . $this->nombreArchivo . $i . '.' . $this->extension;

                        rename($rutaArchivo, $nuevoArchivo);
                        $i++;
                    }
                }
            }

            if (!$existeExt) {
                throw new Exception('No existe esta extensión en este directorio');
            }

            $nombreDir = $this->nombreDirectorio;
            exec("explorer $nombreDir");
        }
        else {
            throw new Exception('Nombre no válido');
        }
        
    }
}