<div class="caja">
{if isset($coments)}
    {foreach from=$coments item=coment} 
        <div class="card mt-1">
            <div class="card-body">
                <p class="card-text">- {$coment->mensaje}</p>
            </div>
        </div>
    {/foreach}
{else}
    <p>- Hola mundo</p>
    <p>- Hola mundo</p>
    <p>- Hola mundo</p>
    <p>- Hola mundo</p>
    <p>- Hola mundo</p>
{/if}
</div>