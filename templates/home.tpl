{include file="header.tpl"}
{include file="ourhome.tpl"}
{include file="homev.tpl"}
{if (isset($smarty.session.User))}
{include file="addProducto.tpl"}
{include file="addCategoria.tpl"}
{include file="addCategoriaView.tpl"}
{/if}
{include file="footer.tpl"}
