{include file="html/header.tpl"}

{* <h1>Preparado para el exito?</h1> *}
<div class="buscador mt-5">
      {include file="forms/formSearch.tpl"}
    </div>

{include file="forms/formFilter.tpl"}

{include file="card.tpl"}

<div>
  {if (isset($pages))}
    {for $page=1 to $pages}
      <span>   -    <a href="Home?pagina={$page}">{$page}</a>   -  </span>
    {/for}
  {/if}
<div>

{include file="html/footer.tpl"}