    <div class="input-group mb-3">
        <label class="input-group-text alert-success" for="inputGroupSelect01">Producto</label>
        <select name="producto" class="form-select" id="inputGroupSelect01">
          <option selected disabled selected>Seleccione un Producto</option>
          
          {foreach from=$types item=item}

              {if ($value_tipo == $item->id)}
                  <option value="{$item->id}" selected="true">{$item->nombre}</option>
              {else}
                  <option value="{$item->id}">{$item->nombre}</option>
              {/if}

          {/foreach}

        </select>
        <label class="input-group-text alert-success" for="inputGroupSelect01">Cantidad</label>
        <input name="cantidad" type="number" min="0" class="form-control" required>
        <button class="btn btn-primary btn-outline" type="submit" >Agregar a Stock</button>
      </div>
