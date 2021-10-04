<?php
/* Smarty version 3.1.39, created on 2021-10-02 02:30:38
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6157a82e791a49_26548621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11616e15a1fef2c50db52a474cf6633d35e6e5a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\home.tpl',
      1 => 1633134628,
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
function content_6157a82e791a49_26548621 (Smarty_Internal_Template $_smarty_tpl) {
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
