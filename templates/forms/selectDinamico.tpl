<select name="tipo" class="form-select" aria-label="Default select example" id="selectorDinamico" required>
    <option value="false" disabled selected>Todos</option>
    
    {foreach from=$types item=item}

        {if isset($value_tipo) && ($value_tipo == $item->Tipo)}
            <option value="{$item->id}" selected="true">{$item->Tipo}</option>
        {else}
            <option value="{$item->id}">{$item->Tipo}</option>
        {/if}

    {/foreach}
    
</select>