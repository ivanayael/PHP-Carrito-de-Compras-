<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax Simple</title>
<script src="funciones-ajax.js" type="text/javascript"></script>   
<style type="text/css">

.Titulo {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
	font-style: italic;
	line-height: normal;
	font-weight: bold;
	font-variant: normal;
	text-transform: capitalize;
	color: #39F;
}
</style>
</head>
<body>

<?php
if(isset($_GET['op'])){

    switch ($_GET['op']) {
    case "upd":
       $codigo = $_GET['codigo'];
       $producto = $_GET['producto'];
       $descripcion = $_GET['descripcion'];
       $precio = $_GET['precio'];
       break;
	}
}

?>

<table width="700" border="0">
  <tr>
    <td width="282">
    <div id="formulario">
<h1 class="Titulo">Alta de Productos:</h1>
<form action="" method="post">
   	  Codigo <br/><input type="text" id="codigo" maxlength="4" /><br/><br/>
   	  Producto <br/><input id="producto" type="text" /><br/><br/> 
   	  Descripcion <br/>
   	  <textarea id="descripcion"></textarea>
   	  <br/><br/>      
   	  Precio <br/><input id="precio" type="text" /><br/><br/>                  
         <input type="button" onclick="altaDatos();" value="Alta"/>
	 <input name="Restablecer" type="reset"  value="Borrar"/>
</form>
</div>
</td>
    <td width="282">
      <div id="formulario2"> 
     <h1 class="Titulo">Modificacion de Productos:</h1>
    
<form action="" method="post">


   	  <input id="codigo2" type="hidden" value="<?php if(empty($codigo)) { ; } else { echo $codigo; }  ?>" /><br/><br/>
   	  Producto <br/><input id="producto2" type="text" value="<?php if(empty($producto)) {  ; } else { echo $producto; }   ?>" /><br/><br/> 
   	  Descripcion <br/>
   	  <textarea id="descripcion2"><?php if(empty($descripcion)) {  ; } else {  echo $descripcion; }  ?>
   	  </textarea>
   	  <br/><br/>      
   	  Precio <br/><input id="precio2" type="text" value="<?php if(empty($precio)) { ; } else { echo $precio; }  ?>" /><br/><br/>                  
          <input type="button" onclick="modificaDatos();" value="Modificar"/>
 	    <input type="button" onclick="BorrarJS();"  value="Borrar"/>

	
</form>
</div></td>
  </tr>
</table>

	



     <h1 class="Titulo">Productos:</h1>
  	<div id='resultado'></div>
    
	<script type="text/javascript">mostrarDatos();</script>

</body>
</html> 

