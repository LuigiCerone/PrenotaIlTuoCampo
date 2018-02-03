<html>
<div class="footer">
    <div class="container">
        <div class="wthree_footer_grid_left">
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                <h4>About Us</h4>
                <p>Donec viverra nunc eu neque porta, quis laoreet nisl gravida. Proin gravida,
                    diam ut consectetur porttitor.</p>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                {if isset($smarty.session.id) && isset($smarty.session.admin)}
                    <h4>Navigation</h4>
                    <ul>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.php">Home</a>
                        </li>

                    </ul>
                {else}
                    <h4>Navigation</h4>
                    <ul>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.php">Home</a>
                        </li>

                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="parteners.php"
                                                                                          class="scroll">Partners</a>
                        </li>

                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="reviews.php"
                                                                                          class="scroll">Reviews</a>
                        </li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="about_us.php"
                                                                                          class="scroll">About
                                Us</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="news.php"
                                                                                          class="scroll">News</a></li>
                    </ul>
                {/if}
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
                <h4>Others</h4>
                <ul>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:progettotwd@gmail.com">progettotwd@gmail.com</a>
                    </li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 311</li>
                    <li><i class="fa fa-fax" aria-hidden="true"></i>+123 421</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="w3layouts_copy_right">
    <div class="container">
        <p>© 2017 Scholarly. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
    </div>
</div>
</html>