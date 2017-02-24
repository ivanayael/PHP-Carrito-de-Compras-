<?php
    include('producto.php');
    include('carrito.php');
  
try {
    $_SESSION["oCarrito"]->introduce_producto($_GET["id"],$_GET["nombre"],$_GET["precio"]);
    
    if(isset( $_SESSION["oCarrito"] ) && !empty( $_SESSION["oCarrito"] )) {  
      
       throw new Exception("Producto Agregado");
   
    } else {

       throw new Exception("Error: No se agregó al carrito");
    }

    } catch (Exception $e) {

      $msg = $e->getMessage();
      echo "<script language='javascript'>alert('$msg');window.location='inicio.php'</script>";
}
?>
