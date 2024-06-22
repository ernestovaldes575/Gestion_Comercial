<?php
    session_start();
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php");
            exit();
        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Gestión Comercial</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido al Dashboard</h1>
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="gestionar_articulos.php" class="btn btn-primary">Gestionar Artículos</a>
                <a href="gestionar_proveedores.php" class="btn btn-secondary">Gestionar Proveedores</a>
                <a href="agregar_usuario.php" class="btn btn-success">Gestionar Usuarios</a>
                <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
