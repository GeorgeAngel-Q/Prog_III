<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo de Búsqueda de Usuarios</title>
    <link rel="stylesheet" href="\assets/css/Vista/Admin/M_Busqueda.css">
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
        <section class="search-module">
            <a href="../Gestion.php"><img id="back_arrow"src="\assets/img/back_arrow.png"></a>
            <h1>Módulo de Búsqueda de Usuarios</h1>
            <form action="" method="GET" class="search-form">
                <label for="search">Buscar Usuarios:</label>
                <input type="text" id="search" name="search">
                <button type="submit" class="search-button">Buscar</button>

                <label for="id">ID Usuario:</label>
                <input type="text" id="id" name="id" readonly>

                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni"readonly>

                <label for="nombres">Nombres:</label>
                <input type="text" id="nombres" name="nombres" readonly>

                <label for="apellido-paterno">Apellido Paterno:</label>
                <input type="text" id="apellido-paterno" name="apellido_paterno" readonly>

                <label for="apellido-materno">Apellido Materno:</label>
                <input type="text" id="apellido-materno" name="apellido_materno" readonly>

                <label for="celular">Celular:</label>
                <input type="text" id="celular" name="celular" readonly>

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" readonly>

                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" readonly>

                <label for="perfil">Perfil:</label>
                <input type="text" id="perfil" name="perfil" readonly>
            </form>
        </section>
    </main>

</body>
</html>
