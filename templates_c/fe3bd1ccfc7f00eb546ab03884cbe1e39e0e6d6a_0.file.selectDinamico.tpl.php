<?php
/* Smarty version 3.1.39, created on 2021-09-29 23:55:31
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\selectDinamico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154e0d394ec80_73877508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe3bd1ccfc7f00eb546ab03884cbe1e39e0e6d6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\selectDinamico.tpl',
      1 => 1632951078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6154e0d394ec80_73877508 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="tipo" class="form-select" aria-label="Default select example" required>
    <option value="false" disabled selected>Seleccione tipo</option>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

        <?php if (($_smarty_tpl->tpl_vars['value_tipo']->value == $_smarty_tpl->tpl_vars['item']->value->Tipo)) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['item']->value->Tipo;?>
</option>
        <?php } else { ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->Tipo;?>
</option>
        <?php }?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select><?php }
}
