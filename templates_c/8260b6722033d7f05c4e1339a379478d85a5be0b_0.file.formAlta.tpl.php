<?php
/* Smarty version 3.1.39, created on 2021-09-27 22:31:20
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAlta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61522a187dcea9_82324649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8260b6722033d7f05c4e1339a379478d85a5be0b' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/formAlta.tpl',
      1 => 1632774669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61522a187dcea9_82324649 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="addProduct" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Producto
                    <input name="producto" type="text" class="form-control" required>
                </label>
            </div>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-9">
            <div class="form-group">
    
            <select name="tipo" class="form-select" aria-label="Default select example" required>
                    <option value="false" selected>Seleccione tipo</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->valor;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Precio</label>
                <input name="precio" type="text" class="form-control" required>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
