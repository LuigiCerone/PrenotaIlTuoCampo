<?php
/* Smarty version 3.1.30, created on 2018-02-03 14:13:04
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a75b560c84ca3_46537314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51a379622a3c939eba627034eb2d8202d7ff303' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/footer.tpl',
      1 => 1517663484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a75b560c84ca3_46537314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<div class="footer">
    <div class="container">
        <div class="wthree_footer_grid_left">
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                <h4>Su di noi</h4>
                <p>Questo sito permette di prenotare strutture sportive o partecipare a tornei organizzatis.</p>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                <?php if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {?>
                    <h4>Navigazione</h4>
                    <ul>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.php">Home</a>
                        </li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="adminPartners.php">Gestione
                                aziende</a>
                        </li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="adminReviews.php">Gestione
                                recensioni</a>
                        </li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="adminNews.php">Gestione
                                notività</a>
                        </li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="adminTournaments.php">Gestione
                                tornei</a>
                        </li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="adminBookings.php">Gestione
                                prenotazioni</a>
                        </li>

                    </ul>
                <?php } else { ?>
                    <h4>Navigazione</h4>
                    <ul>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.php">Home</a>
                        </li>

                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="parteners.php"
                                                                                          class="scroll">Aziende</a>
                        </li>

                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="reviews.php"
                                                                                          class="scroll">Recensioni</a>
                        </li>

                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="news.php"
                                                                                          class="scroll">Novità</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="tournaments.php"
                                                                                          class="scroll">Tornei</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="about_us.php"
                                                                                          class="scroll">Su di noi</a>
                        </li>
                    </ul>
                <?php }?>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
                <h4>Altro</h4>
                <ul>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
                <h4>Contattaci</h4>
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
</html><?php }
}
