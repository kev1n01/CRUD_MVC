<?php
    use controladores\UsuarioControlador;
    include_once "config/autoload.php";
    include_once "header.php";        
?>
<center>
<h3>INICIAR SESION</h2><br>
<form action=<?=$_SERVER["PHP_SELF"]?> method="post"  >
    <div class="mb-4">
    <div class="mb-3">
        <label for="inputusuario">Usuario</label><br>
        <input type="text" name="usuario"  class="form-label">
    </div>
 
    <div class="mb-3">
        <label for="inputpass">Contraseña</label><br>
        <input type="password" name="pass"  class="form-label">
    </div>
    <br>
    <input type="submit" class="btn btn-primary"  nombre="submit" value="Iniciar sesion" >    
    </div>
</form>
<a href="vistas/usuario_registro.php">¿No tienes una cuenta?</a>
</center>


<?php
    if (!empty($_POST)) {
        echo $user = $_POST["usuario"];
        $password = $_POST["pass"];
        $usuarioC = new UsuarioControlador();
        echo $usuarioC->Login($user,$password);
    
    }
    
    include_once "layout/footer.php";
?>
