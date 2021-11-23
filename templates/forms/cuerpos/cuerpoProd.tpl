
 <div class="input-group mb-3">
 
    <label class="input-group-text alert-success" for="nombreProducto">Producto </label>
    <input name="producto" id="nombreProducto" value="{if isset($value_nombre)}{$value_nombre}{/if}" type="text" class="form-control" required>

    <label class="input-group-text alert-success" for="selectorDinamico">Producto </label>
        {include file="forms/selectDinamico.tpl"}
    
    <label class="input-group-text alert-success" for="precioProducto">Precio</label>
    <input id="precioProducto" name="precio" value="{if isset($value_precio)}{$value_precio}{/if}" type="number" min="0" class="form-control" required>

</div> 
