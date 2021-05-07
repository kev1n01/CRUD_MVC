<?php
use controladores\ProductoControlador;
include_once "config/autoload.php";
include_once "header.php";

$ProductoN = new \controladores\ProductoControlador();
$resultado = $ProductoN->mostrar();

    echo "<h4>PRODUCTOS DISPONIBLE</h4>"; 
    echo "<table class='table '>
        <tr>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Opcion</th>
        </tr>";
    foreach ($resultado as $producto) {
        
        echo "<tr>".
        "<td>".$producto["descripcion"]."</td>".
        "<td>".$producto["precio_producto"]."</td>".
        "<td><a href='vistas/productos_eliminar.php?id=".$producto["id_producto"]."'>Seleccionar</a></td>
        </tr>";
    }
    echo "</table>";
    include_once "vistas/layout/footer.php";

?>
