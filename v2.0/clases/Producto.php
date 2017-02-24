<?php
class Producto{
	private $db;
	public function __construct(){
		$this->db = new Database();
		}
	
	public function __destruct(){
		$this->db=null;
		}
	
	public function getproductos(){
		return $this->db->query("select * from productos order by codigo desc");
		}
	
	public function insertproductos($codigo,$producto,$descripcion,$precio){
		$this->db->query("insert into productos (codigo, producto, descripcion, precio) values ($codigo, '$producto', '$descripcion', $precio)");
		} 

	public function editproductos($codigo,$producto,$descripcion,$precio){
		$this->db->query("UPDATE productos SET producto='$producto', descripcion='$descripcion', precio='$precio' WHERE codigo=$codigo");
		} 

	public function deleteproductos($codigo){
		$this->db->query("DELETE FROM productos WHERE codigo=$codigo");
		} 
	
		
	}
?>
