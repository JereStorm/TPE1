<?php
/* Smarty version 3.1.39, created on 2021-09-28 04:33:59
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formAltaProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61527f17ad5c01_78745225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c94bb99044459b34449a18b43311e210968028' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formAltaProd.tpl',
      1 => 1632796435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/cuerpoProd.tpl' => 1,
  ),
),false)) {
function content_61527f17ad5c01_78745225 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add/Producto" method="POST" class="my-4">
    <?php $_smarty_tpl->_subTemplateRender("file:forms/cuerpoProd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form><?php }
}
