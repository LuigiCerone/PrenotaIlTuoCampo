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
    {foreach from=$partners->partners item=partner}
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Centro sportivo {$partner->name}</h4>
                                <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam
                                    efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat
                                    imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                                <p class="card-text">Vieni a trovarci o chiamaci al {$partner->number}</p>
                                <a href="#" class="btn btn-primary">Read More (serve?)</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-img-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {/foreach}
    <!-- /banner -->
{/block}