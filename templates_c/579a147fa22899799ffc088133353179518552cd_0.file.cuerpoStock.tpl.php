<?php
/* Smarty version 3.1.39, created on 2021-10-04 16:24:18
  from '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoStock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b0e929c9ca4_21635797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579a147fa22899799ffc088133353179518552cd' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/forms/cuerpoStock.tpl',
      1 => 1633357450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b0e929c9ca4_21635797 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="input-group mb-3">

    <?php if (($_smarty_tpl->tpl_vars['value_precio']->value == '')) {?>
            <label class="input-group-text alert-success" for="inputGroupSelect01">Producto</label>
            <select name="producto" class="form-select" id="inputGroupSelect01">
                <option selected disabled selected>Seleccione un Producto</option>
          
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                <?php if (($_smarty_tpl->tpl_vars['value_tipo']->value == $_smarty_tpl->tpl_vars['item']->value->id)) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</option>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php } else { ?>

            <label class="input-group-text alert-secondary" id="disabledSelect">Producto</label>
            <select  name="producto" class="form-select" id="disabledSelect">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                <?php if (($_smarty_tpl->tpl_vars['value_tipo']->value == $_smarty_tpl->tpl_vars['item']->value->id)) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['value_nombre']->value;?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</option>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php }?>
        
       
         
        <label class="input-group-text alert-success" for="inputGroupSelect01">Cantidad</label>
        <input name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['value_precio']->value;?>
" type="number" min="0" class="form-control" required>
        
        <?php if (($_smarty_tpl->tpl_vars['value_precio']->value == '')) {?>
            <button class="btn btn-primary btn-outline" type="submit" >Agregar a Stock</button>
        <?php } else { ?>
            <button class="btn btn-primary btn-outline" type="submit" >Editar Stock</button>
        <?php }?>

      </div>
<?php }
}
