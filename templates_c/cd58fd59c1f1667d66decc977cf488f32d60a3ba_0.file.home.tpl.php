<?php
/* Smarty version 3.1.39, created on 2021-10-05 22:12:44
  from '/opt/lampp/htdocs/Web2/TPE1/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615cb1bc8f2c80_74478014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd58fd59c1f1667d66decc977cf488f32d60a3ba' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/home.tpl',
      1 => 1633441297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:forms/formFilter.tpl' => 1,
    'file:card.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_615cb1bc8f2c80_74478014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Preparado para el exito?</h1>


<?php if ((isset($_smarty_tpl->tpl_vars['filtrados']->value))) {?>
    
<?php }
$_smarty_tpl->_subTemplateRender("file:forms/formFilter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
