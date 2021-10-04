<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Producto
                <input name="producto" value="{if isset($value_nombre)}{$value_nombre}{/if}" type="text" class="form-control" required>
            </label>
        </div>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-9">
        <div class="form-group">
        {* ACA PODEMOS CREAR UN SELECT DINAMICO CON LA TABLA TIPO *}
            {include file="forms/selectDinamico.tpl"}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-9">
        <div class="form-group">
            <label>Precio</label>
            <input name="precio" value="{if isset($value_precio)}{$value_precio}{/if}" type="number" min="0" class="form-control" required>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary mt-2">Guardar</button>