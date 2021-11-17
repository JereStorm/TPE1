
        <h4>Usuario</h4>
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="exampleInputEmail1">e-mail </label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                placeholder="example: name@server.net.ch" aria-describedby="emailHelp" 
                value="{$value_nombre}" required>

        </div>
        <h4>Blanqueo de Passoword</h4>
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="pass1">Password </label>
            <input name="password" type="text" class="form-control" id="pass1">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="pass2">Re Password </label>
            <input name="password2" type="text" class="form-control" id="pass2">
        </div>
        
         {if isset($error) }
             <p class="alert alert-danger mt-5">{$error}</p>
        {/if} 
        <h4>Nivel de Autorización</h4>
         <div class="input-group mb-3">
            <label class="input-group-text alert-success" for="exampleInputPassword1">Rol de Usuario </label>
            <select name="rol" class="form-select" id="inputGroupSelect01">
                <option disabled>Seleccione Rol de Usuario</option>
                <option value="1" {if $types == ADMIN } selected {/if}>Administrador</option>
                <option value="3" {if $types == USER } selected {/if}>Usuario</option>
                <option value="5" {if $types == CLIENT } selected {/if}>Cliente</option>
            </select>
        </div>
