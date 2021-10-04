<?php
<<<<<<< HEAD
/* Smarty version 3.1.39, created on 2021-10-04 17:02:42
=======
/* Smarty version 3.1.39, created on 2021-10-01 00:26:36
>>>>>>> desarrollo2
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
<<<<<<< HEAD
  'unifunc' => 'content_615b1792188400_64379874',
=======
  'unifunc' => 'content_6156399cbb4db4_27408071',
>>>>>>> desarrollo2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faed5dcc43424f2d9498b9a24bffb949aad34866' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formEdit.tpl',
<<<<<<< HEAD
      1 => 1633359505,
=======
      1 => 1633040777,
>>>>>>> desarrollo2
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
<<<<<<< HEAD
    'file:forms/cuerpoProd.tpl' => 1,
    'file:forms/cuerpoType.tpl' => 1,
    'file:forms/cuerpoStock.tpl' => 1,
  ),
),false)) {
function content_615b1792188400_64379874 (Smarty_Internal_Template $_smarty_tpl) {
=======
    'file:forms/cuerpos/cuerpoProd.tpl' => 1,
    'file:forms/cuerpos/cuerpoType.tpl' => 1,
  ),
),false)) {
function content_6156399cbb4db4_27408071 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> desarrollo2
?><!-- formulario de alta de tarea -->
<form action="edit/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" method="POST" class="my-4">
<input type="hidden" id="identificador" value="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
" name="id">
    <?php if ($_smarty_tpl->tpl_vars['URL']->value == 'Producto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpos/cuerpoProd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'TipoProducto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpos/cuerpoType.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'Stock') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoStock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</form><?php }
}
