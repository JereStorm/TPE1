<?php
/* Smarty version 3.1.39, created on 2021-10-25 17:59:57
  from '/opt/lampp/htdocs/Web2/TPE1/templates/homeTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176d47d6fb9e0_39456428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33a41b684a3c3d876c09a823f519b0ecc233cfd0' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/homeTable.tpl',
      1 => 1635177595,
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
function content_6176d47d6fb9e0_39456428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] <= USER && !(isset($_smarty_tpl->tpl_vars['userSegment']->value))) {?>

    <?php $_smarty_tpl->_subTemplateRender("file:forms/formAlta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['arreglo']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tabla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
