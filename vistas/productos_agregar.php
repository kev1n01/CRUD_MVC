<?php
    use controladores\ProductoControlador;
    include_once "config/autoload.php";
    include_once "header.php";  
    ?>
<form action=<?=$_SERVER["PHP_SELF"]?> method="post">
    <input type="text" name="tipo" placeholder="Tipo" class="form-label">
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-label" >
    <input type="text" name="precio" placeholder="Precio" class="form-label" >
    <input type="submit" name="submit" value = "Agregar" class="btn btn-success">
</form>

<?php
if (!empty($_POST)) {
    $idtp = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    //guardar cursos
    $product = new ProductoControlador();
    echo $product->agregar($idtp,$descripcion,$precio);
}
include_once "vistas/layout/footer.php";  
?>
