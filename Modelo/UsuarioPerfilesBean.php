<?php
class UsuarioPerfilesBean{
    private $IdUsuario;
    private $IdPerfil;
    private $EstadoRegistro;

    public function getIdUsuario(){
        return $this->IdUsuario;
    }
    public function setIdUsuario($IdUsuario){
        return $this->IdUsuario = $IdUsuario;
    }

    public function getIdPerfil(){
        return $this->IdPerfil;
    }
    public function setIdPerfil($IdPerfil){
        return $this->IdPerfil = $IdPerfil;
    }

    public function getEstadoRegistro(){
        return $this->EstadoRegistro;
    }
    public function setEstadoRegistro($EstadoRegistro){
        return $this->EstadoRegistro = $EstadoRegistro;
    }
}

?>