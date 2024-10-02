<?php
header('Access-Control-Allow-Origin: *');
require_once '../Modelo/UsuarioDAO.php';
require_once '../Modelo/PerfilesDAO.php';
require_once '../Modelo/UsuarioPerfilesDAO.php';

$op = $_GET["op"];
$objUsuarioDao = new UsuarioDAO();
$objPerfilesDao = new PerfilesDAO();
$objUsuarioPerfilesDao = new UsuarioPerfilesDAO();

switch ($op) {
    case 1: {
        $pagina = "../index.php";
        header("Location: ../index.php");
        break;
    }
    case 2: {
        // INICIO DE SESIÓN
        $CorreoElectronico = $_GET['email'];
        $Clave = $_GET['password'];
        $Perfil = $_GET['profile'];  
        
        $obj = new UsuarioBean();
        $obj->setCorreoElectronico($CorreoElectronico);
        $obj->setClave($Clave);
        
        if ($objUsuarioDao->UsuarioRegistrado($obj)) {
            

            $IdUsuario = $objUsuarioDao->obtenerIdUsuario($CorreoElectronico);
            $_SESSION['IdUsuario'] = $IdUsuario;

            $IdPerfil = $objPerfilesDao->obtenerIdPerfilPorNombre($Perfil);
            
            if ($IdPerfil !== null) {
                if ($objUsuarioPerfilesDao->verificarUsuarioPerfil($IdUsuario, $IdPerfil)) {
                    session_start();
                    $_SESSION['Perfil'] = $Perfil;
                    $pagina = "../Vista/Admin/Gestion.php";
                    

                    /* if ($Perfil == "Administrador") {
                        $pagina = "../Vista/Admin/Home.php";
                    } elseif ($Perfil == "Docente") {
                        $pagina = "../Vista/Docente/Home.php";
                    } elseif ($Perfil == "Estudiante") {
                        $pagina = "../Vista/Estudiante/Home.php";
                    } */


                    echo "Usuario registrado y perfil válido. Redireccionando a $pagina...";
                } else {
                    $pagina = "../Seguridad/FrmLogin.php";
                    echo '<script>alert("El usuario no tiene asignado el perfil seleccionado");</script>';
                }
            } else {
                $pagina = "../Seguridad/FrmLogin.php";
                echo '<script>alert("Perfil seleccionado no válido");</script>';
            }
        } else {
            $pagina = "../Seguridad/FrmLogin.php";
            echo '<script>alert("Usuario o contraseña incorrectos");</script>';
        }
        header("Location: $pagina");
        break;
    }
}
?>
