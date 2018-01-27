{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/jquery.timepicker.min.js"></script>
    <script src="public/js/projectScript/index.js"></script>
    <script src="public/js/bootstrap3-typeahead.min.js"></script>
{/block}

{block name="content"}
    <!-- banner -->
    <div class="container-fluid searchbox">
        <div class="col-md-6 w3l_about_bottom_left one">
            <div class="">
                <div class="searchbox-panel">
                    {*<h3>Prenota il tuo campo!</h3>*}
                    <form action="#" method="post" class="mod2">
                        <div class="col-md-6 col-xs-6 w3l-left-mk">
                            <ul>
                                <li class="text">Sport :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    <input id="sport" name="sport_name" type="text" class="typeahead"
                                           placeholder="Sport" required/>
                                </li>
                                <li class="text">Provincia :</li>
                                <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <input id="region" placeholder="Provincia" name="region" type="text" required
                                           class='typeahead'/></li>
                                <li class="text">Data :</li>
                                <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                            class="date" id="datepicker" name="date" type="text" value=""
                                            required=""/>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 w3l-right-mk">
                            <ul>
                                <li class="text">qualcosa di utile qui :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                            name="gender" type="text" required=""></li>
                                <li class="text">Struttura :</li>
                                <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                            name="address"
                                            type="text"
                                            required="">
                                </li>
                                <li class="text">Ora :</li>
                                <li class="agileits-main"><i class="fa fa-clock-o" aria-hidden="true"></i><input
                                            class="date" name="date" id="timepicker" type="text" value=""
                                            required=""/>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="agile-submit">
                            <input type="submit" value="Prenota">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">

        </div>

    </div>
    <!-- /banner -->
{/block}