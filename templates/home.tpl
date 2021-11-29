{include file="html/header.tpl"}

{* <h1>Preparado para el exito?</h1> *}
<div class="buscador mt-5">
  {include file="forms/formSearch.tpl"}
</div>

{include file="forms/formFilter.tpl"}

{include file="card.tpl"}
<div class="paginacion d-inline">
  <span class="btn btn-dark">Paginas: </span>
  <div class=" btn-group" role="group">

    {if (isset($pages))}
    {for $page=1 to $pages}
    <span><a class="btn btn-dark" href="Home?pagina={$page}">{$page}</a></span>

    {/for}
    {/if}
  </div>
</div>



{include file="html/footer.tpl"}