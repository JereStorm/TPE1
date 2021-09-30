<?php
/* Smarty version 3.1.39, created on 2021-09-28 05:55:35
  from '/opt/lampp/htdocs/Web2/TPE1/templates/homeEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61529237594336_72144250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e09ed1717cee6a8472a458c231ca102b261551' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/homeEdit.tpl',
      1 => 1632801277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:forms/formEdit.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_61529237594336_72144250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:forms/formEdit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
