<?php
/* Smarty version 3.1.39, created on 2021-09-27 23:08:25
  from '/opt/lampp/htdocs/Web2/TPE1/templates/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615232c94e9a91_07683853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d2914d30c2f8dcbda06ffab49253832d1edf23' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/error.tpl',
      1 => 1632774669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_615232c94e9a91_07683853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="alert alert-danger mt-5" role="alert">
    <h4 class="alert-heading">Algo salio mal! :/</h4>
    <p><?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
</p>
    <hr>
    <a class="mb-0" href="home">Volver</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
