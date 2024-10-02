<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="\assets/css/Seguridad/FrmLogin.css">
</head>
<body>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        <div>
            <img id="Imagen_usuario" src="../assets/img/profiles_log/admin.png" alt="Imagen de usuario">
        </div>
        <form name="form">
            <input type="hidden" name="op">
            <select id="profile" name="profile" onchange="cambiarPerfil()">
                <option value="Administrador">Administrador</option>
                <option value="Docente">Docente</option>
                <option value="Estudiante">Estudiante</option>
            </select> 
            <input type="text" id="email" name="email" placeholder="Usuario" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <button type="submit" onclick="iniciarSesion()">Iniciar Sesión</button>
        </form>
    </div>

    <script>
        function cambiarPerfil() {
            const Perfil = document.getElementById("profile").value;
            const Imagen_usuario = document.getElementById("Imagen_usuario");

            if (Perfil === "Administrador") {
                Imagen_usuario.src = "../assets/img/profiles_log/admin.png";
                Imagen_usuario.alt = "Imagen de Administrador";

            } else if (Perfil === "Docente") {
                Imagen_usuario.src = "../assets/img/profiles_log/teacher.png";
                Imagen_usuario.alt = "Imagen de Profesor";
                
            } else if (Perfil === "Estudiante") {
                Imagen_usuario.src = "../assets/img/profiles_log/student.png";
                Imagen_usuario.alt = "Imagen de Estudiante";
            }
        }

        function iniciarSesion() {
            document.form.action = "../Controlador/UsuarioControlador.php";
            document.form.method = "GET";
            document.form.op.value = "2";
            document.form.submit();      
        }
    </script>
</body>
</html>
