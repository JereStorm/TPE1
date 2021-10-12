{include file="html/header.tpl"}

{if isset($smarty.session.USER_ID)}
    {include file="forms/formAlta.tpl"}
{/if}


{if $arreglo}
    {include file="tabla.tpl"}
{/if}

{include file="html/footer.tpl"}