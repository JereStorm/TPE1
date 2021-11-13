    <div class="input-group mb-3">

    {if ($value_precio=='')}
            <label class="input-group-text alert-success" for="inputGroupSelect01">Producto</label>
            <select name="producto" class="form-select" id="inputGroupSelect01">
                <option disabled selected>Seleccione un Producto</option>
          
            {foreach from=$types item=item}

                {if ($value_tipo == $item->id)}
                    <option value="{$item->id}" selected="true">{$item->Nombre}</option>
                {else}
                    <option value="{$item->id}">{$item->Nombre}</option>
                {/if}

            {/foreach}
            </select>
    {else}

        <label class="input-group-text alert-secondary" for="sarasa">Producto</label>
        <select  name="producto" class="form-select" id="sarasa">
            {foreach from=$types item=item}

            {if ($value_tipo == $item->id)}
                <option value="{$value_nombre}" selected="true">{$item->Nombre}</option>
            {/if}

        {/foreach}
        </select>
    {/if}
        
       
         
        <label class="input-group-text alert-success" for="sarasa">Cantidad</label>
        <input name="cantidad" value="{$value_precio}" id="sarasa" type="number" min="0" class="form-control" required>

      </div>
