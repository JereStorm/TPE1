<?php
/* Smarty version 3.1.39, created on 2021-10-04 16:25:09
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b0ec58da938_46721718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b151ab67edf08e0bb7111168c11670b755b836b' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoProd.tpl',
      1 => 1633353890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b0ec58da938_46721718 (Smarty_Internal_Template $_smarty_tpl) {
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
            </select>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Precio</label>
            <input name="precio" value="<?php echo $_smarty_tpl->tpl_vars['value_precio']->value;?>
" type="number" min="0" class="form-control" required>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary mt-2">Guardar</button><?php }
}
