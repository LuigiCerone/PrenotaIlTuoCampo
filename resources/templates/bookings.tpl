{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/bookings.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Le mie prenotazioni</h2>
    <br>
    {foreach from=$bookings item=booking}
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Prenotazione numero {$booking->id}</h4>
                                <p class="card-text">In data: {$booking->date}, alle ore: {$bookings->time}</p>
                                <p class="card-text">Struttura: {$booking->field_fk}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-img-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {/foreach}
    <!-- /banner -->
{/block}