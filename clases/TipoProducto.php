<?php
namespace clases;
use config\ConexionDB; 
include_once "config/autoload.php";

class TipoProducto{

    private $id;
    private $tipo;
    
    public function mostrar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM tipoproducto ";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }
}