
<table class="table table-dark table-hover mt-5">
      <thead>
        <tr>
            <th>#</th>

            {foreach from=$productos[0] item=item key=indice }
                
                {if $indice == 'id'}
                    <th>Acciones</td>
                {else}
                    <th>{$indice}</th>
                {/if}
                
            {/foreach}
        
        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=item key=indice }
            <tr>
                <th>{$indice}</th>

                {foreach from=$item item=value key=key}
                    {if $key == 'id'}
                        <td scope="col">
                            <div class="botonera">
                                <a class="btn btn-danger btn-js"  href="delProduct/{$value}">Borrar</a>
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

