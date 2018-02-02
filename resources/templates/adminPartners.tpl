{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminPartners.js"></script>
{/block}

{block name="content"}
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
    {if ($smarty.session.id != null)}
        <span class="hidden" id="id">{$smarty.session.id}</span>
        <div class="row" id="post-review-box">
        <div class="signin-form profile">
            <h3 class="agileinfo_sign">Inserisci nuova azienda</h3>
            <div class="login-form">
                <div class="col-md-6 col-center-block">
                    <form accept-charset="UTF-8" action="" method="post">
                        <input type="text" class="form-control" id="partenersText"
                               placeholder="Inserisci qui il nome dell'azienda"/>
                        <input type="text" class="form-control" id="descriptionText"
                               placeholder="Inserisci qui la descrizione "/>
                        <input type="text" class="form-control" id="regionText"
                               placeholder="Inserisci qui la regione "/>
                        <input type="text" class="form-control" id="areaText"
                               placeholder="Inserisci qui l'area "/>
                        <input type="text" class="form-control" id="addressText"
                               placeholder="Inserisci qui l'indirizzo "/>
                        <input type="email" class="form-control " id="emailText" name="comment"
                               placeholder="Inserisci qui l'email "/>
                        <input type="text" class="form-control animated" id="numberText" name="comment"
                               placeholder="Inserisci qui il numero di telefono"/>
                        <br>
                        <input id="savePartners" type="submit" value="Salva"/>
                    </form>
                </div>
            </div>
        </div>
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
                                                       name="number"
                                                       placeholder="Numero campo"
                                                       required/></td>
                                        </tr>
                                        <tr>
                                            <td>Provincia:</td>
                                            <td><input id="province" type="text" name="province"
                                                       placeholder="Sigla provincia"
                                                       maxlength="2"
                                                       required/></td>
                                        </tr>
                                        <tr>
                                            <td>Sport:</td>
                                            <td><select id="selectSport">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}
{/block}