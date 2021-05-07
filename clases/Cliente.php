<?php
namespace clases;
use config\ConexionDB;
include_once "config/autoload.php";

class Cliente
{
    private $id;
    private $nombres;
    private $apellidos;
    private $dni;
    private $direccion;
    private $celular;


    public function setId(int $id)
    {
        $this->id = $id;
    }  

    public function getId()
    {
        return $this->id;
    }  

    public function setNombre(string $nombres)
    {
        $this->nombres = $nombres;
    }  
    
    public function getNombre()
    {
        return $this->nombres;
    }  

    public function setApellido(string $apellidos)
    {
        $this->apellidos = $apellidos;
    }  
    
    public function getApellido()
    {
        return $this->apellidos;
    }  
    public function setDni(int $dni)
    {
        $this->dni = $dni;
    }  
    
    public function getDni()
    {
        return $this->dni;
    }  
    public function setDireccion(string $direccion)
    {
        $this->direccion = $direccion;
    }  
    
    public function getDireccion()
    {
        return $this->direccion;
    }  
    public function setCelular(int $celular)
    {
        $this->celular = $celular;
    }  
    
    public function getCelular()
    {
        return $this->celular;
    }  
    
    public function mostrar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM clientes";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    // public function mostrar(int $id=0){
    //     try {
    //         $objConexion = new ConexionDB();
    //         $conexion = $objConexion->abrir();
            
    //         if ($id=0) {
    //             $query = "SELECT * FROM clientes";
    //         } else {
    //             $query = "SELECT * FROM clientes WHERE id_cliente=$id";
    //         }
            
    //         $resultado = $conexion->query($query);
    //         $objConexion->cerrar();
    //     }catch (\PDOException $e){
    //         echo "Error: ".$e->getMessage();
    //         exit();
    //     }
    //     return $resultado;
    // }
    
    public function registrar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $sqlinsert = "INSERT INTO clientes(idusuario_usuarios,nombres,apellidos,dni,direccion,num_celular) 
            VALUES(4,'$this->nombres','$this->apellidos',$this->dni,'$this->direccion',$this->celular)";
            $insertado = $conexion->exec($sqlinsert);
            $objConexion->cerrar();   
        } catch (\PDOException $e) {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $insertado;
    }

    public function actualizar(){
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $sqlupdate = "UPDATE clientes SET nombres = '$this->nombre' WHERE id_cliente=$this->id";
            $actualizado = $conexion->exec($sqlupdate);
            $objConexion->cerrar();   
        } catch (\PDOException $e) {
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $actualizado;
    }
    
    public function eliminar(): String{
            try {
                $objConexion = new ConexionDB();
                $conexion = $objConexion->abrir();
                $sqldelete = "DELETE FROM clientes WHERE id_cliente = $this->id";
                $eliminado = $conexion->exec($sqldelete);
                $objConexion->cerrar();   
            } catch (\PDOException $e) {
                echo "Error: ".$e->getMessage();
                exit();
            }
            return $eliminado;
    }

}