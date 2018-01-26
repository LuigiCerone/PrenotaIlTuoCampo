{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/bookings.js"></script>
{/block}

{block name="content"}
<h2 class="title">Le mie prenotazioni</h2>
<div class="container">
    {*<div class="list-group">*}
    {foreach from=$bookings item=booking}
    {if $booking->valid == 1}
    <div class="card ">
        {elseif $booking->valid == 0}
        <div class="card not-valid" data-toggle="tooltip"
             title="La disdetta deve ancora essere approva dall'amministratore!">
            {/if}

            <div class="row">
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

    <!-- Modal1 -->
    <div class="modal fade" id="removeBooking" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Anullamento prenotazione</h3>
                    Sei sicuro di voler disdire la prenotazione?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveBooking" type="button" class="btn btn-primary">Si, disdici</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/block}


