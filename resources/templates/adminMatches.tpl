{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/datatables.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/datatables.min.js"></script>
    <script src="public/js/projectScript/adminMatches.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Gestione delle partite associate ad un torneo.</h2>
    <br>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
        <div class="container">
            Informazioni relative al torneo {$tournament->name}. Fare click sulla roga della tabella per modificare.
            <br>
            <hr>
            <br>
            <table id="matchesTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Giornata</td>
                    <td>Squadra casa</td>
                    <td>Squadra ospite</td>
                    <td>Data</td>
                    <td>Ora</td>
                    <td>Campo</td>
                    <td>Risultato</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$matches item=match}
                <tr class="{if $tournament->teamLeft == 0 && $tournament->scheduled==0}pending{/if}">
                    <td>{$match->id}</td>
                    <td>{$match->day + 1}</td>
                    <td>{$match->first_team}</td>
                    <td>{$match->second_team}</td>
                    <td>{$match->date}</td>
                    <td>{$match->time}</td>
                    <td>{$match->field}</td>
                    <td>{$match->result}</td>
                </tr>
                </tbody>
                {/foreach}
            </table>
        </div>
    </section>
    <!-- Modal1 -->
    <div class="modal fade" id="modifyMatch" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Modifica dati partita </h3>
                        INSERIRE INPUT OER DATA, ORA , RISULTATO.
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="save" type="button" class="btn btn-primary">Salva</button>
                    <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                    </button>
                </div>
            </div>
        </div>
    </div>
{/block}