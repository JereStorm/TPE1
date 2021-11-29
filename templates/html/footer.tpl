</div>
<footer class="py-3 my-4">
  <ul class="nav col-12 gap-3 col-lg-auto me-lg-auto justify-content-center mb-md-0 ">
    <li><a href="Home" class="btn btn-outline-light px-2">Home</a></li>
    {if isset($smarty.session.USER_ID) && $smarty.session.USER_ROL<=USER} <!-- SE VERIFICA QUE EL USUARIO ESTE LOGEADO
      PARA VER EL MENU AVANZADO -->
      <li><a href="Home/Stock" class="btn btn-outline-light px-2">Stock</a></li>
      {/if}
      {if isset($smarty.session.USER_ID) && $smarty.session.USER_ROL<=CLIENT} <!-- SE VERIFICA QUE EL USUARIO ESTE
        LOGEADO PARA VER EL MENU AVANZADO -->
        {* <li><a href="Home/Stock" class="nav-link px-2 text-white navegador">Stock</a></li> *}
        <li><a href="Home/Producto" class="btn btn-outline-light px-2">Productos</a></li>
        <li><a href="Home/TipoProducto" class="btn btn-outline-light px-2">Tipo Productos</a></li>
        {/if}

        {if isset($smarty.session.USER_ROL) && $smarty.session.USER_ROL==1}
        <!-- SE VERIFICA QUE EL USUARIO SEA ADMINISTRADOR -->
        <li><a href="Home/Admin" class="btn btn-outline-light px-2">Panel de Adminstrador</a></li>
        {/if}

  </ul>
  <br>
  <p class="text-center text-muted">© 2021 Jeremias Storm and Tomas Congliatti, Inc</p>
</footer>
<!-- fin del contenido principal -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>