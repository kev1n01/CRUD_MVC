<?php
use controladores\UsuarioControlador;
include_once "config/autoload.php";
include_once "header.php";

$usuario = new \controladores\UsuarioControlador();
$resultado = $usuario->mostrar();

// foreach($resultado as $usuario){

//     echo "<li>".$usuario["id_usuario"] ." ". $usuario["nombres"]." ". $usuario["apellidos"]."</br></li>";
// }

echo "<h2>MIS USUARIOS</h2>";
echo "<table class='table'>";
foreach ($resultado as $usuario) {
    $id = $usuario["id_usuario"];
    echo "<tr>".
            "<td>".$usuario["nombre_usuario"]."</td>".
            "<td>".$usuario["pass_usuario"]."</td>".
            "<td><a href='vistas/usuario_eliminar.php?id=".$id."'>Eliminar</a></td>
        </tr>";
}
echo "</table>";
include_once "vistas/layout/footer.php";
