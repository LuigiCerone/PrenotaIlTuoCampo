{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/bookings.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Le mie prenotazioni</h2>
    <div class="container">
        <div class="col-center-block">
            {*<div class="list-group">*}
            {foreach from=$bookings item=booking}
                <div class="card">
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
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    </div>
    <!-- /banner -->
{/block}

{*<a class="list-group-item clearfix bookings">*}
{*<div class="d-flex w-100 justify-content-between">*}
{*<h5 class="mb-1">Prenotazione numero {$booking->id}</h5>*}
{*</div>*}
{*<br>*}
{*<p class="mb-1">Data: {$booking->date} , ora: {$booking->time}</p>*}
{*<p class="mb-1">Struttura: {$booking->field_fk}</p>*}
{*<span class="pull-right">*}
{*<span class="btn btn-xs btn-default">*}
{*<i class="fa fa-trash" aria-hidden="true"></i>*}
{*</span>*}
{*</a>*}