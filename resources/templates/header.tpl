<!--
Author: W3layouts
Author URL: http:/w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http:/creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>PrenotaIlTuoCampo</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEriinclude/assets/css/on, Motorola web design"/>

    <!--/ Meta tag Keywords -->
    {block name="css"}
        <link rel="stylesheet" href="public/css/bootstrap.css">
        <!-- Bootstrap-Core-include/assets/css/ -->
        <link rel="stylesheet" href="public/css/style.css" type="text/css" media="all"/>
        <!-- Style-include/assets/css/ -->
        <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <!-- Font-Awesome-Icons-include/assets/css/ -->
        <link rel="stylesheet" href="public/css/swipebox.css">
        <link rel="stylesheet" href="public/css/datatables.min.css"/>
        <link rel="stylesheet" href="public/css/jquery-ui.min.css"/>
        <link rel="stylesheet" href="public/css/mycss.css"/>
    {/block}
    <!-- /include/assets/css/ files -->
    <!-- online-include/assets/fonts/ -->
    <!-- /online-fontsfonts -->
</head>
<body>
<!-- banner -->
<div class="main_section_agile" id="home">
    <div class="agileits_w3layouts_banner_nav">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2><a class="navbar-brand" href="index.php">PrenotaIltuoCampo</a>
                </h2>

            </div>

            <ul class="agile_forms">

                {if isset($smarty.session.id) && !isset($smarty.session.admin) && !isset($smarty.session.moderator)}
                    <li>
                        <a class="user_profile" href="profile.php" role="button">
                            Il mio account
                        </a>
                        {*<div class="dropdown show user_profile">*}
                        {*<a class="dropdown-toggle " href="#" role="button" id="dropdownMenuLink"*}
                        {*data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*}
                        {*Il mio account*}
                        {*</a>*}

                        {*<div class="dropdown-menu user_profile_item" aria-labelledby="dropdownMenuLink">*}
                        {*<a class="dropdown-item " href="profile.php">Il mio account</a>*}
                        {*<a class="dropdown-item " href="bookings.php">Le mie prenotazioni</a>*}
                        {*<a class="dropdown-item " href="invitations.php">I miei inviti</a>*}
                        {*<a class="dropdown-item " href="availability.php">Le mie disponibilità</a>*}
                        {*<a class="dropdown-item " href="userTournaments.php">I miei tornei</a>*}
                        {*<div class="dropdown-divider"></div>*}
                        {*<a href="index.php" class="dropdown-item" id="logout">Esci</a>*}
                        {*</div>*}
                        {*</div>*}
                    </li>
                    }
                {elseif !isset($smarty.session.id) && !isset($smarty.session.admin) && !isset($smarty.session.moderator)}

                    {*Login and Sign up*}
                    <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in"
                                                                                                  aria-hidden="true"></i>
                            Accedi</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o"
                                                                                   aria-hidden="true"></i>Registrati</a>
                    </li>
                {/if}
            </ul>


            {if !isset($smarty.session.admin) && !isset($smarty.session.moderator)}
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li id="index" class="active"><a href="index.php" class="effect-3">Home</a></li>
                            <li id="partners"><a href="parteners.php" class="effect-3 scroll">Aziende</a></li>
                            <li id="reviews"><a href="reviews.php" class="effect-3 scroll">Recensioni</a></li>
                            <li id="news"><a href="news.php" class="effect-3 scroll">Novità</a></li>
                            <li id="tournaments"><a href="tournaments.php" class="effect-3 scroll">Tornei</a></li>
                            <li id="about_us"><a href="about_us.php" class="effect-3 scroll">Su di noi</a></li>
                        </ul>
                    </nav>
                </div>
            {elseif isset($smarty.session.admin) && !isset($smarty.session.moderator)}
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li id="partners"><a href="adminParteners.php"
                                                 class="effect-3 scroll">Gestione<br>aziende</a>
                            </li>
                            <li id="reviews"><a href="adminReviews.php"
                                                class="effect-3 scroll">Gestione<br>recensioni</a>
                            </li>
                            <li id="news"><a href="adminNews.php" class="effect-3 scroll">Gestione<br> news</a></li>
                            <li id="tournaments"><a href="adminTournaments.php" class="effect-3 scroll">Gestione<br>
                                    tornei</a>
                            </li>
                            <li id="bookings"><a href="adminBookings.php" class="effect-3 scroll">Gestione<br>
                                    prenotazioni</a>
                            </li>
                            <li id="accounts"><a href="#" class="effect-3 scroll">Gestione<br>
                                    accounts</a>
                            </li>
                            <li><a href="index.php" class="effect-3 scroll" id="logout">Esci</a></li>
                        </ul>
                    </nav>
                </div>
            {elseif !isset($smarty.session.admin) && isset($smarty.session.moderator)}
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li id="partners"><a href="adminParteners.php"
                                                 class="effect-3 scroll">Gestione<br>azienda</a>
                            </li>
                            <li id="tournaments"><a href="adminTournaments.php" class="effect-3 scroll">Gestione<br>
                                    tornei</a>
                            </li>
                            <li id="bookings"><a href="adminBookings.php" class="effect-3 scroll">Gestione<br>
                                    prenotazioni</a>
                            </li>
                            <li><a href="index.php" class="effect-3 scroll" id="logout">Esci</a></li>
                        </ul>
                    </nav>
                </div>
            {/if}
        </nav>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Modal1 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Accedi</h3>
                    <div class="login-form">
                        <form id="loginForm" method="post">
                            <div class="err" id="add_err"></div>
                            <input id="email" type="email" name="email" placeholder="E-mail" required/>
                            <input id="password" type="password" name="password" placeholder="Password" required/>
                            {*<input type="submit" class="form-control" value="Accedi" id="log_in"/>*}

                            <input type="submit" value="Accedi">
                        </form>
                    </div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal3"> Non sei ancora registrato?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Modal1 -->
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile modal-body">
                    <h3 class="agileinfo_sign">Registrati</h3>
                    <div class="login-form container-fluid">
                        <form autocomplete="off" method="post" id="signupForm">
                            <div class="row">
                                <div class="col-md-5"><label for="first_name">Nome:</label>
                                    <input class="form_input" type="text" id="first_name" name="first_name"
                                           placeholder="Nome"
                                           required/></div>
                                <div class="col-md-5">
                                    <label for="first_name">Cognome:</label>
                                    <input class="form_input" type="text" id="last_name" name="last_name"
                                           placeholder="Cognome"
                                           required/></div>
                                <div class="col-md-2"><label for="first_name">Sesso:</label>
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option selected value="m">M</option>
                                        <option value="f">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"><label for="email">Email:</label>
                                    <input class="form_input" id="signup_email" type="email" name="email"
                                           placeholder="Email" required autocomplete="false"/>
                                </div>
                                <div class="col-md-4"><label for="telnumber">Telefono:</label>
                                    <input class="form_input" id="telnumber" type="text" name="telnumber"
                                           placeholder="Telefono" required/>
                                </div>
                                <div class="col-md-4">
                                    <label for="birthdate">Data di nascita:</label>
                                    <input class="form_input" type="text" id="birthdate" name="birthdate"
                                           placeholder="Data di nascita" autocomplete="false"
                                           required/></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="passoword">Passoword:</label>
                                    <input class="form_input" type="password" name="password" id="signup_password"
                                           placeholder="Password" autocomplete="new-password"
                                           required/></div>
                                <div class="col-md-6">
                                    <label for="rep_password">Conferma passoword:</label>
                                    <input class="form_input" type="password" name="rep_password" id="rep_password"
                                           placeholder="Conferma Password" required/>
                                    <span id="passoword_error"></span>
                                </div>

                            </div>
                            <br><span id="signup_err"></span>
                            <input type="submit" class="form-control" id="submit_button" value="Registrati"/>
                        </form>
                    </div>
                    <p><a href="#"> Cliccando su "Registrati", accetti i nostri termini.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

{block name="js"}
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.js"></script>
    <script type="text/javascript" src="public/js/datatables.min.js"></script>
    <script src="public/js/jquery-ui.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- /include/assets/js/-files -->
    <!-- Baneer-include/assets/js/ -->


    <!-- smooth scrolling -->
    <script src="public/js/SmoothScroll.min.js"></script>
    <!-- /smooth scrolling -->
    <!-- stats -->
    <script type="text/javascript" src="public/js/numscroller-1.0.js"></script>
    <!-- /stats -->
    <!-- moving-top scrolling -->
    <script type="text/javascript" src="public/js/move-top.js"></script>
    <script type="text/javascript" src="public/js/easing.js"></script>
    <script src="public/js/simplePlayer.js"></script>
    <script src="public/js/jquery.swipebox.min.js"></script>
    <script src="public/js/projectScript/header.js"></script>
{/block}
</body>
</html>