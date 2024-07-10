<?php

$conexion = mysqli_connect("localhost", "root", "", "dashboard_showing_db");

if($conexion){
    echo 'Conexión a la base de datos exitosa';
}else{
    echo 'Conexión a base de datos errónea';
}


?>