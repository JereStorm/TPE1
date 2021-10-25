<?php
/* Smarty version 3.1.39, created on 2021-10-25 17:44:39
  from '/opt/lampp/htdocs/Web2/TPE1/templates/tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176d0e76217f5_20934349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8221da266ca9c54c6f84d2844a202fc072941af' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/tabla.tpl',
      1 => 1635176677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176d0e76217f5_20934349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/Web2/TPE1/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<table class="table table-dark table-hover mt-5">
      <thead>
        <tr class="text-center">
            <th>#</th>
       
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglo']->value[0], 'item', false, 'indice');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            
                <?php if ($_smarty_tpl->tpl_vars['indice']->value == 'id' && (isset($_SESSION['USER_ID'])) && $_SESSION['USER_ROL'] <= USER) {?>
                    <th>Acciones</td>
                <?php } elseif ($_smarty_tpl->tpl_vars['indice']->value != 'id') {?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglo']->value, 'item', false, 'indice');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr class="text-center">
                <th><?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
</th>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'id' && (isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] <= USER) {?>                        <td scope="col" >
                            <div class="botonera">
                                <a class="btn btn-outline-danger btn-js"  href="del/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">Borrar</a>
                                <a class="btn btn-outline-warning btn-js"  href="HomeEdit/<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">Editar</a>
                               <?php if ($_smarty_tpl->tpl_vars['URL']->value == 'Producto') {?>
                                <a class="btn btn-outline-info btn-js"  href="Details/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">Ver</a>
                                <?php }?> 
                            </div>
                        </td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value !== 'id') {?>
                        <td scope="col"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value,20);?>
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
