{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminTournaments.js"></script>
{/block}

{block name="content"}
    {if isset($smarty.session.admin)}
        <h2 class="title">Gestione dei tornei.</h2>
        <br>
        <br>
        <section>
            <div class="container">
                Se il numero di posti disponibili è terminato è possibile creare il calendario delle partite del torneo
                facendo click sulla riga del torneo. <br>
                <hr>
                <br>
                <table id="tournamentsTable">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Sport</td>
                        <td>Giocatori per squadra</td>
                        <td>Numero squadre</td>
                        <td>Posti disponbili</td>
                        <td>Data inizio</td>
                        <td>Data fine iscrizioni</td>
                        <td>Azienda</td>
                        <td>Telefono</td>
                        <td>Partite</td>
                        <td>Sponsor</td>
                        <td>Premi</td>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$tournaments item=tournament}
                        <tr class="{if $tournament->teamLeft == 0 && $tournament->scheduled==0}pending{/if}">
                            <td>{$tournament->id}</td>
                            <td>{$tournament->tournament}</td>
                            <td>{$tournament->sport}</td>
                            <td>{$tournament->number_players}</td>
                            <td>{$tournament->teamNumber}</td>
                            <td>{$tournament->teamLeft}</td>
                            <td>{$tournament->startDate}</td>
                            <td>{$tournament->endSubscription}</td>
                            <td>{$tournament->partner}</td>
                            <td>{$tournament->telnumber}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    {/foreach}
                    </tbody>

                </table>

                <div class="row">
                    <div class="col-md-5 col-center-block">
                        <button class="signin-button" id="addTournament">Aggiungi torneo</button>
                    </div>
                </div>
            </div>
        </section>
    {elseif isset($smarty.session.moderator)}
        <h2 class="title">Gestione dei tornei azienda {$partner->name}.</h2>
        <br>
        <br>
        <section>
            <div class="container">
                Se il numero di posti disponibili è terminato è possibile creare il calendario delle partite del torneo
                facendo click sulla riga del torneo. <br>
                <hr>
                <br>
                <table id="tournamentsTable">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Sport</td>
                        <td>Giocatori per squadra</td>
                        <td>Numero squadre</td>
                        <td>Posti disponbili</td>
                        <td>Data inizio</td>
                        <td>Data fine iscrizioni</td>
                        <td>Telefono</td>
                        <td>Partite</td>
                        <td>Sponsor</td>
                        <td>Premi</td>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$tournaments item=tournament}
                        <tr class="{if $tournament->teamLeft == 0 && $tournament->scheduled==0}pending{/if}">
                            <td>{$tournament->id}</td>
                            <td>{$tournament->tournament}</td>
                            <td>{$tournament->sport}</td>
                            <td>{$tournament->number_players}</td>
                            <td>{$tournament->teamNumber}</td>
                            <td>{$tournament->teamLeft}</td>
                            <td>{$tournament->startDate}</td>
                            <td>{$tournament->endSubscription}</td>
                            <td>{$tournament->telnumber}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    {/foreach}
                    </tbody>

                </table>

                <div class="row">
                    <div class="col-md-5 col-center-block">
                        <button class="signin-button" id="addTournament">Aggiungi torneo</button>
                    </div>
                </div>
            </div>
        </section>
    {/if}
    <!-- Modal1 -->
    <div class="modal fade" id="scheduleCalendar" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Creazione calendario </h3>
                        Creazione del calendario associato al torneo in corso, attendi.....
                        <img src='public/images/loading.webp'/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="newTournament" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Inserimento nuovo torneo </h3>
                        <form id="newTournamentForm">
                            <div class="col-md-6 col-xs-6 col-center-block">
                                <ul>
                                    <li class="text">Nome torneo:</li>
                                    <li class="agileits-main">
                                        <input id="name" type="text" name="name" placeholder="Nome torneo"
                                               required/></li>
                                    <li class="text">Azienda:</li>
                                    <li class="agileits-main">
                                        <select id="selectPartner">
                                            {if isset($partners)}
                                                {foreach from=$partners item=partner}
                                                    <option value="{$partner->id}">{$partner->name}</option>
                                                {/foreach}
                                            {else}
                                                <option value="{$partner->id}">{$partner->name}</option>
                                            {/if}
                                        </select></li>
                                    <li class="text">Data inizio:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="startDate" type="text" class="date"
                                               name="startDate"
                                               placeholder="Data inizio"
                                               required/></li>
                                    <li class="text">Data fine iscrizioni:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="endSubscription" type="text" class="date"
                                               name="endSubscription"
                                               placeholder="Data termine iscrizioni"
                                               required/></li>
                                    <li class="text">Numero squadre:
                                    </li>
                                    <li class="agileits-main">
                                        <input type="number" name="teamNumber" class="form-control"
                                               value="10" disabled/></li>
                                    <li class="text">Sport:
                                    </li>
                                    <li class="agileits-main">
                                        <select id="selectSport" class="form-control">
                                            {foreach from=$sports item=sport}
                                                <option value="{$sport->id}">{$sport->name}</option>
                                            {/foreach}
                                        </select></li>
                                </ul>
                            </div>
                            <input type="submit" value="Inserisci"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}