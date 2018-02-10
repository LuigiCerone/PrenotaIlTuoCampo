{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/tiles.css"/>
{/block}


{block name="js" append}
    <script src="public/js/projectScript/profile.js"></script>
{/block}

{block name="content"}
    <div class="tiles_container break-text">
        <br>
        <h3 class="text-center">Area riservata utente</h3>
        <br>
        <ul class="grid">
            <li class="grid_item span__4 g"><a href="" class="not-hoverable grid_link">
                    <div class="tile">
                        <div class="content-slider">
                            <div class="slider">
                                <div class="mask">
                                    <ul>
                                        <li class="anim1">
                                            <div class="quote">Gay</div>
                                        </li>
                                        <li class="anim2">
                                            <div class="quote">Cane</div>
                                        </li>
                                        <li class="anim3">
                                            <div class="quote">Maiale</div>
                                        </li>
                                        <li class="anim4">
                                            <div class="quote">Porco</div>
                                        </li>
                                        <li class="anim5">
                                            <div class="quote">Cazzo</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable g"><a href="stats.php" class="grid_link">
                    <div class="tile">
                        <i class="fa fa-line-chart profile-item" aria-hidden="true"></i><br>Statistiche
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable a"><a href="repeatLastBookings.php" class="grid_link">
                    <div class="tile">
                        <i class="fa fa-repeat profile-item" aria-hidden="true"></i><br>Ripeti recenti
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable a"><a href="userInfo.php" class="grid_link">

                    <div class="tile"><i class="fa fa-id-card-o profile-item" aria-hidden="true"></i><br>Dati personali
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable b"><a href="bookings.php" class="grid_link">
                    <div class="tile"><i class="fa fa-book profile-item" aria-hidden="true"></i>
                        <br>Le miei prenotazioni
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable c"><a href="invitations.php" class="grid_link">
                    <div class="tile"><i class="fa fa-comments-o profile-item" aria-hidden="true"></i>
                        <br>I miei inviti
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable d"><a href="availability.php" class="grid_link">
                    <div class="tile"><i class="fa fa-calendar-o profile-item" aria-hidden="true"></i><br>Le mie
                        disponibilità
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable e"><a href="userTournaments.php" class="grid_link">
                    <div class="tile"><i class="fa fa-trophy profile-item" aria-hidden="true"></i>
                        <br>I miei tornei
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable f"><a href="index.php" id="logout" class="grid_link">
                    <div class="tile"><i class="fa fa-sign-out profile-item" aria-hidden="true"></i>
                        <br>Esci
                    </div>
                </a></li>
        </ul>
        <div class="clear"></div>
        <br/>
    </div>
{/block}