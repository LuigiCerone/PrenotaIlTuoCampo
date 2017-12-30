{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/partners.js"></script>
{/block}

{block name="content"}
    this is my new content
    <br>
    {$partners->partners|json_encode}
    <br>
    {foreach from=$partners->partners item=partner}
        <p>Nome: {$partner->name}</p>
        <p>Numero: {$partner->number}</p>
    {/foreach}
    <!-- /banner -->
{/block}