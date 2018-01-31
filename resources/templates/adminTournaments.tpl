{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/datatables.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/datatables.min.js"></script>
    <script src="public/js/projectScript/adminTournaments.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Gestione dei tornei.</h2>
    <br>
    {*{$partners->partners|json_encode}*}
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
                </tr>
                </thead>
                <tbody>
                {foreach from=$tournaments item=tournament}
                <tr class="{if $tournament->teamLeft == 0}pending{/if}">
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
                </tr>
                </tbody>
                {/foreach}
            </table>
        </div>
    </section>
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="accept" type="button" class="btn btn-primary">Accetta</button>
                    <button id="decline" type="button" class="btn btn-secondary" data-dismiss="modal">Rifiuta
                    </button>
                </div>
            </div>
        </div>
    </div>
{/block}