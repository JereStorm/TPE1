{include file="html/header.tpl"}


<h1>Ya casi estamos ;)</h1>

<div class="col">
            <div class="card shadow-sm">

                <div class="card-body">
                    <h5 class="card-title text-center">
                    {$producto->Nombre}
                    </h5>
                    
                    <ul>
                        <li class="card-text">{*PRECIO POR UNIDAD*}Precio {$producto->Precio}$</li>
                        <li class="card-text">{*CATEGORIA/MARCA*}Tipo: {$producto->Tipo}</li>
                    </ul>

                    
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="card-text">{*STOCK*}Stock: 15</h6>
                       
                    </div>
                    {*<small class="text-muted">9 mins PODRIA PINTAR DATA-TIME</small>*}
                </div>
            </div>
        </div>


{include file="html/footer.tpl"}