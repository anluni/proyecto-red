<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
session_start();


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.google.com/?query=roboto">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="./assets/css/datos.css">
    <link rel="shortcut icon" href="./assets/img/bd.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/09bfd5ff30.js" crossorigin="anonymous"></script>

    
    <title>Proyecto de Ingeniería Red de Accesos</title>
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
                                    <li><a href="php/cambiar_contrasena.php">Cambiar Contraseña</a></li>
                                    <li><a href="php/cerrar_sesion.php">Salir</a></li>
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
                        <form method="post" enctype="multipart/form-data" id="frmSubirExcel">
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
                                <input type="file" name="fileProductos" id="fileProductos" class="form-control" accept=".xls, .xlsx">
                                    <label id="nombreArchivo" value></label>
                                </label>
                            </div>
                            <br>
                            <br>
                            
                            <button type="submit" class="subir" id="btnGuardar">Subir</button>
                            <button type="button" class="cancelar" id="btnCancelar" onclick="volver()">Cancelar
                                y reiniciar</button>
                        </form>
                       
    </main>

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

    <script src="./assets/js/menu.js"></script>
    <script src="./assets/js/carga_datos.js"></script>

    <script>
    $(document).ready(function(){

        $("#frmSubirExcel").on('submit',function(e){

            e.preventDefault();

            /*===================================================================*/
            //VALIDAR SELECCIÓN DE ARCHIVO
            /*===================================================================*/
            if($("#fileProductos").get(0).files.length == 0){
                Swal.fire({
                    position:'center',
                    icon:'warning',
                    title: 'Debe seleccionar un archivo.',
                    showConfirmButton: false,
                    timer: 2500
                })
            }else{

                /*===================================================================*/
                //VALIDAR QUE EL ARCHIVO SELECCIONADO SEA EN EXTENSION XLS O XLSX
                /*===================================================================*/
                var extensiones_permitidas = [".xls",".xlsx"];
                var input_file_productos = $("#fileProductos");
                var exp_reg = new RegExp("([a-zA-Z0-9\s_\\-.\:])+(" + extensiones_permitidas.join('|') + ")$");

                if(!exp_reg.test(input_file_productos.val().toLowerCase())){
                    Swal.fire({
                        position:'center',
                        icon:'warning',
                        title: 'Debe seleccionar un archivo con extensión .xls o .xlsx.',
                        showConfirmButton: false,
                        timer: 2500
                    })

                    return false;
                }

                var datos = new FormData($(frmSubirExcel)[0]);

                $("#btnGuardar").prop("disabled",true);
                
                $.ajax({
                    url:"../ajax/productos.ajax.php",
                    type: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success:function(respuesta){

                        // console.log("respuesta",respuesta);

                        if(respuesta['totalCategorias'] > 0 && respuesta['totalProductos'] > 0 ){
                        
                            Swal.fire({
                                position:'center',
                                icon:'success',
                                title: 'Se registraron ' + respuesta['totalCategorias'] + ' categorías y ' + respuesta['totalProductos'] + 'productos correctamente!',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            $("#btnCargar").prop("disabled",false);
                            $("#img_carga").attr("style","display:none");
                        }else{

                            Swal.fire({
                                position:'center',
                                icon:'error',
                                title: 'Se presento un error al momento de realizar el registro de categorías y/o productos!',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            $("#btnCargar").prop("disabled",false);
                            $("#img_carga").attr("style","display:none");

                        }
                    }
                });

            }
        })

    })
</script>
