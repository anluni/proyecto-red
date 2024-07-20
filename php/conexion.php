<?php

class conexion
{
    /*PROPIEDADES PARA LA CONEXION*/

    private string $Servidor = "localhost";

    private string $BaseDeDatos = "restore_password";

    private string $Usuario = "root";

    private string $Password = "";

    public string $sql;
    public $pps = null;

    private $Conector ="null";

    /*conexion base de datos*/

    public function getConection(){

        $this->Conector = new PDO(
            "mysql:host=".$this->Servidor.";dbname=".$this->BaseDeDatos,
            $this->Usuario,
            $this->Password
        );

        $this->Conector->exec("set names utf8");

        return $this->Conector;
    } 

    /*LIBERACION DE RECURSOS DE LA BASE DE DATOS*/

    public function closeDataBase()
    {
        if($this->pps != null)
        {
            $this->pps = null;
        }

        if($this->Conector != null)
        {
            $this->Conector = null;
        }

    }
        
}

$conection = new Conexion;

if($conection->getConection())
{
    echo "Conexión exitosa";
}
else
{
    echo "Conexión errónea";
}

?>