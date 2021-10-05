<?php
/* Smarty version 3.1.39, created on 2021-10-05 22:12:43
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAlta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615cb1bb2e8a65_07753367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8260b6722033d7f05c4e1339a379478d85a5be0b' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAlta.tpl',
      1 => 1633464608,
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
function content_615cb1bb2e8a65_07753367 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" method="POST" class="my-4">
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
    
<button type="submit" class="btn btn-primary mt-2">Guardar</button>

</form><?php }
}
