<?php

require_once "./assets/php/conexion.php";
use PhpOffice\PhpSpreadsheet\IOFactory;


class ProductosModelo
{

    static public function mdlCargaMasivaProductos($fileProductos)
    {

        $nombreArchivo = $fileProductos['tmp_name'];

        $documento = IOFactory::load($nombreArchivo);

        $hojaCategorias = $documento->getSheet(0);
        $numeroFilasCategorias = $hojaCategorias->getHighestDataRow();

        $hojaProductos = $documento->getSheetByName("Productos");

        $categoriasRegistradas = 0;

        //CICLO FOR PARA REGISTROS DE CATEGORIAS
        for ($i = 2; $i <= $numeroFilasCategorias; $i++) {

            $POP = $hojaCategorias->getCellByColumnAndRow(1, $i);
            $Nombre = $hojaCategorias->getCellByColumnAndRow(2, $i);
            $Latitud = $hojaCategorias->getCellByColumnAndRow(3, $i);
            $Longitud = $hojaCategorias->getCellByColumnAndRow(4, $i);
            $Comuna = $hojaCategorias->getCellByColumnAndRow(5, $i);
            $Region = $hojaCategorias->getCellByColumnAndRow(6, $i);
            $NombreRegion = $hojaCategorias->getCellByColumnAndRow(7, $i);
            $ClasificaciónDirectorio = $hojaCategorias->getCellByColumnAndRow(8, $i);
            $SubClasificacion = $hojaCategorias->getCellByColumnAndRow(9, $i);
            $Plan = $hojaCategorias->getCellByColumnAndRow(10, $i);
            $IT = $hojaCategorias->getCellByColumnAndRow(11, $i);
            $Ano = $hojaCategorias->getCellByColumnAndRow(12, $i);
            $POPNuevoCosite = $hojaCategorias->getCellByColumnAndRow(13, $i);

            if (!empty($categoria)) {
                $stmt = Conexion::conectar()->prepare("INSERT INTO datatable(POP, Nombre, Latitud, Longitud, Comuna, Region, Nombre Region, Clasificación Directorio, Sub Clasificación Directorio, Plan, IT, Año,POP Nuevo /Cosite 
                values(:POP, :Nombre, :Latitud, :Longitud, :Comuna, :Region, :Nombre Region, :Clasificación Directorio, :Sub Clasificación Directorio, :Plan, .IT, .Año, :POP Nuevo /Cosite);");

                $stmt->bindParam(":POP", $POP, PDO::PARAM_STR);
                $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
                $stmt->bindParam(":Latitud", $Latitud, PDO::PARAM_STR);
                $stmt->bindParam(":Longitud", $Longitud, PDO::PARAM_STR);
                $stmt->bindParam(":Comuna", $Comuna, PDO::PARAM_STR);
                $stmt->bindParam(":Region", $Region, PDO::PARAM_STR);
                $stmt->bindParam(":Nombre Region", $NombreRegion, PDO::PARAM_STR);
                $stmt->bindParam(":Clasificación Directorio", $ClasificaciónDirectorio, PDO::PARAM_STR);
                $stmt->bindParam(":Sub Clasificación Directorio", $SubClasificacion, PDO::PARAM_STR);
                $stmt->bindParam(":Plan", $Plan, PDO::PARAM_STR);
                $stmt->bindParam(".IT", $IT, PDO::PARAM_STR);
                $stmt->bindParam(".Año", $Ano, PDO::PARAM_STR);
                $stmt->bindParam(":POP Nuevo /Cosite", $POPNuevoCosite, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    $categoriasRegistradas = $categoriasRegistradas + 1;
                } else {
                    $categoriasRegistradas = 0;
                }
            }

        }

    
        return $stmt->fetch();

    }




}