{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminAccounts.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Inseirimento moderatori per aziende</h2>
    <br>
    <section>
        <div class="container">
            Selezionare l'azienda e l'utente a cui si vogliono dare i diritti di gestione.
            <table id="partnersTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Descrizione</td>
                    <td>Regione</td>
                    <td>Area</td>
                    <td>Indirizzo</td>
                    <td>Email</td>
                    <td>Telefono</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$partners item=partner}
                    <tr>
                        <td>{$partner->id}</td>
                        <td>{$partner->name}</td>
                        <td>{$partner->description}</td>
                        <td>{$partner->region}</td>
                        <td>{$partner->area}</td>
                        <td>{$partner->address}</td>
                        <td>{$partner->email}</td>
                        <td>{$partner->telnumber}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
            <br>
            <hr>
            <br>
            <table id="usersTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Cognome</td>
                    <td>Email</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$users item=user}
                    <tr>
                        <td>{$user->id}</td>
                        <td>{$user->firstName}</td>
                        <td>{$user->lastName}</td>
                        <td>{$user->email}</td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </section>
    <div class="row">
        <div class="col-center-block col-md-3">
            <button class="signin-button" disabled id="addModerator">Salva</button>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="addModeratorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi utente a gestionale</h3>
                        <div class="login-form">
                            Stai per assegnare all'utente <b><span id="user"></span></b> i diritti di gestione
                            sull'azienda
                            <b><span id="partner"></span></b>.
                            Sei sicuro?
                        </div>
                        <div class="modal-footer">
                            <button id="saveUser" type="button" class="btn btn-primary">Si</button>
                            <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annulla
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}