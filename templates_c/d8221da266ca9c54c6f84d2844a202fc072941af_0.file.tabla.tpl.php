<?php
/* Smarty version 3.1.39, created on 2021-09-28 20:11:42
  from '/opt/lampp/htdocs/Web2/TPE1/templates/tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61535ade935916_84213440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8221da266ca9c54c6f84d2844a202fc072941af' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/tabla.tpl',
      1 => 1632852613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61535ade935916_84213440 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table table-dark table-hover mt-5">
      <thead>
        <tr>
            <th>#</th>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value[0], 'item', false, 'indice');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                
                <?php if ($_smarty_tpl->tpl_vars['indice']->value == 'id') {?>
                    <th>Acciones</td>
                <?php } else { ?>
                    <th><?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
</th>
                <?php }?>
                
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item', false, 'indice');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
</th>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id') {?>
                        <td scope="col">
                            <div class="botonera">
                                <a class="btn btn-danger btn-js"  href="del/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">Borrar</a>
                                <a class="btn btn-warning btn-js"  href="HomeEdit/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">Editar</a>
                            </div>
                        </td>
                    <?php } else { ?>
                        <td scope="col"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
                    <?php }?>
                    
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>

  </table>

<?php }
}
