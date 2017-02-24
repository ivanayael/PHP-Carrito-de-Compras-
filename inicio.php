<?php 
include("producto.php"); 
include("carrito.php"); 
?>
<!doctype html>
<html>
<head>
  <title>Listado de Productos</title>
  <style>
  .tablalistado {
    border-collapse: collapse;
    box-shadow: 0px 0px 8px #000;
    margin:20px;
  }
  .tablalistado th{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffd040;	  
  }  
  .tablalistado td{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffdd73;	  
  }
  </style>
</head>  
<body>
  
  <?php
 
   echo "<h2>Carrito de Compras</h2>";
    $_SESSION["oCarrito"]->imprime_carrito();
  

    $con=mysqli_connect("localhost","root","","carro_compras") or 
    die("Problemas con la conexión a la base de datos");
	  
    $registros=mysqli_query($con,"select codigo,producto,descripcion, precio from productos") or 
    die(mysqli_error($con));

    echo "<h2>Productos</h2>"; 
    echo "<table class='tablalistado'>";
    echo "<tr><th>Cod.</th><th>Producto</th><th>Descripcion</th><th>Precio</th><th> </th></tr>";
    while ($reg=mysqli_fetch_array($registros))
    {
      echo "<tr><td>";
      echo $reg['codigo'];
      echo "</td><td>";
      echo $reg['producto'];	  
      echo "</td><td>";
      echo $reg['descripcion'];	  
      echo "</td><td>";
      echo $reg['precio'];	  
      echo "</td><td>";
      echo '<a href="introduce_producto.php?id='.$reg['codigo'].'&nombre='.$reg['producto'].'&precio='.$reg['precio'].'">Introducir</a>';
      echo "</td><td>";  
    }	
    echo "<table>";	
    mysqli_close($con);

  ?>  
</body>
</html>