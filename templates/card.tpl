
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    {foreach from=$productos item=item key=key name=name}
        <div class="col">
            <div class="card shadow-sm">

                <div class="card-body">
                    <h5 class="card-title text-center">
                    {$item->Producto}
                    </h5>
                    
                    <ul>
                        <li class="card-text">{*PRECIO POR UNIDAD*}Precio {$item->Precio}$</li>
                        <li class="card-text">{*CATEGORIA/MARCA*}Tipo: {$item->Tipo}</li>
                    </ul>

                    
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="card-text">{*STOCK*}Stock: 15</h6>
                        <div class="btn-group">
                            <a href="view/{$item->id}" class="btn btn-sm btn-secondary">View</a>
                            <button type="button" class="btn btn-sm btn-secondary">Edit</button>
                        </div>
                    </div>
                    {*<small class="text-muted">9 mins PODRIA PINTAR DATA-TIME</small>*}
                </div>
            </div>
        </div>
    {/foreach}
</div>