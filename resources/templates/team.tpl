{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/team.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Inserimento squadra</h2>
    <br>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
    <div class="container">
    <h3>Riepilogo dati torneo:</h3>
    <table class="user-info">
        <tr>
            <td>Nome torneo:</td>
            <td>{$tournament->tournament}</td>
        </tr>
        <tr>
            <td>Sport:</td>
            <td>{$tournament->sport}</td>
        </tr>
        <tr>
            <td>Numero di giocatori per squadra:</td>
            <td>{$tournament->number_players}</td>
        </tr>
        <tr>
            <td>Data inizio:</td>
            <td>{$tournament->startDate}</td>
        </tr>
        <tr>
            <td>Scadenza prenotazioni:</td>
            <td>{$tournament->endSubscription}</td>
        </tr>
        <tr>
            <td>Luogo svolgimento:</td>
            <td>{$tournament->partner} ({$tournament->region})</td>
        </tr>
        <tr>
            <td>Telefono:</td>
            <td>{$tournament->telnumber}</td>
        </tr>
    </table>
    <br>
    <hr>
    <br>
    Dati dell'utente loggato che svolge il capitano
    <br>
{for $foo=2 to $tournament->number_players}
    <div class="signin-form profile">
        {*<h3 class="agileinfo_sign">Registrati</h3>*}
        <div class="login-form container-fluid">
            <form method="post" id="playersData">
                <div class="row">
                    <div class="col-md-5"><label for="first_name">Nome:</label>
                        <input class="form_input" type="text" id="first_name" name="first_name"
                               placeholder="Nome"
                               required/></div>
                    <div class="col-md-5">
                        <label for="first_name">Cognome:</label>
                        <input class="form_input" type="text" id="last_name" name="last_name"
                               placeholder="Cognome"
                               required/></div>
                    <div class="col-md-2"><label for="first_name">Sesso:</label>
                        <select id="gender" class="form_input" name="gender" required>
                            <option selected value="m">M</option>
                            <option value="f">F</option>
                        </select>
                    </div>
                </div>
                {/for}
        </div>
{/block}