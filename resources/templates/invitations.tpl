{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/datatables.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/datatables.min.js"></script>
    <script src="public/js/projectScript/invitations.js"></script>
{/block}

{block name="content"}
    <div class="container">
        <h2 class="title">I miei inviti</h2>
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a id="received">Ricevuti</a></li>
            <li><a id="sent">Inviati</a></li>
        </ul>

        <div id="receivedInvitations">
            Di seguito è presente la lista degli inviti ricevuti da parte di altri utenti:
            <table id="receivedTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Data</td>
                    <td>Stato</td>
                    <td>Nome</td>
                    <td>Cognome</td>
                    <td>Email</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$receivedInvitations item=received}
                    <tr>
                        <td>{$received->id}</td>
                        <td>{$received->date}</td>
                        <td>{$received->accepted}</td>
                        <td>{$received->firstName}</td>
                        <td>{$received->lastName}</td>
                        <td>{$received->email}</td>
                        <td>{$received->telnumber}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <div id="sentInvitations">
            Di seguito è presente la lista degli inviti inviati ad altri utenti:
            <table id="sentTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Data</td>
                    <td>Stato</td>
                    <td>Nome</td>
                    <td>Cognome</td>
                    <td>Email</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$sentInvitations item=sent}
                    <tr>
                        <td>{$sent->id}</td>
                        <td>{$sent->date}</td>
                        <td>{$sent->accepted}</td>
                        <td>{$sent->firstName}</td>
                        <td>{$sent->lastName}</td>
                        <td>{$sent->email}</td>
                        <td>{$sent->telnumber}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
{/block}