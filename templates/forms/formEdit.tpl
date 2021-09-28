<!-- formulario de alta de tarea -->
<form action="edit/{$URL}" method="POST" class="my-4">
    {if $URL == 'Producto'}
        {include file="forms/cuerpoProd.tpl"}
    {elseif $URL == 'TipoProducto'}
        {include file="forms/cuerpoType.tpl"}
    {/if}
</form>