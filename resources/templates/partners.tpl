{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/partners.js"></script>
{/block}

{block name="content"}
    <h2 class="title">I nostri principali partners.</h2>
    <br>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
        <div class="container">
            {foreach from=$partners item=partner}
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Centro sportivo {$partner->name}</h4>
                                <p class="card-text">{$partner->description}</p>
                                <p class="card-text">Vieni a trovarci o chiamaci al {$partner->telnumber}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-img-bottom">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            {/foreach}
        </div>
    </section>
    <!-- /banner -->
{/block}