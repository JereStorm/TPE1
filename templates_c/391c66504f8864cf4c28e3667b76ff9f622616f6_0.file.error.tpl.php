<?php
/* Smarty version 3.1.39, created on 2021-09-27 05:06:25
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61513531811286_74444244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391c66504f8864cf4c28e3667b76ff9f622616f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\error.tpl',
      1 => 1632711983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_61513531811286_74444244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="alert alert-success mt-5" role="alert">
    <h4 class="alert-heading">Algo salio mal! :/</h4>
    <p><?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
</p>
    <hr>
    <a class="mb-0" href="home">Volver</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
