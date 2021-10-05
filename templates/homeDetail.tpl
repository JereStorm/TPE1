{include file="html/header.tpl"}
<div class="d-flex justify-content-center">
    <form action="Comprar" method="POST" class="mt-5 w-50">

        <div class="card-body">
            <h5 class="card-header text-center">
            {$producto->Nombre}
            </h5>
            
            <ul>
                <li class="card-text">{*PRECIO POR UNIDAD*}Precio {$producto->Precio}$</li>
                <li class="card-text">{*CATEGORIA/MARCA*}Tipo: {$producto->Tipo}</li>
            </ul>

        </div>
        <div class="card-footer">
                <h6 class="card-text">{*STOCK*}Stock: {$producto->stock}</h6>
            {*<small class="text-muted">9 mins PODRIA PINTAR DATA-TIME</small>*}
        </div>
    
        <div class="mt-5 d-flex justify-content-center">
            {if $producto->stock != "Agotado"}
                <button type="submit" class="btn alert-success mr-5">Comprar</button>
                <input class="form-control w-25 ms-5" name="cantidad" value="{$value_precio}" placeholder="Unidades" type="number" min="0" max="{$producto->stock}" required>
            {else}
                <button type="button" class="btn alert-secondary mr-5">Comprar</button>
                <input class="form-control w-25 ms-5" name="cantidad" value="{$value_precio}" placeholder="Unidades" type="number" min="0" max="{$producto->stock}" disabled>
            {/if}
        </div>

    </form>
</div>

{include file="html/footer.tpl"}