{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminPartners.js"></script>
{/block}

{block name="content"}
    {if isset($smarty.session.admin) && !isset($smarty.session.moderator)}
        <h2 class="title">I nostri principali partners.</h2>
        <br>
        {*{$partners->partners|json_encode}*}
        <br>
        <section>
            <div class="container">
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
                        <td>Modifica campo</td>
                        <td>Modifica oggetti disponibili</td>
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
                            <td></td>
                            <td></td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </section>
        <div class="row" id="post-review-box">
        <div class="signin-form profile">
            <h3 class="agileinfo_sign">Inserisci nuova azienda</h3>
            <div class="login-form">
                <div class="col-md-6 col-center-block">
                    <form id="savePartners" accept-charset="UTF-8" action="" method="post">
                        <input type="text" class="form-control" id="partenersText"
                               placeholder="Inserisci qui il nome dell'azienda" required/>
                        <input type="text" class="form-control" id="descriptionText"
                               placeholder="Inserisci qui la descrizione " required/>
                        <input type="text" class="form-control" id="regionText"
                               placeholder="Inserisci qui la regione " required/>
                        <input type="text" class="form-control" id="areaText"
                               placeholder="Inserisci qui l'area " required/>
                        <input type="text" class="form-control" id="addressText"
                               placeholder="Inserisci qui l'indirizzo " required/>
                        <input type="email" class="form-control " id="emailText" name="comment"
                               placeholder="Inserisci qui l'email " required/>
                        <input type="text" class="form-control animated" id="numberText" name="comment"
                               placeholder="Inserisci qui il numero di telefono" required/>
                        <br>
                        <input type="submit" value="Salva"/>
                    </form>
                </div>
            </div>
        </div>
    {elseif isset($smarty.session.moderator) && !isset($smarty.session.admin)}
        <h2 class="title">La tua azienda</h2>
        <br>
        <section>
            <div class="container">
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
                        <td>Modifica campo</td>
                        <td>Modifica oggetti disponibili</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{$partner->id}</td>
                        <td>{$partner->name}</td>
                        <td>{$partner->description}</td>
                        <td>{$partner->region}</td>
                        <td>{$partner->area}</td>
                        <td>{$partner->address}</td>
                        <td>{$partner->email}</td>
                        <td>{$partner->telnumber}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <br>
                {*Fields*}
                <table id="fieldsTable">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Numero</td>
                        <td>Sport</td>
                        <td>Tipo</td>
                        <td>Esterno</td>
                        <td>Riscaldato</td>
                        <td>Provincia</td>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$fields item=field}
                        <tr>
                            <td>{$field->id}</td>
                            <td>{$field->number}</td>
                            <td>{$field->name}</td>
                            <td>{$field->type}</td>
                            <td>{if $field->outdoor == 1}Si{else}No{/if}</td>
                            <td>{if $field->warmed == 1}Si{else}No{/if}</td>
                            <td>{$field->province_fk}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </section>
    {/if}
    <!-- Modal1 -->
    <div class="modal fade" id="addField" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi campo</h3>
                        <div class="login-form">
                            <form id="fieldAddForm" method="post">
                                Esterno:
                                <label class="radio-inline">
                                    <input type="radio" name="outdoor" value="1" required>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="outdoor" value="0" required>No
                                </label>
                                <br>
                                Riscaldato:
                                <label class="radio-inline">
                                    <input type="radio" name="warmed" value="1" required>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="warmed" value="0" required>No
                                </label>
                                <table>
                                    <tr>
                                        <td>Tipologia campo:</td>
                                        <td><input id="type" type="text" name="type" placeholder="Tipo campo"
                                                   required/></td>
                                    </tr>
                                    <tr>
                                        <td>Numero:</td>
                                        <td><input id="number" type="number"
                                                   name="number" class="form-control"
                                                   placeholder="Numero campo"
                                                   required/></td>
                                    </tr>
                                    <tr>
                                        <td>Provincia:</td>
                                        <td>
                                            <select class="form-control" id="province">
                                                {foreach from=$provinces item=province}
                                                    <option value="{$province->sign}">{$province->name}</option>
                                                {/foreach}
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sport:</td>
                                        <td><select class="form-control" id="selectSport">
                                                {foreach from=$sports item=sport}
                                                    <option value="{$sport->id}">{$sport->name}</option>
                                                {/foreach}
                                            </select></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Aggiungi">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="modifyItems" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Modifica disponibilità</h3>
                        <div class="login-form">
                            <form id="resourceForm">
                                <fieldset>
                                    <legend>Seleziona ciò che l'azienda possiede</legend>
                                    <div id="checkboxes">
                                        {foreach from=$supplies item=supply}
                                            <div>
                                                <input type="checkbox" id="{$supply->id}" name="supplies"
                                                       value="{$supply->id}" {if $supply->available} checked{/if}>
                                                <label for="{$supply->id}">{$supply->name}</label>
                                            </div>
                                        {/foreach}
                                    </div>
                                </fieldset>
                                <div class="row">
                                    <div class="col-md-5 col-center-block"><input type="submit" value="Salva"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}