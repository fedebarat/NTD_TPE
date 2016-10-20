<div class="container" id="contenido">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">
    <br>
    <h3 class="text-center"	> Productos Nuevos ! :</h3>
    <br>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lista de Productos</a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">

          <ul>
            {foreach $productos as $producto}
            <li>{$producto['titulo']} - {$producto['categoria']['nombre']}<button type="button" class="btnBorrarProducto" data-id="{$producto['id']}">X</button></li>
            {/foreach}
          </ul>
        </div>
      </div>
    </div>


  <form method="POST" role="form">
  <div class="form-group">
    <label for="usr">Titulo:</label>
    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese un Nombre de Producto" required >

    <label for="comment">Descripcion:</label>
    <textarea class="form-control" rows="5" name="descripcion" id="descripcion" placeholder="Descripcion de Producto" required ></textarea>
  </div>

  <select id="categoria" name="categoria" class="form-control">
    {foreach $categorias as $categoria}
    <option value="{$categoria['id']}">{$categoria['nombre']} </option>
    {/foreach}

</select>
<br>

<label class="control-label">Adjuntar Imagenes</label>
<br>
<input id="imagenesASubir" name="imagenesASubir[]" type="file" class="file" multiple="true" data-show-upload="true" data-show-caption="true">


<br>
<button type="submit" id="btnAgregarOptica" class="btn btn-default center-block">Enviar</button>
</form>
<br>
</div>
</div>
</div>
</div>


</div>
<script type="text/javascript" src="js/subirConAjax.js"> </script>
