<?php
/* Smarty version 3.1.39, created on 2021-10-01 00:26:38
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formAlta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6156399e3ea4e5_13723157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9907161ecb3fa579ba3f7430016777f7bb2dc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formAlta.tpl',
      1 => 1633040770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/cuerpos/cuerpoProd.tpl' => 1,
    'file:forms/cuerpos/cuerpoType.tpl' => 1,
  ),
),false)) {
function content_6156399e3ea4e5_13723157 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" method="POST" class="my-4">
    <?php if ($_smarty_tpl->tpl_vars['URL']->value == 'Producto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpos/cuerpoProd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'TipoProducto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpos/cuerpoType.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</form><?php }
}
