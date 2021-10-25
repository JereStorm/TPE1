<?php
/* Smarty version 3.1.39, created on 2021-10-25 16:22:01
  from '/opt/lampp/htdocs/Web2/TPE1/templates/html/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176bd890424d1_04575041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba78e82afbb98dff0ae41b12b6413b856b648b40' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/html/header.tpl',
      1 => 1635171704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176bd890424d1_04575041 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<header class="p-3 text-white bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="Home" class="nav-link px-2 text-white">Home</a></li>
          <?php if ((isset($_SESSION['USER_ID'])) && $_SESSION['USER_ROL'] <= 3) {?>
            <!-- SE VERIFICA QUE EL USUARIO ESTE LOGEADO PARA VER EL MENU AVANZADO -->
            <li><a href="Home/Stock" class="nav-link px-2 text-white">Stock</a></li>
            <li><a href="Home/Producto" class="nav-link px-2 text-white">Productos</a></li>
            <li><a href="Home/TipoProducto" class="nav-link px-2 text-white">Tipo Productos</a></li>
          <?php }?> 
          <?php if ((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == 1) {?>
            <!-- SE VERIFICA QUE EL USUARIO SEA ADMINISTRADOR -->
            <li><a href="Home/Admin" class="nav-link px-2 text-white">Panel de Adminstrador</a></li>
          <?php }?>
        </ul>

        <div class="text-end">
          <?php if ((isset($_SESSION['USER_ID']))) {?>
          <!-- $_SESSION['USER_ID'] -->
          <div class="d-flex align-items-baseline flex-wrap ">
            <h6>(<?php echo $_SESSION['USER_EMAIL'];?>
)</h6>
            <a href="Logout" class="btn btn-outline-light me-2 ms-2">Cerrar Sesion</a>
          </div>

          <?php } else { ?>
          <a href="Login" class="btn btn-light me-2">Ingresar</a>
          <a href="SignUp" class="btn btn-primary">Sign-up</a>
          <!--   <button type="button" class="btn btn-primary">Sign-up</button> -->
          <?php }?>
        </div>
      </div>
    </div>
  </header>
    <!-- inicio de contenido principal -->
    <div class="container"><?php }
}
