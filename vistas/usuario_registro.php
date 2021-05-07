<?php
    use controladores\UsuarioControlador;
    include_once "config/autoload.php";
    include_once "header.php";

?>
<center>
<h2>REGISTRARME</h2><br>

<form action=<?=$_SERVER["PHP_SELF"]?> method="post" >

    <!-- usuario -->
    <div class="mb-3">
    <label for="inputusuario">Usuario</label><br>
    <input type="text" class="form-label" name="usuario" >
    </div>

    <div class="mb-3">
    <label for="inputusuario">Contraseña</label><br>
    <input type="password"  class="form-label" name="pass" ">
    </div>

    <input type="submit" class="btn btn-primary" nombre="submit" value="Registrar">
</form>
<a href="vistas/usuario_login.php">Ya tengo una cuenta</a>
</center>

<?php
    if (!empty($_POST)) {
        $user = $_POST["usuario"];
        $password = $_POST["pass"];
        $usuarioC = new UsuarioControlador();
        echo $usuarioC->userRegistro($user,$password);
    }
    
    include_once "vistas/layout/footer.php";
?>

