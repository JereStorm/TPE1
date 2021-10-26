{include file="html/header.tpl"}

{if isset($smarty.session.USER_ROL) && $smarty.session.USER_ROL<=USER && !isset($userSegment)}

    {include file="forms/formAlta.tpl"}

{/if}


{if $arreglo}
    {include file="tabla.tpl"}
{/if}

{include file="html/footer.tpl"}