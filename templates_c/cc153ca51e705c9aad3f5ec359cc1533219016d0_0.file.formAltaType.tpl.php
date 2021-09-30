<?php
/* Smarty version 3.1.39, created on 2021-09-27 23:10:33
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAltaType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615233497b3879_68643191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc153ca51e705c9aad3f5ec359cc1533219016d0' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAltaType.tpl',
      1 => 1632776992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615233497b3879_68643191 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="addType" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Producto
                    <input name="tipo" type="text" class="form-control" required>
                </label>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
