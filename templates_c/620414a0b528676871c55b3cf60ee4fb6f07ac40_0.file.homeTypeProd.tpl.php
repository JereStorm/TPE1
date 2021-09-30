<?php
/* Smarty version 3.1.39, created on 2021-09-27 22:49:15
  from '/opt/lampp/htdocs/Web2/TPE1/templates/homeTypeProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61522e4b68e068_25158433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '620414a0b528676871c55b3cf60ee4fb6f07ac40' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/homeTypeProd.tpl',
      1 => 1632775676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:forms/formAltaType.tpl' => 1,
    'file:tabla.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_61522e4b68e068_25158433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:forms/formAltaType.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:tabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
