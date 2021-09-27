
<table class="table table-dark table-hover mt-5">
      <thead>
      <tr>
        <th>#</th>
        {foreach from=$productos[0] item=item key=indice }
            
            <th>{$indice}</th>
            
        {/foreach}
        </tr>
    </thead>
    <tbody>
        {foreach from=$productos item=item key=indice }
            <tr>
                <th>{$indice}</th>
                {foreach from=$item item=value key=key}
                <td scope="col">{$value}</td>
                {/foreach}
            </tr>
        {/foreach}
    </tbody>

  </table>

