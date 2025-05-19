<?php
    
class Conexion {
    protected $conex;
    
   function __construct(){
			$this->conex = new PDO("mysql:host=localhost;dbname=compra;","root","");
  
		}
}

?>