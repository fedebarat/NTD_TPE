<?php
include_once 'libs/Smarty.class.php';

class notedetengas_view {
  private $smarty;

function __construct(){
  $this->smarty = new Smarty();
  $this->errores = array();
}

function mostrarCategorias($categorias){

  $this->smarty->assign('categorias', $categorias);
  $this->smarty->display('index.tpl');
}


function mostrarAdminProductos($categorias,$productos){
    $this->smarty->assign('productos', $productos);
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('adminProducto.tpl');
}

function mostrarAdminCategorias($categorias){
    $this->smarty->assign('categorias', $categorias);
    $this->smarty->display('adminCategoria.tpl');
}

function mostrarHome(){

    $this->smarty->display('home.tpl');
}

function mostrarProductos($productos){
    $this->smarty->assign('productos', $productos);

    $this->smarty->display('producto.tpl');
}

function mostrarProductoUnico($productos){
    $this->smarty->assign('productos', $productos);

    $this->smarty->display('productoUnico.tpl');
  }


}
?>
