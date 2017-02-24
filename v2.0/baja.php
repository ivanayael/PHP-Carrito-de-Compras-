<?php
require ('core/core.php');

	$producto = new Producto();
	$productos = $producto->deleteproductos($_POST['codigo']);
	

?>


