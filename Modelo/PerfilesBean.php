<?php
class PerfilesBean{

    private $IdPerfil;
    private $Nombre;
    private $Descripcion;
    private $EstadoRegistro;



    public function getIdPerfil() {
        return $this->IdPerfil;
    }
    public function setIdPerfil($IdPerfil) {
        $this->IdPerfil = $IdPerfil;
    }


    public function getNombre() {
        return $this->Nombre;
    }
    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }


    public function getDescripcion() {
        return $this->Descripcion;
    }
    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }


    public function getEstadoRegistro(){
        return $this->EstadoRegistro;
    }
    public function setEstadoRegistro($EstadoRegistro){
        return $this->EstadoRegistro = $EstadoRegistro;
    }
}
?>