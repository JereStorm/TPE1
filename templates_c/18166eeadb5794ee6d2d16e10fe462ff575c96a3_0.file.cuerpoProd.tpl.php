<?php
/* Smarty version 3.1.39, created on 2021-09-28 18:26:09
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\cuerpoProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615342219699e7_48577418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18166eeadb5794ee6d2d16e10fe462ff575c96a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\cuerpoProd.tpl',
      1 => 1632846343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615342219699e7_48577418 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Producto
                <input name="producto" value="<?php echo $_smarty_tpl->tpl_vars['value_nombre']->value;?>
" type="text" class="form-control" required>
            </label>
        </div>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-9">
        <div class="form-group">
            <select name="tipo" class="form-select" aria-label="Default select example" required>
                    <option value="false">Seleccione tipo</option>
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
            </select>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Precio</label>
            <input name="precio" value="<?php echo $_smarty_tpl->tpl_vars['value_precio']->value;?>
" type="text" class="form-control" required>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary mt-2">Guardar</button><?php }
}
