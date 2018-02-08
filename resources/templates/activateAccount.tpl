{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
{/block}

{block name="content"}
    <h2 class="title">Ultimo passo, attiva l'account!</h2>
    {*{$partners->partners|json_encode}*}
    <br>
    <div class="container">
        <div class="row">
            Per iniziare ad utilizzare il sito è necessario cliccare sul link di conferma presente nell'email che ti è
            appena stata mandata!
        </div>
    </div>
    <!-- /banner -->
{/block}