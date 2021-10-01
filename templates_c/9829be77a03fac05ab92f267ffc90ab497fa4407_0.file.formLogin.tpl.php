<?php
/* Smarty version 3.1.39, created on 2021-10-01 03:23:38
  from 'C:\xampp\htdocs\proyectos\WEB2\TPE\01tpe\templates\forms\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6156631a2591b4_60116447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9829be77a03fac05ab92f267ffc90ab497fa4407' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB2\\TPE\\01tpe\\templates\\forms\\formLogin.tpl',
      1 => 1633051173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6156631a2591b4_60116447 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="Login" method="POST">

    <div class="mb-3">
        <label for="email" name="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="Password" name="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="Password">
    </div>
    <div class="mb-3 form-check">
            </div>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>
    <button type="submit" class="btn btn-primary">Submit</button>

</form><?php }
}
