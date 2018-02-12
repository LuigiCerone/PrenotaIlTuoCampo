<?php
/* Smarty version 3.1.30, created on 2018-02-12 17:03:35
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a81bad79463f7_75018777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51a379622a3c939eba627034eb2d8202d7ff303' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/footer.tpl',
      1 => 1518451410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a81bad79463f7_75018777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<div class="footer">
    <div class="container">
        <?php if (isset($_SESSION['id']) && !isset($_SESSION['admin']) && !isset($_SESSION['moderator'])) {?>
        <div class="wthree_footer_grid_left">
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                <h4>Su di noi</h4>
                <p>Questo sito permette di prenotare strutture sportive o partecipare a tornei organizzatis.</p>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                <h4>Navigazione</h4>
                <ul>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="userInfo.php"
                                                                                      class="scroll">Il mio
                            profilo</a>
                    </li>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="bookings.php"
                                                                                      class="scroll">Le mie
                            prenotazioni</a>
                    </li>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="invitations.php"
                                                                                      class="scroll">I miei
                            inviti</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="availability.php"
                                                                                      class="scroll">Le mie
                            disponibilità</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="userTournaments.php"
                                                                                      class="scroll">I miei
                            tornei</a>
                    </li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="stats.php"
                                                                                      class="scroll">Le mie
                            statistiche</a>
                    </li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a id="logout2" href="index.php"
                                                                                      class="scroll">Esci</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">
                <h4>Info per aziende</h4>
                <p>Se sei un'azienda e vuoi entrare nella nostra rete non esitare a contattarci!</p>
                <br><br>
                <img class="img_partner img-responsive center-block" src="public/images/become_a_partner.png"
                     alt="Immagine dimostrativa"/>
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
    <?php } else { ?>
    <div class="wthree_footer_grid_left">
        <div class="col-md-4 col-xs-4 wthree_footer_grid_left1">
            <h4>Su di noi</h4>
            <p>Questo sito permette di prenotare strutture sportive o partecipare a tornei organizzatis.</p>
        </div>
        <div class="col-md-4 col-xs-4 wthree_footer_grid_left1 w3l-3">
            <h4>Info per aziende</h4>
            <p>Se sei un'azienda e vuoi entrare nella nostra rete non esitare a contattarci!</p>
            <br><br>
            <img class="img_partner img-responsive center-block" src="public/images/become_a_partner.png"
                 alt="Immagine dimostrativa"/>
        </div>
        <div class="col-md-4 col-xs-4 wthree_footer_grid_left1 wthree_footer_grid_right1">
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
<?php }?>
</div>
<div class="w3layouts_copy_right">
    <div class="container">
        <p>© 2017 Scholarly. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
    </div>
</div>
</html><?php }
}
