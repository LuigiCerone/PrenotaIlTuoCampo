{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminBookings.js"></script>
{/block}

{block name="content"}
    <div class="container">
        <h3 class="title">Prenotazioni per cui è stata richiesta una disdetta </h3>
        <table id="notValidBookingTable">
            <thead>
            <tr>
                <td>ID</td>
                <td>Data</td>
                <td>Ora</td>
                <td>Dati persona</td>
                <td>Approva disdetta</td>
            </tr>
            </thead>
            <tbody>
            {foreach from=$notValidBookings item=notValid}
                <tr>
                    <td>{$notValid->id}</td>
                    <td>{$notValid->date}</td>
                    <td>{$notValid->time}</td>
                    <td>{$notValid->firstName} {$notValid->lastName}</td>
                    <td></td>
                </tr>
            {/foreach}
            </tbody>
        </table>

        <br>
        <hr>
        <br>
        <h3 class="title">Prenotazioni da approvare </h3>
        <table id="notApprovedBookingTable">
            <thead>
            <tr>
                <td>ID</td>
                <td>Data</td>
                <td>Ora</td>
                <td>Dati persona</td>
                <td>Approva prenotazione</td>
            </tr>
            </thead>
            <tbody>
            {foreach from=$notApprovedBookings item=notApproved}
                <tr>
                    <td>{$notApproved->id}</td>
                    <td>{$notApproved->date}</td>
                    <td>{$notApproved->time}</td>
                    <td>{$notApproved->firstName} {$notApproved->lastName}</td>
                    <td></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
{/block}


