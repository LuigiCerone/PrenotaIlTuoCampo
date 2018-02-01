{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" type="text/css" href="public/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/jquery.timepicker.min.js"></script>
    <script type="text/javascript" src="public/js/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="public/js/pdfmake-0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="public/js/pdfmake-0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="public/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="public/js/buttons.html5.min.js"></script>
    <script src="public/js/projectScript/adminMatches.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Gestione delle partite associate ad un torneo.</h2>
    <br>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
        <div class="container">
            Informazioni relative al torneo {$tournament->tournament}. Fare click sulla riga della tabella per
            modificare.
            <input id="sport" type="text" class="hidden" value="{$tournament->sportId}"/>
            <input id="partner" type="text" class="hidden" value="{$tournament->partnerId}"/>
            <br>
            <hr>
            <br>
            <ul id="tabs" class="nav nav-tabs">
                {foreach from=$days item=day}
                    <li class="nav-item">
                        <a data-toggle="tab" class="nav-link"
                           href="#table_{$day[0]->day}">Giornata {$day[0]->day +1 }
                        </a>
                    </li>
                {/foreach}
            </ul>
            <br>

            <div class="tab-content">
                {foreach from=$days item=day}
                    <div class="tab-pane" id="table_{$day[0]->day}">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Giornata</td>
                                <td>Squadra casa</td>
                                <td>Squadra ospite</td>
                                <td>Data</td>
                                <td>Ora</td>
                                <td>Azienda</td>
                                <td>Campo</td>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$day item=match}
                                <tr>
                                    <td>{$match->match_id}</td>
                                    <td>{$match->day + 1}</td>
                                    <td>{$match->first_team}</td>
                                    <td>{$match->second_team}</td>
                                    <td>{if $match->date == null} - {else}{$match->date}{/if}</td>
                                    <td>{if $match->time == null} - {else}{$match->time}{/if}</td>
                                    <td>{if $match->partner == null} - {else}{$match->partner}{/if}</td>
                                    <td>{if $match->number == null} - {else}{$match->number}{/if}</td>
                                </tr>
                            {/foreach}
                            </tbody>
                        </table>
                    </div>
                {/foreach}
            </div>
        </div>
    </section>
    <!-- Modal1 -->
    <div class="modal fade" id="modifyMatch" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs">
                    <li class="nav-item active">
                        <a data-toggle="tab" class="nav-link"
                           href="#match_info">Dati partita</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" class="nav-link"
                           href="#match_result">Risultati partita</a>
                    </li>
                </ul>

                {*Modifica ============================================================*}
                <div class="tab-content">
                    <div id="match_info" class="tab-pane active">

                        <div class="signin-form profile">
                            <h3 class="agileinfo_sign">Modifica dati partita </h3>
                            <form id="formInfo" class="mod2">
                                <div class="col-md-6 col-xs-6 w3l-left-mk">
                                    <ul>
                                        <li class="text">Data :</li>
                                        <li class="agileits-main"><i class="fa fa-calendar"
                                                                     aria-hidden="true"></i><input
                                                    class="date" id="dateMatch" placeholder="Data" name="date"
                                                    type="text"
                                                    value=""
                                                    required/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-6 w3l-right-mk">
                                    <ul>
                                        <li class="text">Ora :</li>
                                        <li class="agileits-main"><i class="fa fa-clock-o"
                                                                     aria-hidden="true"></i><input
                                                    class="date" placeholder="Ora" name="time" id="timeMatch"
                                                    type="text"
                                                    value=""
                                                    required/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-center-block">
                                    <button id="searchFields" class="signin-button">Cerca</button>
                                </div>
                                <div id="fields" class="col-md-8 col-center-block">

                                </div>

                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-5 col-center-block">
                                        <div class="agile-submit ">
                                            <input type="submit" value="Modifica">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    {*Risultato ========================================================*}
                    <div id="match_result" class="tab-pane">
                        <div class="signin-form profile">
                            <h3 class="agileinfo_sign">Modifica risultato partita </h3>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
{/block}