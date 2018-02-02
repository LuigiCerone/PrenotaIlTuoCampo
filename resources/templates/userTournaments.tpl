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
            Seleziona una delle squadre di cui risulti essere il capitano per accedere alle informazioni del
            relativo torneo

            {foreach from=$teams item=team}
                <form action="tournamentTeamPage.php" method="post" id="displayInfo">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                INSERIRE FOTO
                            </div>
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title">Squadra {$team->name}</h4>
                                    <p class="card-text"><b>Numero squadra:</b> {$team->number}</p>
                                    <p class="card-text">Giocatori:{$team->players}</p>
                                    <p class="card-text">Iscritta al torneo {$team->tournamentName}</p>
                                    <input name="team" id="team" type="text" class="hidden" value="{$team->id}"/>
                                    <input name="tournament" id="tournament" type="text" class="hidden"
                                           value="{$team->tournament}"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="submit" class="signin-button" value="Vai"/>
                            </div>
                        </div>
                    </div>
                </form>
            {/foreach}
        </div>
    </section>
{/block}