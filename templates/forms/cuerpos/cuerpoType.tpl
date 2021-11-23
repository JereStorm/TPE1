<div class="input-group mb-3 w-75">
    <label class="input-group-text alert-success" for="tipoProducto">Tipo Producto</label>
    <input id="tipoProducto" name="tipo" type="text" value="{if isset($value_tipo)}{$value_tipo}{/if}" class="form-control" required>
</div>

<div class="w-75">
    {* <div class="w-25"> *}
        <label for="exampleFormControlTextarea1" class="input-group-text alert-success form-label justify-content-center w-25">Desscripción</label>
    {* </div> *}
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion">{if isset($value_descripcion)}{$value_descripcion}{/if}</textarea>
</div>
