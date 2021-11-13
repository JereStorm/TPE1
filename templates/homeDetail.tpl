{* SETEO DE VARIABLES QUE CONDICIONAN LA VISTA EN FUNCION DEL STOCK*}

{if $producto->stock != "Agotado"}
    {$type = "submit"}
    {$class_type = "alert-success btn-outline-success"}
    {$class_type_title = "alert-success"}
    {$active = "required"}
{else}
    {$type = "button"}
    {$class_type = "alert-secondary"}
    {$class_type_title = "alert-secondary"}
    {$active = "disabled"}
{/if}

{* FORMULARIO *}

{include file="html/header.tpl"}
<div class="d-flex justify-content-center mt-5">
    <form action="Buy/{$producto->id}" method="POST" class="w-50">
        
        <input id="id_prod" type="hidden" value="{$producto->id}">

        <h5 class="card-header text-center {$class_type_title}">
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
        {if isset($smarty.session.USER_ID)}
            <button type="{$type}" class="btn {$class_type} mr-5">Comprar</button> 
            <input class="form-control w-25 ms-5" name="cantidad" placeholder="Unidades" type="number" min="1" max="{$producto->stock}" {$active}>
        {else}
            <button type="{$type}" class="btn {$class_type} mr-5">Comprar</button>
        {/if}
            <a href="Home" class="btn alert-info mr-5 ms-5 btn-outline-info volver" >Volver</a> 
        </div>
    
    </form>
</div>

{include file="vue/coments.tpl"}
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="js/main.js"></script>
{include file="html/footer.tpl"}