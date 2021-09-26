<?php
/* Smarty version 3.1.39, created on 2021-09-27 00:24:19
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6150f31355d269_52155824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11616e15a1fef2c50db52a474cf6633d35e6e5a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\home.tpl',
      1 => 1632694709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_6150f31355d269_52155824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Preparado para el exito?</h1>



  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item', false, 'key2');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

        <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'value', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        <td scope="col">key = <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
        <td scope="col">value = <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
