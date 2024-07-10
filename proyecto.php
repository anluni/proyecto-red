<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor iniciar sesión");
            window.location = "index.php";
            </script>
    ';

    session_destroy();
    die();

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.google.com/?query=roboto">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <title>Proyecto de Ingeniería Red de Accesos</title>


</head>

<body>
    <div class="container">
        <nav class="navbar">
            <a class="navbar-logo" href="#home">
                Menú Principal
            </a>

            <input type="checkbox" id="expand-toggle">
            <label for="expand-toggle" class="menu-icon">
                <span class="mdi mdi-menu"></span>
            </label>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#panel">Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#carga">Carga de Datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ocredenciales">Credenciales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#archivos">Archivos subidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sistema">Administración del sistemas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/cerrar_sesion.php">Salir</a>
                </li>
            </ul>
        </nav>

        <main class="main">
            <main class="cars">
                <iframe title="Proyecto de Ingeniería Red de Accesos" width="1200" height="700"
                    src="https://app.powerbi.com/view?r=eyJrIjoiMTc0OThhNGEtMzljZC00NWY2LTk4NmUtZTM0MjI1ZDU1N2ZjIiwidCI6ImFhZTVmYWIyLTU2YmYtNDdkMS1hMzQ4LTIzNDBlMmJhYzM3NSIsImMiOjR9"
                    frameborder="0" allowFullScreen="true"></iframe>
            </main>
            <footer class="footer">
                <h2>
                    <span class="mdi mdi-facebook"></span>
                    <span class="mdi mdi-instagram"></span>
                </h2>
                <p>&copy; 2024 Proyecto Red de Accesos. Todos los derechos reservados. Andrea Luna</p>
            </footer>
    </div>

</body>

</html>