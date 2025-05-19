<?php

namespace Gene\Compra\conexion;
use PDO;
    
class conexion extends PDO{
    protected $conex;
    
   function __construct(){
			$this->conex = new PDO("mysql:host=localhost;dbname=compra;","root","");
  
		}
}

?>