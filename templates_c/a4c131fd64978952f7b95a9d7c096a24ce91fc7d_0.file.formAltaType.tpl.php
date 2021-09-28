<?php
/* Smarty version 3.1.39, created on 2021-09-28 04:05:09
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formAltaType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61527855776964_78748323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c131fd64978952f7b95a9d7c096a24ce91fc7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formAltaType.tpl',
      1 => 1632794665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61527855776964_78748323 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add/TipoProducto" method="POST" class="my-4">
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
