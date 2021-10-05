{* SETEO DE VARIABLES QUE CONDICIONAN LA VISTA EN FUNCION DEL STOCK*}

{if $producto->stock != "Agotado"}
    {$type = "submit"}
    {$class_type = "alert-success"}
    {$active = "required"}
{else}
    {$type = "button"}
    {$class_type = "alert-secondary"}
    {$active = "disabled"}
{/if}

{* FORMULARIO *}

{include file="html/header.tpl"}
<div class="d-flex justify-content-center mt-5">
    <form action="Buy/{$producto->id}" method="POST" class="w-50">
            
        <h5 class="card-header text-center alert-success">
        {$producto->Nombre}
        </h5>
        
        <ul>
            <li class="card-text">{*PRECIO POR UNIDAD*}Precio {$producto->Precio}$</li>
            <li class="card-text">{*CATEGORIA/MARCA*}Tipo: {$producto->Tipo}</li>
        </ul>

        <div class="card-footer">
                <h6 class="card-text">{*STOCK*}Stock: {$producto->stock}</h6>
            {*<small class="text-muted">9 mins PODRIA PINTAR DATA-TIME</small>*}
        </div>
    
        <div class="mt-5 d-flex justify-content-center">
                <button type="{$type}" class="btn {$class_type} mr-5">Comprar</button>
                <input class="form-control w-25 ms-5" name="cantidad" value="{$value_precio}" placeholder="Unidades" type="number" min="1" max="{$producto->stock}" {$active}>
                <div class="btn alert-info mr-5 ms-5"><a href="Home" class="volver" >Volver</a></div>
        </div>
    
    </form>
    
</div>
{include file="html/footer.tpl"}