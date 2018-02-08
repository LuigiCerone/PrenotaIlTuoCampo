{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/tiles.css"/>
{/block}


{block name="js" append}
    <script src="public/js/projectScript/profile.js"></script>
{/block}

{block name="content"}
    <div class="tiles_container">
        <br>
        <h3 class="text-center">Area riservata utente</h3>
        <br>
        <ul class="grid">
            <li class="grid_item span__2 g"><a href="#" class="grid_link">
                    <div class="tile">Statistiche se possibile</div>
                </a></li>
            <li class="grid_item span__2 a"><a href="#" class="grid_link">
                    <div class="tile">Ripeti recenti</div>
                </a></li>
            <li class="grid_item span__1 a"><a href="userInfo.php" class="grid_link">
                    <div class="tile">Dati personali</div>
                </a></li>
            <li class="grid_item span__2 b"><a href="bookings.php" class="grid_link">
                    <div class="tile">Le miei prenotazioni</div>
                </a></li>
            <li class="grid_item span__1 c"><a href="invitations.php" class="grid_link">
                    <div class="tile">I miei inviti</div>
                </a></li>
            <li class="grid_item span__2 d"><a href="availability.php" class="grid_link">
                    <div class="tile">Le mie disponibilità</div>
                </a></li>
            <li class="grid_item span__1 e"><a href="userTournaments.php" class="grid_link">
                    <div class="tile">I miei tornei</div>
                </a></li>
            <li class="grid_item span__1 f"><a href="index.php" id="logout" class="grid_link">
                    <div class="tile">Esci</div>
                </a></li>

        </ul>
        <br>
    </div>
    <br>
    <br>
{/block}