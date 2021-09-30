<?php
/* Smarty version 3.1.39, created on 2021-09-30 20:50:07
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615606df002f25_73123057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5e482769a9e866c115466c961e14bf1e28fbb17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formFilter.tpl',
      1 => 1633027792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/selectDinamico.tpl' => 1,
  ),
),false)) {
function content_615606df002f25_73123057 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" class="botonera mt-3" action="Filter">
    <button class="btn btn-outline-info" type="submit">Filtrar</button> 
    <?php $_smarty_tpl->_subTemplateRender("file:forms/selectDinamico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form><?php }
}
