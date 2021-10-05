
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
    {foreach from=$productos item=item key=key name=name}
        <div class="col">
            <div class="card shadow-sm">

                <div class="card-body">
                    <h5 class="card-title text-center">
                    {$item->Nombre}
                    </h5>
                    
                    <ul>
                        <li class="card-text">{*PRECIO POR UNIDAD*}Precio {$item->Precio}$</li>
                        <li class="card-text">{*CATEGORIA/MARCA*}Tipo: {$item->Tipo}</li>
                    </ul>

                    
                </div>
                {if $item->stock == false}
                <div class="card-footer bg-danger">
                
                    <div class="d-flex justify-content-between  align-items-center">
                        <h6 class="card-text">{*STOCK*}Stock: No Disponible</h6>
                        <div class="btn-group">
                            <a href="Details/{$item->id}" class="btn btn-sm btn-outline-dark">View</a>
                        </div>
                    </div>
                    {else}
                <div class="card-footer bg-success">

                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="card-text">{*STOCK*}Stock: {$item->stock}</h6>
                        <div class="btn-group">
                            <a href="Details/{$item->id}" class="btn btn-sm btn-outline-dark">View</a>
                        </div>
                    </div>


                {/if}
                    {*<small class="text-muted">9 mins PODRIA PINTAR DATA-TIME</small>*}
                </div>
            </div>
        </div>
    {/foreach}
</div>