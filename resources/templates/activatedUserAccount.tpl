{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
{/block}

{block name="content"}
    <h2 class="title">Registrazione effettuata con successo!</h2>
    {*{$partners->partners|json_encode}*}
    <br>
    <div class="container">
        <div class="row">
            Grazie per esserti iscritto al nostro sito!
            Effettua il login per entrare nella nostra piattaforma!
        </div>
    </div>
    <!-- /banner -->
{/block}