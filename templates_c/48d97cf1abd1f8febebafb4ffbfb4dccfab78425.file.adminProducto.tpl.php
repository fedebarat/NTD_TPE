<?php /* Smarty version Smarty-3.1.14, created on 2016-10-20 01:39:00
         compiled from ".\templates\adminProducto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3142558080414d8c647-29188494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d97cf1abd1f8febebafb4ffbfb4dccfab78425' => 
    array (
      0 => '.\\templates\\adminProducto.tpl',
      1 => 1476919498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3142558080414d8c647-29188494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productos' => 0,
    'producto' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58080414ebd207_14928849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58080414ebd207_14928849')) {function content_58080414ebd207_14928849($_smarty_tpl) {?><div class="container" id="contenido">
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
            <?php  $_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->key => $_smarty_tpl->tpl_vars['producto']->value){
$_smarty_tpl->tpl_vars['producto']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['producto']->value['titulo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria']['nombre'];?>
<button type="button" class="btnBorrarProducto" data-id="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id'];?>
">X</button></li>
            <?php } ?>
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
    <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
 </option>
    <?php } ?>

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
<?php }} ?>