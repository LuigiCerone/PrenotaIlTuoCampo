{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/tournaments.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Premi e sponsor del torneo {$tournament->name}</h2>
    <br>
    <section>
        <div class="container">
            <h2>Classifica premi</h2>
            <br>
            {foreach from=$awards item=award}
                <div class="card">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img_award" src="public/images/t.png" alt="Immagine dimostrativa"/>
                        </div>
                        <div class="col-md-4">
                            <div class="card-block">
                                <h4 class="card-title">Premio per il <b>{$award->place}&deg;</b> classificato</h4>
                                <h3 class="card-title">{$award->name}</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <hr>
                </div>
            {/foreach}
            <br>
            <hr>
            <h2>Lista sponsor</h2><br>
            {foreach from=$sponsors item=sponsor}
                <div class="card">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img_sponsor" src="public/images/sponsor.png" alt="Immagine dimostrativa"/>
                        </div>
                        <div class="col-md-4">
                            <div class="card-block">
                                <h4 class="card-title">Nome sponsor: {$sponsor->name}</h4>
                                <h3 class="card-title">Tipo {$sponsor->type}</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
                <hr>
            {/foreach}
        </div>
    </section>
    <!-- /banner -->
{/block}