{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/bookingReview.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Conferma prenotazione</h2>
    <br>
    <div class="container">
        {if ($smarty.session.id != null)}{/if}
        <h4><b>Riepilogo dati inseriti</b></h4>
        <table class="user-info">
            <tr>
                <td>Sport selezionato:</td>
                <td> {$booking->sport}</td>
            </tr>
            <tr>
                <td>Centro selezionato:</td>
                <td> {$booking->partner}</td>
            </tr>
            <tr>
                <td>Data selezionata:</td>
                <td> {$booking->date}</td>
            </tr>
            <tr>
                <td>Ora selezionata:</td>
                <td> {$booking->time}</td>
            </tr>
            <tr>
                <td>Provincia:</td>
                <td> {$booking->province} <b>({$booking->selectedProvince})</b>
                </td>
            </tr>
        </table>
        <br>
        <hr>
        Nel giorno e nella data selezionata la struttura dispone dei seguenti campi:
        {foreach from=$bookings item=booking}
            <div class="card ">
                <div class="row ">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-1">
                        <img src="public/images/booking.png" class="booking-img rounded-circle"/>
                    </div>
                    <div class="col-md-6">
                        <div class="card-block">
                            <h4 class="card-title">Prenotazione numero {$booking->id}</h4>
                            <p class="card-text">Data: {$booking->date}, ora: {$booking->time}</p>
                            <p class="card-text">Campo numero: {$booking->field_fk}</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <i data-id="{$booking->id}" class="fa fa-trash delete" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    </div>
    valore:
    {$booking->selectedSport}
    {$booking->selectedPartner}
    <!-- /banner -->
{/block}