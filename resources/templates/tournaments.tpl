{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/tournaments.js"></script>
{/block}

{block name="content"}
    <h2 class="title">I nostri tornei</h2>
    <br>
    <br>
    <section>
        <div class="container">
            {foreach from=$tournaments item=tournament}
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img_tournament" src="public/images/tournament.jpg" alt="Immagine dimostrativa"/>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Torneo {$tournament->tournament}</h4>
                                <p class="card-text"><b>Sport:</b> {$tournament->sport}, squadre
                                    da: {$tournament->number_players}</p>
                                <p class="card-text">Si svolge presso il centro {$tournament->partner}
                                    ({$tournament->region})<br> tel. {$tournament->telnumber}. Posti disponibili
                                    (squadre): {$tournament->teamLeft}</p>
                                <p class="card-text">Inizio torneo: <b>{$tournament->startDate}</b>, iscrizioni
                                    entro: <b>{$tournament->endSubscription}</b></p>
                                <p class="card-text"><a href="tournamentInfo.php?t={$tournament->id}">Clicca qui per
                                        visualizzare premi e sponsor di questo torneo</a></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            {if isset($smarty.session.id) && $tournament->teamLeft > 0}
                                <form action="team.php" method="post">
                                    <input name="id" type="text" class="hidden" value="{$tournament->id}"/>
                                    <input type="submit" class="signin-button" value="Partecipa"/>
                                </form>
                            {elseif $tournament->teamLeft == 0}
                                <h3 class="text-center"> Posti esauriti</h3>
                            {else}
                                <p>Per iscriverti è necessario essere registrati o avere effettuato l'accesso!</p>
                            {/if}
                        </div>
                    </div>
                </div>
                <hr>
                <br>
            {/foreach}
        </div>
    </section>
    <!-- /banner -->
{/block}