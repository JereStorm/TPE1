<div class="d-flex justify-content-center mt-5">
    <form action="Verify" class="w-50" method="POST">
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="exampleInputEmail1">e-mail </label>
            <!--<label for="exampleInputEmail1" class="form-label">Email address</label>-->
            <input name="email" type="email" value="admin@admin.com" class="form-control" id="exampleInputEmail1"
                placeholder="(admin@admin.com)" aria-describedby="emailHelp">

        </div>
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="exampleInputPassword1">Password </label>
            <input name="password" type="password" value="admin" placeholder="(admin)" class="form-control"
                id="exampleInputPassword1">
        </div>

        {if $error}
        <p>{$error}</p>
        {/if}

        <button type="submit" class="btn btn-primary">Ingresar</button>
        <a href="Home" class="btn alert-info mr-5 ms-5 btn-outline-info volver">Volver</a>
    </form>
</div>