<?php
/* Smarty version 3.1.39, created on 2021-09-27 22:31:20
  from '/opt/lampp/htdocs/Web2/TPE1/templates/homeProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61522a187d19b4_57157036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b421a3eea28b5f144aa2d5e7497929f389d45a83' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/homeProducts.tpl',
      1 => 1632774669,
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
function content_61522a187d19b4_57157036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:forms/formAlta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:tabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
