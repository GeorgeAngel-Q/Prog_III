<?php
class ConexionBD {
    private $usuario = "root";
    private $baseDatos = "gestion_db";
    private $host = "localhost";
    private $contrasena = "";
    private $conexion;
    private $con=NULL;

    public function ConectarBD(){
        try{
            $this->con=mysqli_connect($this->host,$this->usuario,$this->contrasena,$this->baseDatos);
        if (!$this->con){
            die("Error de conexión: " . mysqli_connect_error());
        }
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
        }
        return $this->con; 
    }
}

?>