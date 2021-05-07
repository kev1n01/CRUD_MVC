<?php
use controladores\ClienteControlador;
include_once "config/autoload.php";
include_once "header.php";


// $id = $_GET["id"];
// $cliente = new ClienteControlador();
// echo $cliente->eliminar($id);
// echo $id;   

?>
<h2>ELIMINAR CLIENTE</h2>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="text" name="id" placeholder=" Ingrese id cliente"  class="form-label">
    <input type="submit" name="submit" value = "Eliminar" class="btn btn-danger">
</form>

<?php
if (!empty($_POST)) {
    $id = $_POST["id"];
    $cliente = new ClienteControlador();
    echo $cliente->eliminar($id); 

}
?>
