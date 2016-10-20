<div class="container">
  <div class="row" >
    {foreach $productos as $producto}
    <article class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">
      <label class="control-label" for="nombre"></label>
      <ul class="list-group center-blick">
      <li class="list-group-item">
        <h3> {$producto['categoria']['nombre']} </h3>
          <a href="index.php?action=mostrar_producto&id_producto={$producto['id']}" class="linkproducto" > <h3> <u> {$producto['titulo']} </u> </h3> </a>
          <p>  {$producto['descripcion']}</p>
          {foreach $producto['imagenes'] as $img}
          <img class="img-responsive img-thumbnail" src="{$img['imagen']}" alt="{$producto['titulo']}" style="width:150px; height:150px" >
          {/foreach}
        </ul>
      </article>
      {/foreach}
    </div>
  </div>
