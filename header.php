<?php
namespace vistas;
use controladores\ProductoControlador;
include_once "config/autoload.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Abarrotes</title>
    <!-- <link href="public/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="public/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="public/css/2.css">
	<link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">MI TIENDITA</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="./vistas/productos_mostrar.php">Productos</a></li>
					<li><a href="./vistas/pedido.php">Pedido</a></li>
					<li><a href="./vistas/usuario_login.php">Iniciar sesion</a></li>
					<li><a href="./vistas/usuario_registro.php">Registrarme</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
</body>
<!-- <script src="public/js/boostrap.bundle.min.js"></script> -->

</html>