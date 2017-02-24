<!DOCTYPE html>
<html>
<head>
<title>eliminar</title>
<script src="funciones-ajax.js" type="text/javascript"></script>   
</head>
<body>
<?php

require ('core/core.php');

echo '<table width="700" border=1>';
echo '<tr>
		<td>Codigo</td>
		<td>Producto</td>
		<td>Descripcion</td>
		<td>Precio</td>

	  </tr>';	
	$producto = new Producto();
	$productos = $producto->getproductos();
	foreach ($productos as $unproducto){


      echo "<tr><td>";
      echo $unproducto['codigo'];
      echo "</td><td>";
      echo $unproducto['producto'];	  
      echo "</td><td>";
      echo $unproducto['descripcion'];	  
      echo "</td><td>";
      echo $unproducto['precio'];	  
      echo "</td><td>";
      echo ' <a href="#" onclick="confirmar('.$unproducto['codigo'].')">Baja</a>';
      echo "</td><td>"; 
      echo ' <a href="index.php?codigo='.$unproducto['codigo'].'&producto='.$unproducto['producto'].'&descripcion='.$unproducto['descripcion'].'&precio='.$unproducto['precio'].'&op=upd">Editar</a>';
      echo "</td></tr>"; 


	}
	echo '</table>';

?>
</body>
</html>
