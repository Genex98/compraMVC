<?php
// require_once 'app/modelo/model.php';
namespace Gene\Compra\controlador;
use Gene\Compra\modelo\model;

$obj_model = new model();

// print_r(new model());

if(isset($_POST['enviar'])){
  
  $obj_model->set_Nro_Factura($_POST['Nro_Factura']);
  $obj_model->set_Fecha($_POST['Fecha']);
  $obj_model->set_Cantidad($_POST['Cantidad']);
  $obj_model->set_nombre_activo($_POST['Nombre_activo']);
  $obj_model->registrar();

}
if(isset($_POST['editar'])){
  
  $obj_model->set_Nro_Factura($_POST['Nro_Factura']);
  $obj_model->set_Fecha($_POST['Fecha']);
  $obj_model->set_Cantidad($_POST['Cantidad']);
  $obj_model->set_nombre_activo($_POST['Nombre_activo']);

  $obj_model->modificar($_POST['editar']);

}

if(isset($_POST['eliminar'])){
  $obj_model->set_id($_POST['eliminar']);
  $obj_model->eliminar();
}

if(isset($_POST['seleccion'])){
  $obj_model->set_id($_POST['seleccion']);
  $editar_compra = $obj_model->buscar();
}


$compras = $obj_model->consultar();

require_once 'app/vista/view.php';
?>