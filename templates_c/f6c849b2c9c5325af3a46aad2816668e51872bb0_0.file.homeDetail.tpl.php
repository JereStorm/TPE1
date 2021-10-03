<?php
/* Smarty version 3.1.39, created on 2021-10-03 22:15:17
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\homeDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a0f55e06521_57501494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6c849b2c9c5325af3a46aad2816668e51872bb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\homeDetail.tpl',
      1 => 1633292116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_615a0f55e06521_57501494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Ya casi estamos ;)</h1>

<div class="col">
            <div class="card shadow-sm">

                <div class="card-body">
                    <h5 class="card-title text-center">
                    <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre;?>

                    </h5>
                    
                    <ul>
                        <li class="card-text">Precio <?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
$</li>
                        <li class="card-text">Tipo: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Tipo;?>
</li>
                    </ul>

                    
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="card-text">Stock: 15</h6>
                       
                    </div>
                                    </div>
            </div>
        </div>


<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
