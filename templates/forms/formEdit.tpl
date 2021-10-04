<!-- formulario de alta de tarea -->
<form action="edit/{$URL}" method="POST" class="my-4">
<input type="hidden" id="identificador" value="{$value_id}" name="id">
    {if $URL == 'Producto'}
        {include file="forms/cuerpoProd.tpl"}
    {elseif $URL == 'TipoProducto'}
        {include file="forms/cuerpoType.tpl"}
    {elseif $URL == 'Stock'}
        {include file="forms/cuerpoStock.tpl"}
    {/if}
</form>