<div class="input-group mb-3">

    <label class="input-group-text alert-success" for="nombreProducto">Producto </label>
    <input name="producto" id="nombreProducto" value="{if isset($value_nombre)}{$value_nombre}{/if}" type="text"
        class="form-control" required>

    <label class="input-group-text alert-success" for="selectorDinamico">Producto </label>
    {include file="forms/selectDinamico.tpl"}

    <label class="input-group-text alert-success" for="precioProducto">Precio</label>
    <input id="precioProducto" name="precio" value="{if isset($value_precio)}{$value_precio}{/if}" type="number" min="0"
        class="form-control" required>

</div>

{if isset($image) && isset($smarty.session.USER_ROL) && $smarty.session.USER_ROL<=USER} <div class="mb-3">
    <label for="imagesToUpload" class="form-label">Subir una imagen ilustrativa del producto || Fromatos admitidos .jpg
        .jpeg .png</label>
    <input id="imagesToUpload" name="imagesToUpload" type="file" class="form-control">
    </div>
    <input name="imagen_original" type="hidden" value="{$image}">
{if $image != IMAGE_DEFAULT}
    <div class="imagen_item">
        <img src="{$image}" alt="" class="img-fluid">
    </div>
{/if}
    


    {/if}