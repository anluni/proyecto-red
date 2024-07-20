<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor iniciar sesión");
            window.location = "../assets/index.php";
            </script>
    ';

    session_destroy();
    die();

}

$servidor = "localhost";
$usuario = "root";
$pass = "";
$base = "restore_password";
$conexion = mysqli_connect($servidor, $usuario, $pass, $base);

if (isset($_POST['Aceptar'])){
    if (!$conexion) {
        echo "Error en la conexión".$base;

    } 
    else{
        $usu=$_POST['usu'];
        $con=$_POST['con'];
        $consu="INSERT INTO cambiar_contrasena(Usuario,Contraseña) VALUES ('$usu','$con')";
        $execute = mysqli_query($conexion,$consu);

    }

}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.google.com/?query=roboto">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="../assets/css/cambiar_contrasena.css">
    <link rel="shortcut icon" href="../assets/img/bd.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/09bfd5ff30.js" crossorigin="anonymous"></script>
    <title>Cambiar Contraseña</title>
</head>

<body id="body">

    <header>
        <div class="icon_menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <div class="header_superior">

            <div class='container_menu'>
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a href="#"></a>
                                <ul>
                                    <li><a href="../php/cambiar_contrasena.php">Cambiar Contraseña</a></li>
                                    <li><a href="../php/cerrar_sesion.php">Salir</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>

        </div>
    </header>

    <div class="menu_side" id="menu_side">

        <div class="name_page">
            <img src="../assets/img/bd.png" alt="bd">
            <h4>Menú Principal</h4>
        </div>

        <div class="options_menu">

            <a href="../php/panel.php" class="selected">
                <div class="option">
                    <i class="menu-icon fa fa-table" title="Panel"></i>
                    <h4>Panel</h4>
                </div>
            </a>

            <a href="../php/carga.php">
                <div class="option">
                    <i class="menu-icon fa fa-database" title="Carga de datos"></i>
                    <a href="php/base_datos.php"></a>
                    <h4>Carga de datos</h4>
                </div>
                <li><a class="nav-link" href="#">Lista datos subidos</a></li>
            </a>

            <a href="#">
                <div class="option">
                    <i class="menu-icon fa fa-key" title="Credenciales"></i>
                    <h4>Credenciales</h4>
                </div>
                <li><a class="nav-link" href="#">Conexión a la Base de datos</a></li>
            </a>

            <a href="#">
                <div class="option">
                    <i class="menu-icon fa fa-upload" title="Archivos subidos"></i>
                    <h4>Archivos subidos</h4>
                </div>
                <li><a class="nav-link" href="#">Archivos subidos previamente</a></li>
            </a>

            <a href="#">
                <div class="option">
                    <i class="menu-icon fa fa-cog" title="Administración del sistema"></i>
                    <h4>Administración del sistema</h4>
                </div>
                <li><a class="nav-link" href="#">Usuarios</a></li>
                <li><a class="nav-link" href="#">Panel Power BI</a></li>
            </a>

            <a href="../php/cerrar_sesion.php">
                <div class="option">
                    <i class="menu-icon fa fa-sign-out" title="Salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="contraseña">
                <div class="card">
                    <div class="card-header bg bg-primary">
                        <p class="h4 text-white">Cambiar Contraseña</p>
                    </div>
                    <div class="opciones">
                        <form method="POST" action="../php/cambiar_contrasena.php">
                            <div class="card-body">
                                <div class="formgroup">
                                    <label class="usuario">Usuario</label>
                                    <input class="campo" type="text" name="usu" value="">
                                </div>
                                <div class="formgroup">
                                    <label class="form-label">Contraseña</label>
                                    <input class="campo" type="text" name="con" value="">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="subir" id="btnAceptar" name="Aceptar">Aceptar</button>
                                <button type="button" class="cancelar" id="btnCancelar" name="Cancelar"
                                    onclick="location.href='../php/cambiar_contrasena.php'">Cancelar</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="copy">
            <p>
                Sitio desarrollado por Andrea Luna Vargas 2024</a>
            </p>
        </div>
        <div class="redes">
            <ul>
                <li>
                    <a target="_blank" href="https://www.linkedin.com/in/andrea-luna-58173852/"><i
                            class="fa-brands fa-linkedin"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/anluni/"><i class="fa-brands fa-github"></i></a>
                </li>
            </ul>
        </div>
    </footer>
    </div>

    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/cambiar_contrasena.js"></script>

</body>

</html>