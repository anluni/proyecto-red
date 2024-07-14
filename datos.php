<body?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.google.com/?query=roboto">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="./assets/css/datos.css">
        <link rel="shortcut icon" type="text/css" href="./assets/img/bd.png" type="image/x-icon">
        <script src="https://kit.fontawesome.com/09bfd5ff30.js" crossorigin="anonymous"></script>
        <title>Proyecto de Ingeniería Red de Accesos</title>
    </head>

    <body id="body">
    
    <header>
        <div class="icon_menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu_side" id="menu_side">

        <div class="name_page">
        <img src="./assets/img/bd.png" alt="bd">
                <h4>Menú Principal</h4>
        </div>

        <div class="options_menu">	

            <a href="php/panel.php" class="selected">
                <div class="option">
                <i class="menu-icon fa fa-table" title="Panel"></i>
                    <h4>Panel</h4>
                </div>
            </a>

            <a href="php/carga.php">
                <div class="option">
                <i class="menu-icon fa fa-database" title="Carga de datos"></i>
                    <h4>Carga de datos</h4>
                </div>

                <li><a class="nav-link" href="#">Subir Excel con datos</a></li>
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

            <a href="php/cerrar_sesion.php">
                <div class="option">
                <i class="menu-icon fa fa-sign-out" title="Salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>

        </div>

    </div>

            <main>
                <div class="row">
                    <div class="row flex-grow">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-primary">Cargar Excel a base de datos</h3>
                                <form class="forms-sample" id="frmSubirExcel" frmSubirExcel
                                    action="modelosubirExcel.php" method="post" enctype="multipart/form-data">
                                    <div class="texto">
                                        <label>Seleccione el archivo a subir (Formato soportado: .xlsx)</label>
                                        <label>
                                            <b>Importante:</b>
                                            "Asegúrese que el archivo solo contenga datos, no se admiten referencias a
                                            datos ni fórmulas."<br>
                                        </label>
                                        <br>
                                        <label>
                                            "Si el archivo tiene referencias y/o fórmulas, haga una copia de solo datos
                                            que pueda subir."<br>
                                        </label>
                                        
                                        <label>El archivo debete tener la siguiente estructura:<br></label>
                                        <br>
                                        <label>
                                            "POP, Nombre, Latitud, Longitud, Comuna, Región, Nombre, Clasificación
                                            Directorio, Sub Clasificación Directorio, Plan, IT, Año"
                                        </label>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="file" class="archivo">
                                            <input type="file" name="file" id="file">
                                            <label id="nombreArchivo" value></label>
                                        </label>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="subir" id="btnGuardar">Subir</button>
                                    <button type="button" class="cancelar" id="btnCancelar" onclick="volver()">Cancelar
                                        y reiniciar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="copy">
                    <p>
                        Sitio desarrollado por
                        <a target="_blank" href="http://127.0.0.1:5501/">Andrea Luna Vargas 2024</a>
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

        <script src="./assets/js/menu.js"></script>
        <script src="./assets/js/carga_datos.js"></script>
        </body>
    </html>
<?php

