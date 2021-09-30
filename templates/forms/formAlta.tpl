<!-- formulario de alta de tarea -->
<form action="add/{$URL}" method="POST" class="my-4">
    {if $URL == 'Producto'}
        {include file="forms/cuerpoProd.tpl"}
    {elseif $URL == 'TipoProducto'}
        {include file="forms/cuerpoType.tpl"}
    {elseif $URL == 'Stock'}
        {include file="forms/cuerpoStock.tpl"}
    {/if}
</form>