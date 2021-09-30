
<table class="table table-dark table-hover mt-5">
      <thead>
        <tr class="text-center">
            <th>#</th>
        {if $productos}
                {foreach from=$productos[0] item=item key=indice }
                                
                    {if $indice == 'id'}
                        <th>Acciones</td>
                    {else}
                        <th>{$indice}</th>
                    {/if}
                    
                {/foreach}
            {else}
                <th>Producto</th>
                <th>Precio</th>
                <th>Tipo</th>
                
        {/if}
            
        
        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=item key=indice }
            <tr class="text-center">
                <th>{$indice}</th>

                {foreach from=$item item=value key=key}
                    {if $key == 'id'}
                        <td scope="col" >
                            <div class="botonera">
                                <a class="btn btn-danger btn-js"  href="del/{$URL}/{$value}">Borrar</a>
                                <a class="btn btn-warning btn-js"  href="HomeEdit/{$URL}/{$value}">Editar</a>
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

