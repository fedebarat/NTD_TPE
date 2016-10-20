<?php /* Smarty version Smarty-3.1.14, created on 2016-10-20 02:56:21
         compiled from ".\templates\adminCategoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16998580807a04de348-54299945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0750831271c774abc73a4f23a7062066151d5a18' => 
    array (
      0 => '.\\templates\\adminCategoria.tpl',
      1 => 1476924971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16998580807a04de348-54299945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580807a0516249_38480316',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580807a0516249_38480316')) {function content_580807a0516249_38480316($_smarty_tpl) {?><div class="container" id="contenido">
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
            <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
          <li>

            <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

            <button type="button" class="btnBorrarCategoria" data-id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

            <button type="button" class="btnModificarCategoria" data-id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>

          </li>

            <?php } ?>
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
<?php }} ?>