<html>
<div class="footer">
    <div class="container">
        <div class="wthree_footer_grid_left">
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                <h4>Su di noi</h4>
                <p>Questo sito permette di prenotare strutture sportive o partecipare a tornei organizzatis.</p>
            </div>
            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
                {if isset($smarty.session.id) && isset($smarty.session.admin)}
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
                {else}
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
                {/if}
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
</div>
<div class="w3layouts_copy_right">
    <div class="container">
        <p>© 2017 Scholarly. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
    </div>
</div>
</html>