<?php
class OpcionesMenuBean{

    private $IdOpcionMenu;
    private $Nombre;
    private $UrlMenu;
    private $Descripcion;
    private $IdPadre;
    private $EstadoRegistro;



    public function getIdOpcionMenu() {
        return $this->IdOpcionMenu;
    }
    public function setIdOpcionMenu($IdOpcionMenu) {
        $this->IdOpcionMenu = $IdOpcionMenu;
    }


    public function getNombre() {
        return $this->Nombre;
    }
    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }


    public function getUrlMenu() {
        return $this->UrlMenu;
    }
    public function setUrlMenu($UrlMenu) {
        $this->UrlMenu = $UrlMenu;
    }


    public function getDescripcion(){
        return $this->Descripcion;
    }
    public function setDescripcion($Descripcion){
        $this->Descripcion = $Descripcion;
    }


    public function getIdPadre(){
        return $this->IdPadre;
    }
    public function setIdPadre($IdPadre){
        return $this->IdPadre = $IdPadre;
    }


    public function getEstadoRegistro(){
        return $this->EstadoRegistro;
    }
    public function setEstadoRegistro($EstadoRegistro){
        return $this->EstadoRegistro = $EstadoRegistro;
    }
}
?>