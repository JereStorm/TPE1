<?php
/* Smarty version 3.1.39, created on 2021-10-04 15:11:21
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615afd790d3251_19908309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b685f78d8da1665a316227afb79d38592dfb7d5' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formEdit.tpl',
      1 => 1633351307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/cuerpoProd.tpl' => 1,
    'file:forms/cuerpoType.tpl' => 1,
    'file:forms/cuerpoStock.tpl' => 1,
  ),
),false)) {
function content_615afd790d3251_19908309 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="edit/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" method="POST" class="my-4">
<input type="hidden" id="identificador" value="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
" name="id">
    <?php if ($_smarty_tpl->tpl_vars['URL']->value == 'Producto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoProd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'TipoProducto') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoType.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['URL']->value == 'Stock') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoStock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</form><?php }
}
