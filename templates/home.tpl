{include file="header.tpl"}
{include file="ourhome.tpl"}
{include file="homev.tpl"}
{if (isset($smarty.session.User))}
{include file="addCategoria.tpl"}
{include file="addProducto.tpl"}
{/if}
{include file="footer.tpl"}
