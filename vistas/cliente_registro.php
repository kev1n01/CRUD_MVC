<?php
    use controladores\ClienteControlador;
    include_once "config/autoload.php";
    include_once "header.php";        

?>
<center>
<h2>REGISTRARME</h2><br>

<form action=<?=$_SERVER["PHP_SELF"]?> method="post" >
    <!-- cliente -->
    <div class="mb-3" >  
    <label for="inputusuario" >Nombres</label><br>
    <input type="text"   class="form-label" name="nombres"  >
    </div>

    <div class="mb-3">
    <label for="inputusuario">Apellidos</label><br>
    <input type="text"  class="form-label" name="apellidos" >    
    </div>

    <div class="mb-3">
    <label for="inputusuario">Dni</label><br>
    <input type="text" class="form-label" name="dni" >
    </div>

    <div class="mb-3">
    <label for="inputusuario">Direccion</label><br>
    <input type="text" class="form-label" name="direccion">
    </div>

    <div class="mb-3">
    <label for="inputusuario">Celular</label><br>
    <input type="text" class="form-label" name="celular" >
    </div>

    <input type="submit" class="btn btn-primary" nombre="submit" value="Registrar">
</form>
</center>

<?php

if (!empty($_POST)) {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $dni = $_POST["dni"];
    $direccion = $_POST["direccion"];
    $celular = $_POST["celular"];
    $clienteC = new ClienteControlador();
    echo $clienteC->registrar($nombres,$apellidos,$dni,$direccion,$celular);
}

include_once "vistas/layout/footer.php";        
?>