<?php
class UsuarioBean{
    private $IdUsuario;
    private $DNI;
    private $Nombres;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Celular;
    private $CorreoElectronico;
    private $Clave;
    private $UsuarioCreacion;
    private $FechaCreacion;
    private $UsuarioModificacion;
    private $FechaModificacion;
    private $EstadoRegistro;

    public function getIdUsuario(){
        return $this->IdUsuario;
    }
    public function setIdUsuario($IdUsuario){
        return $this->IdUsuario = $IdUsuario;
    }

    public function getDNI(){
        return $this->DNI;
    }
    public function setDNI($DNI){
        return $this->DNI = $DNI;
    }

    public function getNombres(){
        return $this->Nombres;
    }
    public function setNombres($Nombres){
        return $this->Nombres = $Nombres;
    }

    public function getApellidoPaterno(){
        return $this->ApellidoPaterno;
    }
    public function setApellidoPaterno($ApellidoPaterno){
        return $this->ApellidoPaterno = $ApellidoPaterno;
    }


    public function getApellidoMaterno(){
        return $this->ApellidoMaterno;
    }
    public function setApellidoMaterno($ApellidoMaterno){
        return $this->ApellidoMaterno = $ApellidoMaterno;
    }

    public function getCelular(){
        return $this->Celular;
    }
    public function setCelular($Celular){
        return $this->Celular = $Celular;
    }

    public function getCorreoElectronico(){
        return $this->CorreoElectronico;
    }
    public function setCorreoElectronico($CorreoElectronico){
        return $this->CorreoElectronico = $CorreoElectronico;
    }

    public function getClave(){
        return $this->Clave;
    }
    public function setClave($Clave){
        return $this->Clave = $Clave;
    }

    public function getFechaCreacion(){
        return $this->FechaCreacion;
    }
    public function setFechaCreacion($FechaCreacion){
        return $this->FechaCreacion = $FechaCreacion;
    }

    public function getUsuarioModificacion(){
        return $this->UsuarioModificacion;
    }
    public function setUsuarioModificacion($UsuarioModificacion){
        return $this->UsuarioModificacion = $UsuarioModificacion;
    }

    public function getFechaModificacion(){
        return $this->FechaModificacion;
    }
    public function setFechaModificacion($FechaModificacion){
        return $this->FechaModificacion = $FechaModificacion;
    }

    public function getEstadoRegistro(){
        return $this->EstadoRegistro;
    }
    public function setEstadoRegistro($EstadoRegistro){
        return $this->EstadoRegistro = $EstadoRegistro;
    }
}
?>