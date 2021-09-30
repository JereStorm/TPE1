<!-- formulario de alta de tarea -->
<form action="add/{$URL}" method="POST" class="my-4">
    {if $URL == 'Producto'}
        {include file="forms/cuerpos/cuerpoProd.tpl"}
    {elseif $URL == 'TipoProducto'}
        {include file="forms/cuerpos/cuerpoType.tpl"}
    {/if}
</form>