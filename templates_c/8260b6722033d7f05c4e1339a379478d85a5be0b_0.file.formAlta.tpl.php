<?php
/* Smarty version 3.1.39, created on 2021-09-28 05:54:52
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAlta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6152920cdf8d34_71578131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8260b6722033d7f05c4e1339a379478d85a5be0b' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAlta.tpl',
      1 => 1632801277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/cuerpoProd.tpl' => 1,
    'file:forms/cuerpoType.tpl' => 1,
  ),
),false)) {
function content_6152920cdf8d34_71578131 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" method="POST" class="my-4">
    <?php if ($_smarty_tpl->tpl_vars['URL']->value == 'Producto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoProd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'TipoProducto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoType.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</form><?php }
}
