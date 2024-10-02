<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo para Agregar Usuarios</title>
    <link rel="stylesheet" href="\assets/css/Vista/Admin/M_Agregar.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="\assets/img/navbar/logo_unfv.png" alt="Universidad Nacional Federico Villarreal">
        </div>
        <div class="user-info">
            <div class="user-icon">
                <img src="\assets/img/profiles_nav/admin.png" alt="Admin Icon">
            </div>
            <div class="user-name">
                <p>NOMBRE COMPLETO ADMINISTRADOR</p>
            </div>
        </div>
    </header>

    <main>
        <section class="add-user-module">
            <a href="../Gestion.php"><img id="back_arrow"src="\assets/img/back_arrow.png"></a>
            <h1>Módulo para Agregar Usuarios</h1>
            <form action="" method="POST" class="add-user-form">
                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni">

                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres">

                <label for="apellido-paterno">Apellido Paterno:</label>
                <input type="text" id="apellido-paterno" name="apellido_paterno">

                <label for="apellido-materno">Apellido Materno:</label>
                <input type="text" id="apellido-materno" name="apellido_materno">

                <label for="celular">Celular:</label>
                <input type="text" id="celular" name="celular">

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo">

                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena">

                <label for="perfil">Perfil:</label>
                <input type="text" id="perfil" name="perfil">

                <div class="buttons">
                    <button type="submit" class="add-button">Agregar</button>
                    <button type="reset" class="reset-button">Restablecer</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
