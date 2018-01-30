{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/tournaments.js"></script>
{/block}

{block name="content"}
    <h2 class="title">I noi tornei</h2>
    <br>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
        <div class="container">
            {foreach from=$tournaments item=tournament}
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            INSERIRE FOTO
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Torneo {$tournament->name}</h4>
                                <p class="card-text"><b>Sport:</b> {$tournament->sport}, squadre
                                    da: {$tournament->number_players}</p>
                                <p class="card-text">Si svolge presso il centro {$tournament->partner}
                                    ({$tournament->region})<br> tel. {$tournament->telnumber}. Posti disponibili
                                    (squadre): {$tournament->teamLeft}</p>
                                <p class="card-text">Inizio torneo: <b>{$tournament->startDate}</b>, iscrizioni
                                    entro: <b>{$tournament->endSubscription}</b></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            {if ($smarty.session.id != null)}
                                <form action="team.php" method="post">
                                    <input name="id" type="text" class="hidden" value="{$tournament->id}"/>
                                    <input type="submit" class="signin-button" value="Partecipa"/>
                                </form>
                            {else}
                                <p>Per iscriverti è necessario essere registrati o avere effettuato l'accesso!</p>
                            {/if}
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </section>
    <!-- /banner -->
{/block}