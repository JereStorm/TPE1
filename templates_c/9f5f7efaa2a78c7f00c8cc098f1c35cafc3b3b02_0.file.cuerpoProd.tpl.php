<?php
/* Smarty version 3.1.39, created on 2021-10-05 15:02:32
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\cuerpos\cuerpoProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c4ce8098c10_18441638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f5f7efaa2a78c7f00c8cc098f1c35cafc3b3b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\cuerpos\\cuerpoProd.tpl',
      1 => 1633437450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/selectDinamico.tpl' => 1,
  ),
),false)) {
function content_615c4ce8098c10_18441638 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Producto
                <input name="producto" value="<?php if ((isset($_smarty_tpl->tpl_vars['value_nombre']->value))) {
echo $_smarty_tpl->tpl_vars['value_nombre']->value;
}?>" type="text" class="form-control" required>
            </label>
        </div>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-9">
        <div class="form-group">
                    <?php $_smarty_tpl->_subTemplateRender("file:forms/selectDinamico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Precio</label>
            <input name="precio" value="<?php if ((isset($_smarty_tpl->tpl_vars['value_precio']->value))) {
echo $_smarty_tpl->tpl_vars['value_precio']->value;
}?>" type="number" min="0" class="form-control" required>
        </div>
    </div>
</div>
<?php }
}
