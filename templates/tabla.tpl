
<table class="table table-dark table-hover mt-5">
      <thead>
        <tr class="text-center">
            <th>#</th>
       
            {foreach from=$arreglo[0] item=item key=indice }
                            
                {if $indice == 'id'}
                    <th>Acciones</td>
                {else}
                    <th>{$indice}</th>
                {/if}
                
            {/foreach}
            
        </tr>
    </thead>
    <tbody>
        {foreach from=$arreglo item=item key=indice }
            <tr class="text-center">
                <th>{$indice}</th>

                {foreach from=$item item=value key=key}
                    {if $key == 'id'}{* ACA PODRIAMOS PREGUNTAR POR LA SESSION SI ESTA ACTIVA *}
                        <td scope="col" >
                            <div class="botonera">
                                <a class="btn btn-outline-danger btn-js"  href="del/{$URL}/{$value}">Borrar</a>
                                <a class="btn btn-outline-warning btn-js"  href="HomeEdit/{$URL}/{$value}">Editar</a>
                               {if $URL == 'Producto'}
                                <a class="btn btn-outline-info btn-js"  href="Details/{$value}">Ver</a>
                                {/if} 
                            </div>
                        </td>
                    {else}
                        <td scope="col">{$value}</td>
                    {/if}
                    
                {/foreach}
                
            </tr>
        {/foreach}
    </tbody>

  </table>

