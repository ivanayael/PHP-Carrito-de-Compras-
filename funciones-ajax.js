// JavaScript Document
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function mostrarDatos(){
	//donde se mostrará el resultado de los productos 
	divResultado = document.getElementById('resultado');
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion consulta.php
	ajax.open("POST", "consulta.php",true);
	ajax.onreadystatechange=handler_usuario;
	ajax.send()
		
	function handler_usuario() {
		if (ajax.readyState==4) {
			//mostrar resultados de la consulta a la tabla de productos
			divResultado.innerHTML = ajax.responseText;
		}
	}	
}

function altaDatos(){
	//obtengo los valores de los campos de input del formulario
	codigo = document.getElementById('codigo').value;
	producto = document.getElementById('producto').value;
	descripcion = document.getElementById('descripcion').value;
	precio = document.getElementById('precio').value;
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion alta.php
	ajax.open("POST", "alta.php",true);
	ajax.onreadystatechange=handler_usuario;
	
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("codigo="+codigo+"&producto="+producto+"&descripcion="+descripcion+"&precio="+precio)
	
	function handler_usuario() {
		if (ajax.readyState==4) {
			//blanqueo los campos del formulario
			document.getElementById('codigo').value='';
			document.getElementById('producto').value='';
			document.getElementById('descripcion').value='';
			document.getElementById('precio').value='';

			//actualizo el listado de productos para mostrar el ultimo insertado
			mostrarDatos();
		}
	}	
}



function modificaDatos(){
	//obtengo los valores de los campos de input del formulario
	codigo = document.getElementById('codigo2').value;
	producto = document.getElementById('producto2').value;
	descripcion = document.getElementById('descripcion2').value;
	precio = document.getElementById('precio2').value;
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion modifica.php
	ajax.open("POST", "modifica.php",true);
	ajax.onreadystatechange=handler_usuario;
	
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("codigo="+codigo+"&producto="+producto+"&descripcion="+descripcion+"&precio="+precio)
	
	function handler_usuario() {
		if (ajax.readyState==4) {
			//blanqueo los campos del formulario
			document.getElementById('codigo2').value='';
			document.getElementById('producto2').value='';
			document.getElementById('descripcion2').value='';
			document.getElementById('precio2').value='';

			//actualizo el listado de productos para mostrar el ultimo insertado
			mostrarDatos();
		}
	}	
}

var confirmar = function(codigo){
  var c = confirm("¿Estas seguro que desea eliminar el producto?");
  if(c){
   eliminaDatos(codigo);
  }else{
    return false; 
  }
}

function eliminaDatos(codigo){
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usamos el medoto POST
	//archivo que realizará la operacion baja.php
	ajax.open("POST", "baja.php",true);
	ajax.onreadystatechange=handler_usuario;
	
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
	ajax.send("codigo="+codigo)
	
	function handler_usuario() {
		if (ajax.readyState==4) {

			//actualizo el listado de productos para mostrar el ultimo insertado
			mostrarDatos();
		}
	}	
}




function BorrarJS(){
	
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	ajax.open("POST", "index.php",true);
	ajax.onreadystatechange=handler_usuario;
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("#");
	function handler_usuario() {
		if (ajax.readyState==4) {

		        document.getElementById('codigo2').value='';
			document.getElementById('producto2').value='';
			document.getElementById('descripcion2').value='';
			document.getElementById('precio2').value='';

			//actualizo el listado de productos para mostrar el ultimo insertado
			mostrarDatos();
		}
	}	
}