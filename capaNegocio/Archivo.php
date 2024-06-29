<?php

include '../capaDatos/ArchivoDatos.php';

class Archivo {

    private string $extension;
    private string $nombreArchivo;
    private string $nombreDirectorio;
    private string $antiguoNombreArchivo;


    public function setExtension($extension) : void{

        if (empty($extension)) {
            throw new Exception('El campo de la extensión está vacío');
            
        }

        $this->extension = $extension;
    }

    public function getExtension() : string {

        return $this->extension;
    }


    public function setNombreArchivo($nombreArchivo) : void {

        if (empty($nombreArchivo)) {
            throw new Exception('El campo de del nombre del archivo está vacío');
            
        }

        $this->nombreArchivo = $nombreArchivo;
    }

    public function getNombreArchivo() : string {

        return $this->nombreArchivo;
    }

    public function setNombreDirectorio($nombreDirectorio) : void{

        if (empty($nombreDirectorio)) {
            throw new Exception('El campo de del directorio está vacío');
            
        }

        if (!is_dir($nombreDirectorio)) {
            throw new Exception('El nombre del directorio no existe');
        }

        $this->nombreDirectorio = $nombreDirectorio;
    }

    public function getNombreDirectorio() : string {

        return $this->nombreDirectorio;
    }

    public function cambiarNombreArchivos() : void {
        
        try {
            $archivoDatos = new ArchivoDatos();
        
            $archivoDatos->setNombreArchivoDatos($this->nombreArchivo);
            $archivoDatos->setNombreDirectorioDatos($this->nombreDirectorio);
            $archivoDatos->setExtensionDatos($this->extension);

            $archivoDatos->cambiarNombreArchivos();
        }
        catch(Exception $ex) {
            throw new Exception($ex->getMessage());
        }

    }

}