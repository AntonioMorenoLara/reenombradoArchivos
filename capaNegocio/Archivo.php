<?php

include '../capaDatos/ArchivoDatos.php';

class Archivo {

    private string $extension;
    private string $nombreArchivo;
    private string $nombreDirectorio;


    public function setExtension($extension) : void{

        $this->extension = $extension;

    }

    public function getExtension() : string {

        return $this->extension;
    }


    public function setNombreArchivo($nombreArchivo) : void {

        $this->nombreArchivo = $nombreArchivo;

    }

    public function getNombreArchivo() : string {

        return $this->nombreArchivo;
    }

    public function setNombreDirectorio($nombreDirectorio) : void{

        $this->nombreDirectorio = $nombreDirectorio;

    }

    public function getNombreDirectorio() : string {

        return $this->nombreDirectorio;
    }

    public function cambiarNombreArchivos() {
        
        $archivoDatos = new ArchivoDatos();
        
        if (empty($this->extension) || empty($this->nombreArchivo) || empty($this->nombreDirectorio)) {
            return false;
        }

        $archivoDatos->setNombreArchivoDatos($this->nombreArchivo);
        $archivoDatos->setNombreDirectorioDatos($this->nombreDirectorio);
        $archivoDatos->setExtensionDatos($this->extension);

        return $archivoDatos->cambiarNombreArchivos();

    }

    public function cambiarNombreArchivo() {

    }

}