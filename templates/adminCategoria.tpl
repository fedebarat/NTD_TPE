<div class="container" id="contenido">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">
    <br>
    <h3 class="text-center"	> Todos Nuestros Trabajos! :</h3>
    <br>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lista de Categorias</a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
          <ul>
            {foreach $categorias as $categoria}
          <li>

            {$categoria['nombre']}
            <button type="button" class="btnBorrarCategoria" data-id="{$categoria['id']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

            <button type="button" class="btnModificarCategoria" data-id="{$categoria['id']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>

          </li>

            {/foreach}
          </ul>
        </div>
      </div>
    </div>


  <form method="POST" role="form">
  <div class="form-group">
    <label for="usr">Ingresar una nueva Categoria:</label>
    <input type="text" class="" name="categoria" id="categoria" placeholder="Nombre de Categoria" required >
  </div>

<button type="submit" id="btnAgregarCategoria" class="btn btn-default center-block">Enviar</button>
</form>
<br>
</div>
</div>
</div>
</div>


</div>

<script type="text/javascript" src="js/subirConAjax.js"> </script>
