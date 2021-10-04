<?php
/* Smarty version 3.1.39, created on 2021-09-30 04:27:56
  from '/opt/lampp/htdocs/Web2/TPE1/templates/html/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615520ace1d925_11979794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba78e82afbb98dff0ae41b12b6413b856b648b40' => 
    array (
      0 => '/opt/lampp/htdocs/Web2/TPE1/templates/html/header.tpl',
      1 => 1632968668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615520ace1d925_11979794 (Smarty_Internal_Template $_smarty_tpl) {
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
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="Home" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="Home/Producto" class="nav-link px-2 text-white">Productos</a></li>
          <li><a href="Home/Stock" class="nav-link px-2 text-white">Stock</a></li>
          <li><a href="Home/TipoProducto" class="nav-link px-2 text-white">Tipo Productos</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
    <!-- inicio de contenido principal -->
    <div class="container"><?php }
}