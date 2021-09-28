<?php
/* Smarty version 3.1.39, created on 2021-09-28 04:35:26
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formAltaType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61527f6e252587_33537612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c131fd64978952f7b95a9d7c096a24ce91fc7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formAltaType.tpl',
      1 => 1632796523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/cuerpoType.tpl' => 1,
  ),
),false)) {
function content_61527f6e252587_33537612 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add/TipoProducto" method="POST" class="my-4">
    <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoType.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form><?php }
}
