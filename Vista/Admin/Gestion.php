<?php
require_once '../../Util/ConectarBD.php';

$sql= "SELECT u.IdUsuario AS ID,
        CONCAT(u.ApellidoPaterno,' ',u.ApellidoMaterno,' ',u.Nombres) AS NombreUsuario,
        p.Nombre 
        FROM usuario u
        INNER JOIN usuario_perfiles up ON up.IdUsuario=u.IdUsuario
        INNER JOIN perfiles p ON up.IdPerfil=p.IdPerfil
        ORDER BY u.IdUsuario ASC";
$rs= mysqli_query($connection,$sql);
$rows= mysqli_num_rows($rs);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo de Gestión de Usuarios</title>
    <link rel="stylesheet" href="\assets/css/Vista/Admin/Gestion.css">
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
                <a href="M_Busqueda/M_Busqueda.php"><button class="search-button">Buscar</button></a>
                <a href="M_Agregar/M_Agregar.php"><button class="add-button">Agregar</button></a>
            </div>

            <table class="user-list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombres y Apellidos</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <?php
                    while($usuarios=mysqli_fetch_array($rs)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $usuarios['ID']?></td>
                        <td><?php echo $usuarios['NombreUsuario']?></td>
                        <td><?php echo $usuarios['Nombre']?></td>
                        <td><a href="M_Modificar/M_Modificar.php"><button class="modify-button">Modificar</button></a></td>
                        <td><a href="M_Eliminar/M_Eliminar.php"><button class="delete-button">Eliminar</button></a></td>
                    </tr>
                <?php   } ?>
                    
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
