{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/availability.js"></script>
{/block}

{block name="content"}
    <div class="container">
        <br>
        <h2 class="text-center">Le mie disponibilità</h2>
        <br>
        Di seguito è presente la lista delle disponibilità che hai dato, per rimuoverne una fai click sull'icona, per
        aggiungere altre disponibilità <a data-toggle="modal" href="#addAvailability">clicca qui</a>.<br><br>
        <hr>
        <br>
        {foreach from=$availabilities item=availability}
            <div class="card ">
                <div class="row ">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="card-block">
                            <h4 class="card-title">Dispobilità per il {$availability->date}
                                alle {$availability->time}</h4>
                            <p class="card-text">Ti sei reso disponibile per giocare a <b>{$availability->sport}</b></p>
                            <p class="card-text">Presso <b>{$availability->partner}</b></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <i data-id="{$availability->id}" class="fa fa-trash delete" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addAvailability" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form id="form" class="mod2">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="agileinfo_sign">Aggiungi disponilità</h3>
                        In questa pagina può aggiungere giorni in cui sei disponibile a giocare cosi che gli altri
                        giocatori, in caso di necessità, possano contattarti!<br>
                        <hr>
                        <br>

                        <div class="col-md-6 col-xs-6 w3l-left-mk">
                            <ul>
                                <li class="text">Sport :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    <input id="sport" name="sport" type="text" class="typeahead"
                                           placeholder="Sport" required/>
                                </li>
                                <li class="text">Provincia :</li>
                                <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <input id="province" placeholder="Provincia" name="province" type="text" required
                                           class='typeahead'/></li>
                                <li class="text">Data :</li>
                                <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                            class="date" id="datepicker" placeholder="Data" name="date" type="text"
                                            value=""
                                            required/>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 w3l-right-mk">
                            <ul>
                                <li class="text">qualcosa di utile qui :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                            name="gender" type="text"/></li>
                                <li class="text">Struttura :</li>
                                <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                            id="partner" name="partner" placeholder="Struttura" class="typeahead"
                                            type="text" required/>
                                </li>
                                <li class="text">Ora :</li>
                                <li class="agileits-main"><i class="fa fa-clock-o" aria-hidden="true"></i><input
                                            class="date" placeholder="Ora" name="time" id="timepicker" type="text"
                                            value=""
                                            required/>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <input class="hidden" id="selectedSport" name="selectedSport"/>
                        <input class="hidden" id="selectedPartner" name="selectedPartner"/>
                        <input class="hidden" id="selectedProvince" name="selectedProvince"/>


                        <span id="error"></span>
                        <div class="modal-footer">
                            <input id="saveAvailability" type="submit" class="btn btn-primary" value="Fatto"/>
                            <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Confirm Modal -->
    <div class="modal fade" id="removeAvailability" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Anullamento disponibilità</h3>
                    Sei sicuro di voler rimuove la disponibilità?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveChange" type="button" class="btn btn-primary">Si, disdici</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}