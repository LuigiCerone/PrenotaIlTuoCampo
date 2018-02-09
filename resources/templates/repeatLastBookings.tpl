{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/repeatLastBookings.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Prenotazioni recenti</h2>
    <div class="container">
        Di seguito è presente una lista delle tue ultime prenotazioni.

        <table id="bookings">
            <thead>
            <tr>
                <td>ID</td>
                <td>Data</td>
                <td>Ora</td>
                <td>Struttura</td>
            </tr>
            </thead>
            <tbody>
            {foreach from=$bookings item=booking}
                <tr>
                    <td>{$booking->id}</td>
                    <td>{$booking->date}</td>
                    <td>{$booking->time}</td>
                    <td>{$booking->name}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
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


