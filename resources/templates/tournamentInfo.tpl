{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/tournaments.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Premi e sponsor del torneo {$tournament->name}</h2>
    <br>
    <br>
    <section>
        <div class="container">
            <br>
            <h2>Classifica premi</h2>
            {foreach from=$awards item=award}
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            INSERIRE FOTO
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Premio per il {award->place} classificato</h4>
                                <h3 class="card-title">{award->name}</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            {/foreach}
            <br>
            <hr>
            <h2>Lista sponsor</h2><br>
            {foreach from=$sponsors item=sponsor}
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            INSERIRE FOTO
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Nome sponsor: {$sponsor->name}</h4>
                                <h3 class="card-title">Tipo {$sponsor->type}</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </section>
    <!-- /banner -->
{/block}