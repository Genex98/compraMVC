<?php
namespace Gene\Compra\modelo;
// require_once 'app/conexion/conexion.php';
use Gene\Compra\conexion\Conexion;
use PDO;
class model extends conexion{

  private $id;
  private $Nro_Factura;
  private $Fecha;
  private $Cantidad;
  private $Nombre_activo;

  function set_id($valor){
    $this->id = $valor;
  }
  function set_Nro_Factura($valor){
    $this->Nro_Factura = $valor;
  }
  function set_Fecha($valor){
    $this->Fecha = $valor;
  }
  function set_Cantidad($valor){
    $this->Cantidad = $valor;
  }
  function set_Nombre_activo($valor){
    $this->Nombre_activo = $valor;
  }
  function __construct(){
    parent::__construct();
  }

  
  function registrar(){
    $sql = "INSERT INTO compra() VALUES(null,'$this->Nro_Factura','$this->Fecha','$this->Cantidad','$this->Nombre_activo')";
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
    $sql = "UPDATE compra SET Nro_Factura = '$this->Nro_Factura',Fecha = '$this->Fecha', Cantidad = '$this->Cantidad', Nombre_activo = '$this->Nombre_activo' WHERE Id_compra = '$id'";
    $query = $this->conex->prepare($sql);
    $query->execute();
  }
  
  
  function buscar(){
    $sql = "SELECT * FROM compra WHERE Id_compra = '$this->id'";
    $query = $this->conex->prepare($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
  }
  
  function eliminar(){
    $sql = "DELETE FROM compra WHERE Id_compra = '$this->id' ";
    $query = $this->conex->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

}




?>