<?php

session_start();

include 'conexion_be.php';

$usuario = $_POST ['usuario'];
$contrasena = $_POST ['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' 
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $usuario;
    header("location: ../proyecto.php");
    exit;

}else{
    echo '
    <script>
    alert("Usuario no registrado");
    window.location = "../index.php"
    </script>
    ';

    exit;
}

?>