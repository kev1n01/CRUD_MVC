<?php
use controladores\ClienteControlador;
include_once "config/autoload.php";
include_once "header.php";

$clienteC = new \controladores\ClienteControlador();
$resultado = $clienteC->mostrar();

// foreach($resultado as $cliente){

//     echo "<li>".$cliente["id_cliente"] ." ". $cliente["nombres"]." ". $cliente["apellidos"]."</br></li>";
// }

echo "<h2>MIS CLIENTES</h2>";
echo "<table class= 'table'>
        <tr>
            <th>Id</th>
            <th>Nombres y apellidos</th>
            <th>Dni</th>
            <th>Direccion</th>
            <th>Celular</th>
            <th>Actividad</th>
        </tr>";
foreach ($resultado as $cliente) {
    $id = $cliente["id_cliente"];
    echo "<tr>".
            "<td>".$cliente["id_cliente"]."</td>".
            "<td>".$cliente["nombres"]." ".$cliente["apellidos"]."</td>".
            "<td>".$cliente["dni"]."</td>".
            "<td>".$cliente["direccion"]."</td>".
            "<td>".$cliente["num_celular"]."</td>".
            "<td><a href='vistas/mostrar_pedido.php?id=".$id."'>Compras</a></td>
        </tr>";
}
echo "</table>";
// include_once "vistas/layout/footer.php";
?>





