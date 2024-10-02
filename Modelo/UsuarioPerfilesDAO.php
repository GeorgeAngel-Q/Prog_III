<?php
require_once '../Util/ConexionBD.php';

class UsuarioPerfilesDAO {

    public function verificarUsuarioPerfil($IdUsuario, $IdPerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();
        $sql = "SELECT * FROM usuario_perfiles WHERE IdUsuario = $IdUsuario AND IdPerfil = $IdPerfil AND EstadoRegistro = b'1'";
        $result = mysqli_query($con, $sql);
        return (mysqli_num_rows($result) > 0);
    }
    

    public function obtenerPerfilesPorUsuario($IdUsuario) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "SELECT p.NombrePerfil FROM perfiles p 
                INNER JOIN usuario_perfiles up ON p.IdPerfil = up.IdPerfil 
                WHERE up.IdUsuario = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $IdUsuario);
        $stmt->execute();
        $result = $stmt->get_result();

        $perfiles = array();
        while ($row = $result->fetch_assoc()) {
            $perfiles[] = $row['NombrePerfil'];
        }

        return $perfiles; 
    }

    // Asignar un perfil a un usuario
    public function asignarPerfilAUsuario($IdUsuario, $IdPerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "INSERT INTO usuario_perfiles (IdUsuario, IdPerfil) VALUES (?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ii", $IdUsuario, $IdPerfil);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Eliminar un perfil asignado a un usuario
    public function eliminarPerfilDeUsuario($IdUsuario, $IdPerfil) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();

        $sql = "DELETE FROM usuario_perfiles WHERE IdUsuario = ? AND IdPerfil = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ii", $IdUsuario, $IdPerfil);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
