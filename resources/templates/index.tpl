{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/jquery.timepicker.min.js"></script>
    <script src="public/js/bootstrap3-typeahead.min.js"></script>
    <script src="public/js/projectScript/index.js"></script>
{/block}

{block name="content"}
    <!-- banner -->
    <div class="container-fluid searchbox">
        {if isset($smarty.session.id) && isset($smarty.session.admin) && !isset($smarty.session.moderator)}
            <div class="container padding">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-center-block">
                        <h2>Profilo amministratore</h2>
                        <br>
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="public/images/user.png" alt="" class="img-rounded img-responsive"/>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>Ciao {$user->firstName}&nbsp;{$user->lastName}</h4>
                                    <br>
                                    <p> I tuoi dati: </p>

                                    <table class="user-info">
                                        <tr>
                                            <td><b>Nome:</b></td>
                                            <td>{$user->firstName}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Cognome:</b></td>
                                            <td>{$user->lastName}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Sesso:</b></td>
                                            <td>{$user->gender}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Email:</b></td>
                                            <td>{$user->email}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Numero telefono:</b></td>
                                            <td>{$user->telnumber}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Data nascita:</b></td>
                                            <td>{$user->birthdate}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Registrato in data:</b></td>
                                            <td>{$user->created_at}</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {elseif isset($smarty.session.id) && !isset($smarty.session.admin) && isset($smarty.session.moderator)}
            {*Moderator*}
            <div class="container padding">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-center-block">
                        <h2>Profilo gestore pagina azienda</h2>
                        <br>
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="public/images/user.png" alt="" class="img-rounded img-responsive"/>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>Ciao {$user->firstName}&nbsp;{$user->lastName}</h4>
                                    <br>
                                    <p> I tuoi dati: </p>

                                    <table class="user-info">
                                        <tr>
                                            <td><b>Nome:</b></td>
                                            <td>{$user->firstName}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Cognome:</b></td>
                                            <td>{$user->lastName}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Sesso:</b></td>
                                            <td>{$user->gender}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Email:</b></td>
                                            <td>{$user->email}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Numero telefono:</b></td>
                                            <td>{$user->telnumber}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Data nascita:</b></td>
                                            <td>{$user->birthdate}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Registrato in data:</b></td>
                                            <td>{$user->created_at}</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {*Dati azienda e modifiche su dati azienda*}
                        {*<div class="well well-sm">*}
                        {*<div class="row">*}
                        {*<div class="col-sm-6 col-md-4">*}
                        {*<img src="public/images/user.png" alt="" class="img-rounded img-responsive"/>*}
                        {*</div>*}
                        {*<div class="col-sm-6 col-md-8">*}
                        {*<h4>Ciao {$user->firstName}&nbsp;{$user->lastName}</h4>*}
                        {*<br>*}
                        {*<p> I tuoi dati: </p>*}

                        {*<table class="user-info">*}
                        {*<tr>*}
                        {*<td><b>Nome:</b></td>*}
                        {*<td>{$user->firstName}</td>*}
                        {*</tr>*}
                        {*<tr>*}
                        {*<td><b>Cognome:</b></td>*}
                        {*<td>{$user->lastName}</td>*}
                        {*</tr>*}
                        {*<tr>*}
                        {*<td><b>Sesso:</b></td>*}
                        {*<td>{$user->gender}</td>*}
                        {*</tr>*}
                        {*<tr>*}
                        {*<td><b>Email:</b></td>*}
                        {*<td>{$user->email}</td>*}
                        {*</tr>*}
                        {*<tr>*}
                        {*<td><b>Numero telefono:</b></td>*}
                        {*<td>{$user->telnumber}</td>*}
                        {*</tr>*}
                        {*<tr>*}
                        {*<td><b>Data nascita:</b></td>*}
                        {*<td>{$user->birthdate}</td>*}
                        {*</tr>*}
                        {*<tr>*}
                        {*<td><b>Registrato in data:</b></td>*}
                        {*<td>{$user->created_at}</td>*}
                        {*</tr>*}
                        {*</table>*}
                        {*<br><br>*}
                        {*</div>*}
                        {*</div>*}
                        {*</div>*}
                    </div>
                </div>
            </div>
        {else}
            <div class="col-md-6 w3l_about_bottom_left one">
                <div class="">
                    <div class="searchbox-panel">
                        {*<h3>Prenota il tuo campo!</h3>*}
                        <form id="form" method="post" autocomplete="off" action="bookingReview.php" class="mod2">
                            <div class="col-md-6 col-xs-6 w3l-left-mk">
                                <ul>
                                    <li class="text">Sport :</li>
                                    <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        <input id="sport" name="sport" type="text"
                                               class="typeahead"
                                               placeholder="Sport" required/>
                                    </li>
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
                            <div class="col-md-6 col-xs-6 w3l-right-mk">
                                <ul>
                                    <li class="text">Provincia :</li>
                                    <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <input id="province" placeholder="Provincia" name="province" type="text"
                                               required
                                               class='typeahead'/></li>


                                    <li class="text">Data :</li>
                                    <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                                class="date" id="datepicker" placeholder="Data" name="date" type="text"
                                                value=""
                                                required/>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="agile-submit">
                                <input type="submit" value="Prenota">
                            </div>
                            <input class="hidden" id="selectedSport" name="selectedSport"/>
                            <input class="hidden" id="selectedPartner" name="selectedPartner"/>
                            <input class="hidden" id="selectedProvince" name="selectedProvince"/>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        {/if}
    </div>
    <!-- /banner -->
{/block}