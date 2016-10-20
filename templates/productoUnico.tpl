<div class="container">
  <div class="row">
    <article class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">


        <label class="control-label" for="nombre"></label>
        <ul class="list-group center-blick">
          {foreach $productos as $producto}
          <li class="list-group-item">

            <h3> {$producto['categoria']['nombre']} </h3>
            <h3> {$producto['titulo']} </h3>
            <p>  {$producto['descripcion']}</p>
            {foreach $producto['imagenes'] as $img}
            <img class="img-responsive center-block" src="{$img['imagen']}" alt="{$producto['titulo']}" >

            {/foreach}
            {/foreach}
          </ul>

      </article>
    </div>
  </div>
