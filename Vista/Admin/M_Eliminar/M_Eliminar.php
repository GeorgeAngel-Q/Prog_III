<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo de Gestión de Usuarios</title>
    <link rel="stylesheet" href="\assets/css/Vista/Admin/M_Eliminar.css">
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
        <section class="user-management-module">
            <h1>Módulo de Gestión de Usuarios</h1>

            <div class="search-section">
                <input type="text" placeholder="Buscar Usuarios" id="search-users">
                <button class="search-button">Buscar</button>
                <button class="add-button">Agregar</button>
            </div>

            <table class="user-list">
                <thead>
                    <tr>
                        <th>Lista de Usuarios</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>USUARIO 1 - NOMBRE COMPLETO</td>
                        <td><button class="modify-button">Modificar</button></td>
                        <td><button class="delete-button">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>USUARIO 2 - NOMBRE COMPLETO</td>
                        <td><button class="modify-button">Modificar</button></td>
                        <td><button class="delete-button">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>USUARIO 3 - NOMBRE COMPLETO</td>
                        <td><button class="modify-button">Modificar</button></td>
                        <td><button class="delete-button">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>USUARIO 4 - NOMBRE COMPLETO</td>
                        <td><button class="modify-button">Modificar</button></td>
                        <td><button class="delete-button">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>USUARIO 5 - NOMBRE COMPLETO</td>
                        <td><button class="modify-button">Modificar</button></td>
                        <td><button class="delete-button">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>USUARIO 6 - NOMBRE COMPLETO</td>
                        <td><button class="modify-button">Modificar</button></td>
                        <td><button class="delete-button">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>USUARIO 7 - NOMBRE COMPLETO</td>
                        <td><button class="modify-button">Modificar</button></td>
                        <td><button class="delete-button">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
