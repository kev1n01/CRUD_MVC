<?php
namespace clases;
use config\ConexionDB; 
include_once "config/autoload.php";

class Producto{

    private $idtp;
    private $descripcion;
    private $precio;

    public function setIdTP(int $idtp)
    {
        $this->idtp =$idtp;
    } 
    
    public function getIdTP()
    {
        return $this->idtp;
    } 
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion =$descripcion;
    } 
    
    public function getDescripcion()
    {
        return $this->descripcion;
    } 
    public function setPrecio(int $precio)
    {
        $this->precio =$precio;
    } 
    
    public function getPrecio()
    {
        return $this->precio;
    } 
    

    public function mostrar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM productos ";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function agregar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "INSERT INTO  productos(id_producto,id_tipo_productos,descripcion,precio_producto) VALUES($this->idtp,'$this->descripcion',$this->precio) ";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }
    
}