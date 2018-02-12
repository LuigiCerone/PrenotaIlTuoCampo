{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/jquery.timepicker.min.js"></script>
    <script src="public/js/projectScript/repeatLastBookings.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Prenotazioni recenti</h2>
    <div class="container">
        Di seguito è presente una lista delle tue ultime prenotazioni.<br>
        Per ripetere una prenotazione è necessario <b>selezionarla</b> dalla lista e poi inserire data ed ora
        desiderati.<br>

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
        <hr>
        <form id="form" class="mod2" method="post" action="bookingReview.php" autocomplete="off">
            <input type="text" class="hidden" id="selectedBooking" name="selectedBooking"/>
            <div class="row">
                <div class="col-md-4">
                    <div class=" w3l-left-mk">
                        <ul>
                            <li class="text">Prenotazione :</li>
                            <li class="agileits-main"><i class="fa fa-book profile-item" aria-hidden="true"></i><input
                                        type="text" value="" id="booking"
                                        placeholder="Prenotazione da ripetere" required/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6 col-xs-6 w3l-left-mk">
                        <ul>
                            <li class="text">Data</li>
                            <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                        class="date" id="datepicker" placeholder="Data" name="date" type="text"
                                        value=""
                                        required/>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 w3l-left-mk">
                        <ul>
                            <li class="text">Ora :</li>
                            <li class="agileits-main"><i class="fa fa-clock-o" aria-hidden="true"></i><input
                                        class="date" placeholder="Ora" name="time" id="timepicker" type="text"
                                        value=""
                                        required/>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-center-block">
                    <input type="submit" class="signin-button" id="saveBooking" value="Prenota"/>
                </div>
            </div>
        </form>
    </div>
    <div id="snackbar">Selezionare la prenotazione dalla tabella!</div>
{/block}


