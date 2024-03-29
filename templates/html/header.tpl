<!DOCTYPE html>
<html lang="es">

<head>
    <base href="{$base}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<header class="p-3 text-white bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="Home" class="me-5 titulo d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          TPE Tomi-Jere
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto ms-5 justify-content-center mb-md-0 ">
          <li><a href="Home" class="nav-link px-2 text-white  navegador">Home</a></li>
          {if isset($smarty.session.USER_ID) && $smarty.session.USER_ROL<=USER}
            <!-- SE VERIFICA QUE EL USUARIO ESTE LOGEADO PARA VER EL MENU AVANZADO -->
            <li><a href="Home/Stock" class="nav-link px-2 text-white navegador">Stock</a></li>
          {/if} 
          {if isset($smarty.session.USER_ID) && $smarty.session.USER_ROL<=CLIENT}
            <!-- SE VERIFICA QUE EL USUARIO ESTE LOGEADO PARA VER EL MENU AVANZADO -->
            {* <li><a href="Home/Stock" class="nav-link px-2 text-white navegador">Stock</a></li> *}
            <li><a href="Home/Producto" class="nav-link px-2 text-white navegador">Productos</a></li>
            <li><a href="Home/TipoProducto" class="nav-link px-2 text-white navegador">Tipo Productos</a></li>
          {/if} 

          {if isset($smarty.session.USER_ROL) && $smarty.session.USER_ROL==1}
            <!-- SE VERIFICA QUE EL USUARIO SEA ADMINISTRADOR -->
            <li><a href="Home/Admin" class="nav-link px-2 text-white navegador">Panel de Adminstrador</a></li>
          {/if}

        </ul>

        <div class="text-end">
          {if isset($smarty.session.USER_ID)}
          <!-- $_SESSION['USER_ID'] -->
          <div class="d-flex align-items-baseline flex-wrap ">
            <h6 data_id="{$smarty.session.USER_ID}" id="user">({$smarty.session.USER_EMAIL})</h6>
            <a href="Logout" class="btn btn-outline-light me-2 ms-2">Cerrar Sesion</a>
          </div>

          {else}
          <a href="Login" class="btn btn-light me-2">Ingresar</a>
          <a href="SignUp" class="btn btn-primary">Sign-up</a>
          <!--   <button type="button" class="btn btn-primary">Sign-up</button> -->
          {/if}
        </div>
      </div>
    </div>
  </header>
    <!-- inicio de contenido principal -->
    <div class="container">
  