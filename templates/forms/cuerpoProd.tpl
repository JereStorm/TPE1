<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Producto
                <input name="producto" value="{$value_nombre}" type="text" class="form-control" required>
            </label>
        </div>
    </div>
</div>
<div class="row mt-3 mb-3">
    <div class="col-9">
        <div class="form-group">

            <select name="tipo" class="form-select" aria-label="Default select example" required>
                    <option value="false">Seleccione tipo</option>
                    {* ACA PODEMOS CREAR UN SELECT DINAMICO CON LA TABLA TIPO *}
                    {foreach from=$types item=item}

                        {if ($value_tipo == $item->Tipo)}
                            <option value="{$item->id}" selected="true">{$item->Tipo}</option>
                        {else}
                            <option value="{$item->id}">{$item->Tipo}</option>
                        {/if}

                    {/foreach}
            </select>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Precio</label>
            <input name="precio" value="{$value_precio}" type="text" class="form-control" required>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary mt-2">Guardar</button>