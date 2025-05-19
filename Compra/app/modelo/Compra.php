<?php
namespace Gene\Compra\modelo;
use Gene\Compra\conexion\Conexion;
use PDO;

class Compra extends Conexion{


  private $Id_compra;
  private $Nro_Factura;
  private $Fecha_Compra;
  private $Cantidad;
  private $nombre_activo; 
  
function set_Id_compra ($valor){
    $this->Id_compra = $valor;
  }

function set_Nro_Factura ($valor){
    $this->Nro_Factura = $valor;
  }
  
function set_Fecha_Compra($valor){
    $this->Fecha_Compra = $valor;
  }

  function set_Cantidad($valor){
    $this-> Cantidad = $valor;
  }
  
  
  function set_nombre_activo ($valor){
    $this->nombre_activo = $valor;
  }
  
  function __construct(){
    parent::__construct();
  }

  
  function registrar(){
    $sql = "INSERT compra() VALUES(null,'$this->Nro_Factura','$this->Fecha_Compra','$this->Cantidad','$this->nombre_activo')";
    $query = $this->conex->prepare($sql);
    $query->execute();
  }
  
  function consultar(){
    $sql = "SELECT * FROM compra";
    $query = $this->conex->prepare($sql);
    $query->execute();
    if($query->rowCount() > 0) {
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }else{
      return null;
    }
  }
  
  function modificar($id){
    $sql = "UPDATE compra SET	Nro_Factura = '$this->Nro_Factura', Fecha = '$this->Fecha_Compra', mensaje = '$this->Cantidad', destinatario = '$this->nombre_activo' WHERE id_msg = '$id'";
    $query = $this->conex->prepare($sql);
    $query->execute();
  }
  
  
  function buscar(){
    $sql = "SELECT * FROM compra WHERE id_compra ='$this->Id_compra'";
    $query = $this->conex->prepare($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
  }
  
  function eliminar(){
    $sql = "DELETE FROM compra WHERE id_compra = '$this->Id_compra' ";
    $query = $this->conex->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

}




?>