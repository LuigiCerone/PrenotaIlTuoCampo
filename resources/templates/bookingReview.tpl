{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/bookingReview.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Conferma prenotazione</h2>
    <br>
    {$booking->selectedSport}
    <!-- /banner -->
{/block}