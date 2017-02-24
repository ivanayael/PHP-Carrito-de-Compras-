<?php
session_start(); 
class Carrito extends Producto{ 
  public $num_productos; 
  public $array_prod; 

     function __construct(){ 
        $this->num_productos=0;
        $this->array_prod=array();
  	} 

 	//Introduce un producto en el carrito. Recibe los datos del producto 
	//Se encarga de introducir los datos en los arrays del objeto carrito 
	//luego aumenta en 1 el numero de productos 

     function introduce_producto($codigo,$nombre,$precio){ 
	$this->id=$codigo; 
	$this->nombre=$nombre;
	$this->precio=$precio; 
	$this->array_prod[$this->num_productos]=array('codigo'=>$this->id,'producto'=>$this->nombre,'precio'=>$this->precio,'cantidad'=> $this->cantidad);
	$this->num_productos++; 
	} 

	//Muestra el contenido del carrito de la compra 
	//ademas pone los enlaces para eliminar un producto del carrito 
       function imprime_carrito(){ 

		$suma = 0; 
		 echo "<table border=1 class='tablalistado'>
			<tr> 
                        <td><b>Cod.</b></td> 
			<td><b>Producto</b></td> 
			<td><b>Precio</b></td> 
			<td> </td> 
		</tr>"; 
	        for ($i=0;$i<$this->num_productos;$i++){ 
		if($this->array_prod[$i]>=1){
			echo "<tr>"; 
			echo "<td>" . $this->array_prod[$i]['codigo']. "</td>"; 
			echo "<td>" . $this->array_prod[$i]['producto'] . "</td>"; 
			echo "<td>" . $this->array_prod[$i]['precio'] . "</td>";
			echo "<td><a href='elimina_producto.php?linea=$i'>Eliminar</td>"; 
			echo "</tr>"; 
		$suma += $this->array_prod[$i]['precio']; 
		} 
		} 
	//muestro el total 
	echo "<tr><td colspan='2' align='center'><b>TOTAL</b></td><td><b>$suma</b></td><td> </td></tr>";
	echo "</table>"; 
	   } 

	//elimina un producto del carrito. recibe la linea del carrito que debe eliminar 
	//no lo elimina realmente, simplemente pone a cero el id, para saber que esta en estado retirado 
	function elimina_producto($linea){ 
	$this->array_prod[$linea]=0; 
	}

}

if (!isset($_SESSION['oCarrito'])){  
   $_SESSION["oCarrito"] = new Carrito();
} 
?>