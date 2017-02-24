<?php
    include('producto.php');
    include('carrito.php');
    $_SESSION["oCarrito"]->elimina_producto($_GET["linea"]);
    echo "<script language='javascript'>alert('Producto Eliminado');window.location='inicio.php'</script>";
?>