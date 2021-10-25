<div class="d-flex justify-content-center mt-5">
    <form action="VerifySignUp" class="w-50" method="POST">
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="exampleInputEmail1">e-mail </label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                placeholder="example: name@server.net.ch" aria-describedby="emailHelp" required>

        </div>
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="exampleInputPassword1">Password </label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="exampleInputPassword1">Password </label>
            <input name="re-password" type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        {if $error}
        <p>{$error}</p>
        {/if}

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="Home" class="btn alert-info mr-5 ms-5 btn-outline-info volver">Volver</a>
    </form>
</div>