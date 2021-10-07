<!-- formulario de alta de tarea -->
<form action="add/{$URL}" method="POST" class="my-4">
    {if $URL == 'Producto'}
        {include file="forms/cuerpos/cuerpoProd.tpl"}
    {elseif $URL == 'TipoProducto'}
        {include file="forms/cuerpos/cuerpoType.tpl"}
    {elseif $URL == 'Stock'}
        {include file="forms/cuerpos/cuerpoStock.tpl"}
    {/if}
    
<button type="submit" class="btn btn-primary mt-2">Agregar</button>

</form>