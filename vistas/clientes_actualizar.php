<?php
include_once "controladores/ClienteControlador.php";
$controlador = new ClienteControlador();
$id = 5;    
$nombre = $controlador->mostrarPorId($id);

?>

<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="hidden" name="idcliente" value="<?=$id?>" >
    <input type="text" name="nombreNuevo" placeholder=" Ingrese nombre cliente" >
    <input type="text" name="nombreNuevo" placeholder=" Ingrese nombre cliente" >
    <input type="text" name="nombreNuevo" placeholder=" Ingrese nombre cliente" >
    <input type="text" name="nombreNuevo" placeholder=" Ingrese nombre cliente" >
    <input type="submit" name="submit" value = "Actualizar">
</form>

<?php

if (!empty($_POST["submit"])) {
    $nombreNuevo = $_POST["nombreNuevo"];
    $id = $_POST["idcliente"];
    echo $controlador->modificar($nombreNuevo,$id);
}
?>
