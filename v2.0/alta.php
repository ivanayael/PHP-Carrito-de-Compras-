<?php
require ('core/core.php');

	$producto = new Producto();
	$productos = $producto->insertproductos($_POST['codigo'],$_POST['producto'],$_POST['descripcion'],$_POST['precio']);
	

?>


