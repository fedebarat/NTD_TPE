<?php
  include_once 'controller/notedetengas_controller.php';
  include_once 'config/config_app.php';
  $notedetengasController = new notedetengasController();

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){

  $notedetengasController->mostrarCategorias();
}

else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {

    case ConfigApp::$ACTION_ADD_PRODUCTO:
      $notedetengasController->agregarProductos();
      break;

    case ConfigApp::$ACTION_MOSTRAR_ADMIN_PRODUCTOS:
        $notedetengasController->mostrarAdminProductos();
        break;

    case ConfigApp::$ACTION_MOSTRAR_HOME:
        $notedetengasController->mostrarHome();
        break;

    case ConfigApp::$ACTION_MOSTRAR_ADMIN_PRODUCTOS:
        $notedetengasController->mostrarProductos();
        break;

    case ConfigApp::$ACTION_MOSTRAR_ADMIN_CATEGORIAS:
        $notedetengasController->mostrarAdminCategorias();
        break;

    case ConfigApp::$ACTION_ADD_CATEGORIA:
        $notedetengasController->agregarCategoria();
        break;

    case ConfigApp::$ACTION_MOSTRAR_PRODUCTO_UNICO:
        $notedetengasController->mostrarProductoUnico();
        break;

    case ConfigApp::$ACTION_BORRAR_PRODUCTO:
        $notedetengasController->borrarCategoria();
        break;

    case ConfigApp::$ACTION_BORRAR_PRODUCTO:
        $notedetengasController->borrarProducto();
        break;

    case ConfigApp::$ACTION_MODIFICAR_CATEGORIA:
        $notedetengasController->modificarCategoria();
        break;

}
}
?>
