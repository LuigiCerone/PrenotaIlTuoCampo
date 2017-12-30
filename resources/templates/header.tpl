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
            {*<div class="w3layouts_header_right">*}
            {*<form action="#" method="post">*}
            {*<input name="Search here" type="search" placeholder="Search" required="">*}
            {*<input type="submit" value="">*}
            {*</form>*}
            {*</div>*}
            <ul class="agile_forms">
                <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in"
                                                                                              aria-hidden="true"></i>
                        Sign In</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o"
                                                                               aria-hidden="true"></i> Sign Up</a></li>
            </ul>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li id="index" class="active"><a href="index.php" class="effect-3">Home</a></li>
                        <li id="partners"><a href="parteners.php" class="effect-3 scroll">Partners</a></li>
                        <li id="reviews"><a href="reviews.php" class="effect-3 scroll">Reviews</a></li>
                        <li id="about_us"><a href="#about" class="effect-3 scroll">About us</a></li>
                        <li><a href="#team" class="effect-3 scroll">Team</a></li>
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
                    <h3 class="agileinfo_sign">Sign In</h3>
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="Sign In">
                            </div>
                        </form>
                    </div>
                    <div class="login-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
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
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Sign Up</h3>
                    <div class="login-form">
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Username" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <input type="password" name="password" placeholder="Confirm Password" required="">
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
{/block}
</body>
</html>