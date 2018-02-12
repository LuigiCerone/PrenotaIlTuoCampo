<html>
<div class="footer">
    <div class="container">
        {if isset($smarty.session.id) && !isset($smarty.session.admin) && !isset($smarty.session.moderator)}
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
    {else}
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
{/if}
</div>
<div class="w3layouts_copy_right">
    <div class="container">
        <p>© 2017 Scholarly. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
    </div>
</div>
</html>