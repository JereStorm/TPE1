<!DOCTYPE html>
<html lang="es">

<head>
    <base href="{$base}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@900&display=swap" rel="stylesheet">

</head>

<body>
<header class="p-3 text-white ">
    <div class="container">
      <div class="header">
        <a href="Home" class="titulo ">
          TPE Tomi-Jere
        </a>
        <ul class="nav col-12 gap-3 col-lg-auto me-lg-auto justify-content-center mb-md-0 ">
          <li><a href="Home" class="btn btn-outline-light px-2">Home</a></li>
          {if isset($smarty.session.USER_ID) && $smarty.session.USER_ROL<=USER}
            <!-- SE VERIFICA QUE EL USUARIO ESTE LOGEADO PARA VER EL MENU AVANZADO -->
            <li><a href="Home/Stock" class="btn btn-outline-light px-2">Stock</a></li>
          {/if} 
          {if isset($smarty.session.USER_ID) && $smarty.session.USER_ROL<=CLIENT}
            <!-- SE VERIFICA QUE EL USUARIO ESTE LOGEADO PARA VER EL MENU AVANZADO -->
            {* <li><a href="Home/Stock" class="nav-link px-2 text-white navegador">Stock</a></li> *}
            <li><a href="Home/Producto" class="btn btn-outline-light px-2">Productos</a></li>
            <li><a href="Home/TipoProducto" class="btn btn-outline-light px-2">Tipo Productos</a></li>
          {/if} 

          {if isset($smarty.session.USER_ROL) && $smarty.session.USER_ROL==1}
            <!-- SE VERIFICA QUE EL USUARIO SEA ADMINISTRADOR -->
            <li><a href="Home/Admin" class="btn btn-outline-light px-2">Panel de Adminstrador</a></li>
          {/if}

        </ul>

        <div class="text-end">
          {if isset($smarty.session.USER_ID)}
          <!-- $_SESSION['USER_ID'] -->
          <div class="sesion">
            <h6 data_id="{$smarty.session.USER_ID}" id="user">({$smarty.session.USER_EMAIL})</h6>
            <a href="Logout" class="btn-outline-danger btn me-2 ms-2">Cerrar Sesion</a>
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
  