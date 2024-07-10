<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];


    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
                VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

        //verificar que el nombre no se repita en la base de datos

        $verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_completo= '$nombre_completo' ");
        if(mysqli_num_rows($verificar_nombre) > 0){
            echo '
                <script>
                    alert("Este nombre ya se encuentra registrado, intenta nuevamente");
                    window.location = "../index.php";
                    </script>
            ';
            exit();
        } 
    
    //verificar que el correo no se repita en la base de datos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya se encuentra registrado, intenta nuevamente");
                window.location = "../index.php";
                </script>
        ';
        exit();
    }     
    
        //verificar que el usuario no se repita en la base de datos

        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario' ");
        if(mysqli_num_rows($verificar_usuario) > 0){
            echo '
                <script>
                    alert("Este usuario ya se encuentra registrado, intenta nuevamente");
                    window.location = "../index.php";
                    </script>
            ';
            exit();
        } 

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../index.php";
            </script>
        ';

    }else{
        echo '
            <script>
                alert("Inténtelo nuevamente");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);


    ?>