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
                <h2><a class="navbar-brand" href="index.html">PrenotaIltuoCampo</a>
                </h2>

            </div>
            <ul class="agile_forms">
                {*Login and Sign up*}
                <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in"
                                                                                              aria-hidden="true"></i>
                        Accedi</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o"
                                                                               aria-hidden="true"></i>Registrati</a>
                </li>
            </ul>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li id="index" class="active"><a href="index.php" class="effect-3">Home</a></li>
                        <li id="partners"><a href="parteners.php" class="effect-3 scroll">Partners</a></li>
                        <li id="reviews"><a href="reviews.php" class="effect-3 scroll">Reviews</a></li>
                        <li id="about_us"><a href="about_us.php" class="effect-3 scroll">About us</a></li>
                        <li id="news"><a href="news.php" class="effect-3 scroll">News</a></li>
                    </ul>
                </nav>

            </div>
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
                        <div class="err" id="add_err"></div>
                        <form action="./" method="post">
                            <input id="email" type="email" name="email" placeholder="E-mail" required="">
                            <input id="password" type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="Accedi" id="log_in">
                            </div>
                        </form>
                    </div>
                    <div class="login-social-grids">
                        {*<ul>*}
                        {*<li><a href="#"><i class="fa fa-facebook"></i></a></li>*}
                        {*<li><a href="#"><i class="fa fa-twitter"></i></a></li>*}
                        {*<li><a href="#"><i class="fa fa-rss"></i></a></li>*}
                        {*</ul>*}
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
                        <form action="./" method="post">
                            <div class="row">
                                <div class="col-md-5"><label for="first_name">Nome:</label>
                                    <input class="form_input" type="text" name="first_name" placeholder="Nome"
                                           required=""></div>
                                <div class="col-md-5">
                                    <label for="first_name">Cognome:</label>
                                    <input class="form_input" type="text" name="last_name" placeholder="Cognome"
                                           required=""></div>
                                <div class="col-md-2"><label for="first_name">Sesso:</label>
                                    <select class="form_input" name="gender" required="">
                                        <option selected value="m">M</option>
                                        <option value="f">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8"><label for="email">Email:</label>
                                    <input class="form_input" type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-md-4">
                                    <label for="birthdate">Data di nascita:</label>
                                    <input class="form_input" type="text" name="birthdate" placeholder="Data di nascita"
                                           required=""></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="passoword">Passoword:</label>
                                    <input class="form_input" type="password" name="password" placeholder="Password"
                                           required=""></div>
                                <div class="col-md-6">
                                    <label for="rep_password">Conferma passoword:</label>
                                    <input class="form_input" type="password" name="rep_password"
                                           placeholder="Conferma Password" required="">
                                </div>

                            </div>
                            <br><br>
                            <input type="submit" value="Sign Up">
                        </form>
                    </div>
                    <p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
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
    <script type="text/javascript"
            src="public/js/bootstrap.js"></script>
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
    <script src="public/js/jquery-ui.js"></script>
    <script src="public/js/projectScript/header.js"></script>
{/block}
</body>
</html>