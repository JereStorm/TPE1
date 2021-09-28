<?php
/* Smarty version 3.1.39, created on 2021-09-28 20:08:37
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61535a251e4878_11357338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ec8f7588c181ebf00df7a14460ce9390f43a53' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoType.tpl',
      1 => 1632801277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61535a251e4878_11357338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
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

<button type="submit" class="btn btn-primary mt-2">Guardar</button><?php }
}
