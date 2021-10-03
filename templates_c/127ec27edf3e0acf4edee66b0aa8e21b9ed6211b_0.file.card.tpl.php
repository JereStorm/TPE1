<?php
/* Smarty version 3.1.39, created on 2021-10-03 21:59:07
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a0b8b1f8ba4_24799169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127ec27edf3e0acf4edee66b0aa8e21b9ed6211b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\card.tpl',
      1 => 1633291144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a0b8b1f8ba4_24799169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <div class="col">
            <div class="card shadow-sm">

                <div class="card-body">
                    <h5 class="card-title text-center">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->Nombre;?>

                    </h5>
                    
                    <ul>
                        <li class="card-text">Precio <?php echo $_smarty_tpl->tpl_vars['item']->value->Precio;?>
$</li>
                        <li class="card-text">Tipo: <?php echo $_smarty_tpl->tpl_vars['item']->value->Tipo;?>
</li>
                    </ul>

                    
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="card-text">Stock: 15</h6>
                        <div class="btn-group">
                            <a href="Details/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn btn-sm btn-secondary">View</a>
                        </div>
                    </div>
                                    </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
