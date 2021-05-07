<?php
namespace controladores;
use clases\Producto;
use config\ConexionDB;
include_once "config/autoload.php";

class ProductoControlador
{
    public function mostrar(){
        $curso =  new Producto();
        return $curso->mostrar();
    }

    public function agregar(int $idtp,string $descripcion,int $precio){
        $cproducto = new Producto;
        $cproducto->setIdTP($idtp);
        $cproducto->setDescripcion($descripcion);
        $cproducto->setPrecio($precio);
        return $cproducto->agregar();
    }
    
}