<?php
require_once '../Util/ConexionBD.php';

class PerfilesDAO {

    public function obtenerPerfilPorNombre($nombrePerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "SELECT * FROM perfiles WHERE NombrePerfil = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $nombrePerfil);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc(); 
        } else {
            return null;
        }
    }

     public function obtenerIdPerfilPorNombre($nombrePerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();
        $sql = "SELECT IdPerfil FROM perfiles WHERE Nombre = '$nombrePerfil' AND EstadoRegistro = b'1'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['IdPerfil'];
        } else {
            return null;
        }
    }
    
    public function obtenerPerfilPorId($IdPerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "SELECT * FROM perfiles WHERE IdPerfil = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $IdPerfil);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc(); 
        } else {
            return null; 
        }
    }

    public function obtenerTodosLosPerfiles() {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "SELECT * FROM perfiles";
        $result = $con->query($sql);

        $perfiles = array();
        while ($row = $result->fetch_assoc()) {
            $perfiles[] = $row; 
        }

        return $perfiles;
    }

    // Crear un nuevo perfil
    public function crearPerfil($nombrePerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "INSERT INTO perfiles (NombrePerfil) VALUES (?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $nombrePerfil);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Actualizar un perfil existente
    public function actualizarPerfil($IdPerfil, $nuevoNombrePerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "UPDATE perfiles SET NombrePerfil = ? WHERE IdPerfil = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("si", $nuevoNombrePerfil, $IdPerfil);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Eliminar un perfil
    public function eliminarPerfil($IdPerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "DELETE FROM perfiles WHERE IdPerfil = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $IdPerfil);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
