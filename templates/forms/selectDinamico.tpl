<select name="tipo" class="form-select" aria-label="Default select example" required>
    <option value="false" disabled selected>Seleccione tipo</option>
    
    {foreach from=$types item=item}

        {if isset($value_tipo) && ($value_tipo == $item->Tipo)}
            <option value="{$item->id}" selected="true">{$item->Tipo}</option>
        {else}
            <option value="{$item->id}">{$item->Tipo}</option>
        {/if}

    {/foreach}
    
</select>