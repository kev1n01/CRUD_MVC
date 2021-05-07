<?php
namespace controladores;
use clases\Usuario;
use config\ConexionDB;

include_once "config/autoload.php";

class UsuarioControlador{
    
    public function showUsers(): \PDOStatement
    {
        $user = new Usuario;
        return $user->showUsers();
    }

    public function Login(string $user, string $pass)
    {
        $usuario = new Usuario;
        $dataUser = $usuario->dataLogin($user);
        if ($dataUser != null) {
            $passbd = null;
            foreach ($dataUser as $dusu) {
                $passbd = $dusu["pass_usuario"];
            }
            // if (password_verify($pass,$passbd = 'soyadmin1')) {
            //     header('location: vistas/admin_interfaz.php');
            // }else{
            // if (password_verify($pass, $passbd)) {
               
                // if (password_verify($pass, $passbd)) {
            if ($passbd == $pass) {
                header('location: ../vistas/clientes_interfaz.php');
            }else {
                $resultado = "<center class>usuario desconocido</center>";
                //USO DE PASSWORD SEGUROS
                // echo password_hash($pass,PASSWORD_BCRYPT);   
            }
            // }
        }else {
            $resultado = "<center>usuario desconocido</center>";
        }
        return $resultado;
    }

    public function userRegistro(string $user, string $pass)
    {
        $usuario = new Usuario;
        $usuario->setUsuario($user);
        $usuario->setPassword(password_hash($pass,PASSWORD_BCRYPT));
        $usuario->registrar();
        
        if ($usuario->registrar()!=0) {
            // $respuesta = "<div class='alert alert-success' role='alert'>Su registro a sido completado</div>";
            return header('location: cliente_registro.php');
            
        }else{
            return "No sé pudo guardar";
        }
    }
}
