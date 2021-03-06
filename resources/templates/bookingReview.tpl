{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/datatables.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/datatables.min.js"></script>
    <script src="public/js/projectScript/bookingReview.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Conferma prenotazione</h2>
    <br>
    <div class="container">
        <h4><b>Riepilogo dati inseriti</b></h4>
        <table id="bookingData" class="user-info">
            <tr>
                <td>Sport selezionato:</td>
                <td> {$booking->sport}</td>
            </tr>
            <tr>
                <td>Centro selezionato:</td>
                <td> {$booking->partner}</td>
            </tr>
            <tr>
                <td>Data selezionata:</td>
                <td id="date"> {$booking->date}</td>
            </tr>
            <tr>
                <td>Ora selezionata:</td>
                <td id="time"> {$booking->time}</td>
            </tr>
            <tr>
                <td>Provincia:</td>
                <td> {$booking->province} <b>({$booking->selectedProvince})</b>
                </td>
            </tr>
            <tr class="hidden">
                <td id="selectedSport">{$booking->selectedSport}</td>
                <td id="selectedPartner">{$booking->selectedPartner}</td>
            </tr>
        </table>
        <br>
        <hr>
        Non raggiungi la quota necessaria?
        <a id="openFinder" data-toggle="modal" href="#findPlayers">Clicca qui se hai bisogno di altri giocatori!</a>
        <hr>
        {if isset($supplies)}
            La struttura selezionata mette a dispozione per i clienti:
            <ul>
                {foreach from=$supplies item=supply}
                    <li><b>Nome:</b>{$supply->name}{if isset($supply->description)} ,
                            <b>Descrizione:</b>
                            {$supply->description}{/if}</li>
                {/foreach}
            </ul>
            <hr>
        {/if}
        {if isset($fields)}
            Nel giorno e nella data selezionata la struttura dispone dei seguenti campi:
            <form id="fieldSelect">
                {foreach from=$fields item=field}
                    <div class="radio">
                        <label><input type="radio" name="field_radio" required
                                      value="{$field->id}"/>Numero: {$field->number}, tipo: {$field->type},
                            esterno: {if $field->outdoor == 1}Si {else}No {/if},
                            riscaldato: {if $field->warmed == 1}Si {else}No {/if}</label>
                    </div>
                {/foreach}
                {if ($smarty.session.id != null)}
                <div class="agile-submit">
                    <input type="submit" id="submit" value="Conferma"/>
                </div>

                {else}
                <div class="agile-submit disabled">
                    <input disabled type="submit" id="submit" value="Conferma" data-toggle="tooltip"
                           title="Accedi o registrati!"/>
                    <br>
                    Ricorda che per effetturare la prenotazione devi essere registrato!
                    {/if}
                </div>
            </form>
        {else}
            Nella data e nell'ora selezionare la struttura non dispone di campi! Ci scusiamo e ti invitiamo a cambiare dati!
        {/if}

    </div>
    <!-- Modal -->
    <div class="modal fade" id="findPlayers" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Cerca giocatori</h3>
                    In questa pagina può contattare altri giocatori per unirsi alla tua squadra!
                    <br><br>
                    Di seguito una lista con tutte le persone che si sono offerte disponibili
                    per giocare a {$booking->sport} il {$booking->date} alle ore {$booking->time}
                    presso {$booking->partner}:<br><br>
                    <span id="error"></span>
                    <br>
                    <table id="findPlayerTable">
                    </table>
                    <div class="modal-footer">
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The actual snackbar -->
    <div id="snackbar">Hai invitato questo giocatore!</div>
{/block}