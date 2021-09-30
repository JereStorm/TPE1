<?php
/* Smarty version 3.1.39, created on 2021-09-30 05:12:43
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoStock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61552b2b9acec2_53979796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579a147fa22899799ffc088133353179518552cd' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoStock.tpl',
      1 => 1632971237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61552b2b9acec2_53979796 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="input-group mb-3">
        <label class="input-group-text alert-success" for="inputGroupSelect01">Producto</label>
        <select name="producto_fk" class="form-select" id="inputGroupSelect01">
          <option selected>Seleccione un Producto</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label class="input-group-text alert-success" for="inputGroupSelect01">Cantidad</label>
        <input name="cantidad" type="number" min="0" class="form-control" required>
        <button class="btn btn-primary btn-outline" type="submit" >Agregar a Stock</button>
      </div>
<?php }
}
