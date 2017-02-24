<?php
require ('core/core.php');

	$producto = new Producto();
	$productos = $producto->editproductos($_POST['codigo'],$_POST['producto'],$_POST['descripcion'],$_POST['precio']);
	

?>


