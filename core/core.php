<?php
function __autoload($nombreclase){  
	require ('clases/'.$nombreclase.'.php');  
}  
require('clases/connection.php');
?>