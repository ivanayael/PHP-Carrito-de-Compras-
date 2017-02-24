<?php

class Producto { 
  //Atributos
  public $id; 
  public $nombre; 
  public $precio; 
  public $cantidad; 

 //Constructor se ejecutará una vez instanciado al Objeto
    public function  __construct($c,$n,$p) {
        $this->id=$c;
        $this->nombre=$n;
        $this->precio=$p;
        $this->cantidad=1;    //Se le asignara un valor por defecto 1.
    }
   
}
?>