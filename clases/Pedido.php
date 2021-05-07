<?php
namespace clases;
use config\ConexionDB; 
include_once "config/autoload.php";

class Pedido
{

    public function mostrar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM pedido ";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }
    
    public function FunctionName(Type $var = null)
    {
        # code...
    }
}