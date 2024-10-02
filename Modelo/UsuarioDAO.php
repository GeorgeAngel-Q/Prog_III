<?php
require_once '../Util/ConexionBD.php';
require_once 'UsuarioBean.php';

class UsuarioDAO {
    public function UsuarioRegistrado(UsuarioBean $usuobj) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();
        $sql = "SELECT * FROM usuario WHERE BINARY CorreoElectronico='" . $usuobj->getCorreoElectronico() . "' AND Clave='" . $usuobj->getClave() . "'";
        $rs = mysqli_query($con, $sql);
        return mysqli_num_rows($rs) > 0;
    }

    public function obtenerIdUsuario($CorreoElectronico) {
        $objc = new ConexionBD();
        $con = $objc->ConectarBD();
        $sql = "SELECT IdUsuario FROM usuario WHERE CorreoElectronico = '$CorreoElectronico'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['IdUsuario'];
        } else {
            return null;
        }
    }
}
?>
