<?php
  include_once 'view/notedetengas_view.php';
  include_once 'model/notedetengas_model.php';

  class notedetengasController {

    private $model;
    private $view;

    function __construct() {
      $this->model = new notedetengas_model();
      $this->view = new notedetengas_view();
    }

    function mostrarHome(){
      $this->view->mostrarHome();
    }

  function mostrarCategorias(){
      $this->view->mostrarCategorias($this->model->getCategorias());
    }

    function mostrarAdminProductos(){
    $this->view->mostrarAdminproductos($this->model->getCategorias(),$this->model->getProductos());
  }

  function mostrarAdminCategorias(){
  $this->view->mostrarAdminCategorias($this->model->getCategorias());
}

function mostrarProductos(){
  $this->view->mostrarOpticas($this->model->getProductos());
}

function agregarProducto(){
  $this->model->agregarProducto($_REQUEST['titulo'], $_REQUEST['descripcion'], $_REQUEST['categoria'], $_FILES);
}

function agregarCategoria(){
    $this->model->agregarCategoria($_REQUEST['categoria']);
}

function mostrarProductoUnico(){
  $this->view->mostrarProductoUnico($this->model->getProducto($_REQUEST['id_optica']));
}

function borrarCategoria(){
    $this->model->borrarCategoria($_REQUEST['id_categoria']);
}

function borrarProducto(){
    $this->model->borrarProducto($_REQUEST['id_producto']);
}

function modificarCategoria(){
    $this->model->modificarCategoria($_REQUEST['categoria'],$_REQUEST['id_categoria']);
}

}
?>
