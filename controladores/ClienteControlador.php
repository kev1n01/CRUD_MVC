<?php
namespace controladores;
use clases\Cliente;
use config\ConexionDB;
include_once "config/autoload.php";

class ClienteControlador
{
    public function mostrar():\PDOStatement{
        $cliente =  new Cliente();
        return $cliente->mostrar();
    }

    public function mostrarPorId(int $id):String
    {
        $cliente = new Cliente();
        $resultado = $cliente->mostrar($id);
        return $resultado;
    }

    public function registrar(string $nombres,string $apellidos,int $dni,string  $direccion,int $celular): String {
        $clienteregis = new Cliente();
        $clienteregis->setNombre($nombres);
        $clienteregis->setApellido($apellidos);
        $clienteregis->setDni($dni);
        $clienteregis->setDireccion($direccion);
        $clienteregis->setCelular($celular);
        $nombreclienteregis = $clienteregis->getNombre();

        if ($clienteregis->registrar()!=0) {
            echo "El cliente ".$nombreclienteregis." fue guardado";
            header('Location: ./vistas/clientes_interfaz.php');
            exit();
        }else{
            return "No sé pudo guardar";
        }
    }
    
    public function actualizar(String $nombre ,int $id) {
        $clienteupdate = new Cliente();
        $clienteupdate->setId($id);
        $clienteupdate->setNombre($nombre);
        $nclienteUpdated = $clienteupdate->getNombre();
        if ($clienteupdate->actualizar()>=1) {
            return "El cliente ".$nclienteUpdated." fue actaulizado";
            
        }
    }
    
    public function eliminar(int $id){
        $clientedelete = new Cliente();
        $clientedelete->setId($id);
        if ($clientedelete->eliminar()>=1){
            $resultado = "El cliente fue elmininado";
        }else{
            $resultado = "El cliente no fue eliminado";
        }
        return $resultado;
        
    }

    public function modificar(string $nombreNuevo, int $id):string 
    {
        $cliente = new Cliente();
        $cliente->setId($id);
        $cliente->setNombre($nombreNuevo);
        if ($cliente->actualizar()) {
            $respuesta = "Cliente actualizado";
        }else {
            $respuesta = "Cliente no actualizado";
        }
        return $respuesta;

    }
}
