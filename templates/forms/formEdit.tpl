<!-- formulario de alta de tarea -->
<form action="edit/{$URL}" method="POST" class="my-4">
<input type="hidden" id="identificador" value="{if isset($value_id)}{$value_id}{/if}" name="id">
    {if $URL == 'Producto'}
        {include file="forms/cuerpos/cuerpoProd.tpl"}
    {elseif $URL == 'TipoProducto'}
        {include file="forms/cuerpos/cuerpoType.tpl"}
    {elseif $URL == 'Stock'}
        {include file="forms/cuerpos/cuerpoStock.tpl"}
    {/if}
    
<button type="submit" class="btn btn-primary mt-2">Editar</button>
</form>