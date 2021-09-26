{include file="html/header.tpl"}

<table class="table table-dark table-hover">
      <thead>
        <tr>


        </tr>
    </thead>
      {foreach from=$productos item=item key=key2}

        <tr>
        {foreach from=$item item=value key=key name=name}
        <td scope="col">key = {$key}</td>
        <td scope="col">value = {$value}</td>

        {/foreach}

        </tr>
    {/foreach}


  </table>


{include file="html/footer.tpl"}