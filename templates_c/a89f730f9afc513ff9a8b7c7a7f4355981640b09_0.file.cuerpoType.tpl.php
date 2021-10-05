<?php
/* Smarty version 3.1.39, created on 2021-10-05 15:02:33
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\cuerpos\cuerpoType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c4ce92c55d5_70463461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89f730f9afc513ff9a8b7c7a7f4355981640b09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\cuerpos\\cuerpoType.tpl',
      1 => 1633437451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c4ce92c55d5_70463461 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Tipo Producto
                <input name="tipo" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['value_tipo']->value))) {
echo $_smarty_tpl->tpl_vars['value_tipo']->value;
}?>" class="form-control" required>
            </label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-9">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"><?php if ((isset($_smarty_tpl->tpl_vars['value_descripcion']->value))) {
echo $_smarty_tpl->tpl_vars['value_descripcion']->value;
}?></textarea>
        </div>
    </div>
</div>
<?php }
}
