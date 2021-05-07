<?php
namespace clases;
use config\ConexionDB;
include_once "config/autoload.php"; 

class Usuario{
    private $idusuario;
    private $usuario;
    private $password;

    public function setId(int $idusuario )
    {
        $this->idusuario = $idusuario;
    }

    public function getId()
    {
        return $this->idusuario ;
    }
    
    public function setUsuario(string $usuario )
    {
        $this->usuario = $usuario;
    }
    
    public function getUsuario( )
    {
        return $this->usuario ;
    }
    
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    
    public function getPassword()
    {
        return $this->password ;
    }

    public function showUsers()
    {
        try {
            $Oconn = new ConexionDB();
            $conexion = $Oconn->abrir();
            $query = "SELECT * FROM usuarios";
            $request = $conexion->query($query);
            $conexion->cerrar();
        } catch (\PDOException $e) {
            echo "Fallo conexion: ".$e->getMessage();
            exit();
        }
        return $request;
    }

    public function dataLogin(string $user)
    {
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM usuarios WHERE nombre_usuario = $user";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }

    public function registrar()
    {
        try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "INSERT INTO usuarios(id_usuario,nombre_usuario,pass_usuario) VALUES('$this->usuario','$this->password')";
            $resultado = $conexion->query($query);
            $objConexion->cerrar();
        }catch (\PDOException $e){
            echo "Error: ".$e->getMessage();
            exit();
        }
        return $resultado;
    }
}