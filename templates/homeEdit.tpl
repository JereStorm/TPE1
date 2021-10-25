{include file="html/header.tpl"}

{if isset($smarty.session.USER_ID) && $smarty.session.USER_ROL<=USER}
{include file="forms/formEdit.tpl"}
{/if}

{include file="html/footer.tpl"}