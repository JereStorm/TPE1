<?php
/* Smarty version 3.1.39, created on 2021-09-27 04:08:04
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\homeProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61512784cf2c64_89840081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc40f3fb2e9bd0d98fbaaa91c24342638fd55c6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\homeProducts.tpl',
      1 => 1632708482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:forms/formAlta.tpl' => 1,
    'file:tabla.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_61512784cf2c64_89840081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:forms/formAlta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:tabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
