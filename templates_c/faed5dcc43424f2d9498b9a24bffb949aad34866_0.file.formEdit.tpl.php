<?php
/* Smarty version 3.1.39, created on 2021-10-04 17:50:36
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b22cc8263d1_23967042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faed5dcc43424f2d9498b9a24bffb949aad34866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formEdit.tpl',
      1 => 1633362633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/cuerpos/cuerpoProd.tpl' => 1,
    'file:forms/cuerpos/cuerpoType.tpl' => 1,
    'file:forms/cuerpos/cuerpoStock.tpl' => 1,
  ),
),false)) {
function content_615b22cc8263d1_23967042 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="edit/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" method="POST" class="my-4">
<input type="hidden" id="identificador" value="<?php if ((isset($_smarty_tpl->tpl_vars['value_id']->value))) {
echo $_smarty_tpl->tpl_vars['value_id']->value;
}?>" name="id">
    <?php if ($_smarty_tpl->tpl_vars['URL']->value == 'Producto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpos/cuerpoProd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'TipoProducto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpos/cuerpoType.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'Stock') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpos/cuerpoStock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</form><?php }
}
