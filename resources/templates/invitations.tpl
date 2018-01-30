{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/datatables.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/datatables.min.js"></script>
    <script src="public/js/projectScript/invitations.js"></script>
{/block}

{block name="content"}
    <div class="container">
        <h2 class="title">I miei inviti</h2>
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a id="received" data-toggle="tab">Ricevuti</a></li>
            <li><a id="sent" data-toggle="tab">Inviati</a></li>
        </ul>

        <div id="receivedInvitations">
            Di seguito è presente la lista degli inviti ricevuti da parte di altri utenti:
            <table id="receivedTable" width="100%">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Disponibilità</td>
                    <td>Data invito</td>
                    <td>Stato</td>
                    <td>Inviato da</td>
                    <td>Email</td>
                    <td>Telefono</td>
                    <td>Sport</td>
                    <td>Data,ora</td>
                    <td>Luogo</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$receivedInvitations item=received}
                    <tr class="{if $received->status == 2}pending{/if}">
                        <td>{$received->id}</td>
                        <td>{$received->availabilityId}</td>
                        <td>{$received->invitationDate}</td>
                        <td>{if $received->status == 1 }Accettato {elseif $received->status == 0}Rifiutato {else} In attesa{/if}</td>
                        <td>{$received->firstName} {$received->lastName}</td>
                        <td>{$received->email}</td>
                        <td>{$received->telnumber}</td>
                        <td>{$received->sport}</td>
                        <td>{$received->date} {$received->time}</td>
                        <td>{$received->partner}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <div id="sentInvitations">
            Di seguito è presente la lista degli inviti inviati ad altri utenti:
            <table id="sentTable" width="100%">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Data invito</td>
                    <td>Stato</td>
                    <td>Inviato a</td>
                    <td>Email</td>
                    <td>Telefono</td>
                    <td>Sport</td>
                    <td>Data,ora</td>
                    <td>Luogo</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$sentInvitations item=sent}
                    <tr>
                        <td>{$sent->id}</td>
                        <td>{$sent->invitationDate}</td>
                        <td>{if $sent->status == 0 }Rifiutato {elseif $sent->status == 1} Accettato {else} In attesa{/if}</td>
                        <td>{$sent->firstName} {$sent->lastName}</td>
                        <td>{$sent->email}</td>
                        <td>{$sent->telnumber}</td>
                        <td>{$sent->sport}</td>
                        <td>{$sent->date} {$sent->time}</td>
                        <td>{$sent->partner}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="changeStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Accetta o rifiuta invito</h3>
                        Fare click su uno dei seguenti pulsanti per decidere se accettare o se declinare l'invito
                        ricevuto.
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