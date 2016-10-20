<?php
class notedetengas_model {
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=ntd;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function getProductos(){
    $productos = array();
    $consulta = $this->db->prepare("SELECT * FROM producto order by id desc");
    $consulta->execute();
    while($producto = $consulta->fetch()){
      $consulta1 = $this->db->prepare("SELECT nombre FROM categoria where id=?");
      $consulta1->execute(array($producto['fk_id_producto']));
      $categoria = $consulta1->fetchAll();

      $consulta2 = $this->db->prepare("SELECT * FROM imagen where fk_id_imgproducto=?");
      $consulta2->execute(array($producto['id']));
      $imagenes = $consulta2->fetchAll();

      $producto['imagenes'] = $imagenes;
      $producto['categoria'] = $categoria[0];
      $productos[] = $producto;
    }

    return $productos;
    }

    function getCategorias(){
      $categorias = array();
      $consulta = $this->db->prepare("SELECT * FROM categoria");
      $consulta->execute();
      $categorias = $consulta->fetchAll();

      return $categorias;
    }


    function subirArchivosAJAX($archivos){
      $destinos = array();
      foreach ($archivos as $archivo) {
        $destino = 'upload/'.uniqid().$archivo['name'];
        move_uploaded_file($archivo['tmp_name'], $destino);
        $destinos[]=$destino;
      }
      return $destinos;
    }

    function agregarProducto($titulo, $descripcion, $categoria, $imagenes){
    $rutas= $this->subirArchivosAJAX($imagenes);
    $consulta = $this->db->prepare('INSERT INTO producto(titulo,descripcion,fk_id_producto) VALUES(?,?,?)');
    $consulta->execute(array($titulo,$descripcion,$categoria));
    $id_producto = $this->db->lastInsertId();
    foreach ($rutas as $ruta) {
      $imagenes = $this->db->prepare('INSERT INTO imagen(fk_id_imgproducto,imagen) VALUES(?,?)');
      $imagenes->execute(array($id_producto, $ruta));
    }
}

    function agregarCategoria($categoria){
      $consulta = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
      $consulta->execute(array($categoria));
    }


    function getProducto($id_producto){
      $productos = array();
      $consulta = $this->db->prepare("SELECT * FROM producto where id=? ");
      $consulta->execute(array($id_producto));

      while($producto = $consulta->fetch()){
        $consulta1 = $this->db->prepare("SELECT nombre FROM categoria where id=?");
        $consulta1->execute(array($producto['fk_id_producto']));
        $categoria = $consulta1->fetchAll();

        $consulta2 = $this->db->prepare("SELECT * FROM imagen where fk_id_imgproducto=?");
        $consulta2->execute(array($producto['id']));
        $imagenes = $consulta2->fetchAll();

        $producto['imagenes'] = $imagenes;
        $producto['categoria'] = $categoria[0];
        $productos[] = $producto;
      }
      return $categorias;
    }

    function borrarCategoria($id_categoria){
      $consulta = $this->db->prepare('DELETE FROM categoria WHERE id=?');
      $consulta->execute(array($id_categoria));
      $consulta = $this->db->prepare('DELETE FROM producto WHERE fk_id_producto=?');
      $consulta->execute(array($id_categoria));
      $id_producto = $this->db->lastInsertId();
      $consulta = $this->db->prepare('DELETE FROM imagen WHERE fk_id_imgproducto=?');
      $consulta->execute(array($id_producto));

      if($consulta->rowCount() > 0)
        return 'Se Borro';
      else
        return 'No se puede Borrar';
      }

      function borrarProducto($id_producto){
        $consulta = $this->db->prepare('DELETE FROM producto WHERE id=?');
        $consulta->execute(array($id_producto));
        $consulta = $this->db->prepare('DELETE FROM imagen WHERE fk_id_imgproducto=?');
        $consulta->execute(array($id_producto));

        if($consulta->rowCount() > 0)
          return 'Se Borro';
        else
          return 'No se puede Borrar';
        }

        function modificarCategoria($categoria,$id){
          $consulta = $this->db->prepare('UPDATE categoria SET nombre=? WHERE id=?');
          $consulta->execute(array($categoria,$id));
        }

}
?>
