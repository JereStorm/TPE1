<!-- formulario de alta de tarea -->
<div class="ms-25 mt 5 ml-25">
    <form action="edit/{$URL}" method="POST" class="my-4" enctype="multipart/form-data">
        <input type="hidden" id="identificador" value="{if isset($value_id)}{$value_id}{/if}" name="id">
            {if $URL == 'Producto'}
                {include file="forms/cuerpos/cuerpoProd.tpl"}
            {elseif $URL == 'TipoProducto'}
                {include file="forms/cuerpos/cuerpoType.tpl"}
            {elseif $URL == 'Stock'}
                {include file="forms/cuerpos/cuerpoStock.tpl"}
            {elseif $URL == 'Admin'}
                {include file="forms/cuerpos/cuerpoUser.tpl"}
            {/if}
            
        <button type="submit" class="btn btn-primary mt-2">Editar</button>
        <a href="Home/{$URL}" class="btn alert-info ms-5 mt-2">Volver</a>
    </form>
</div>