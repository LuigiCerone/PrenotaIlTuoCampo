{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/team.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Riepilogo torneo, squadra e partite</h2>
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
                <td>Telefono struttura:</td>
                <td>{$tournament->telnumber}</td>
            </tr>
        </table>
        <br>
        <hr>
        <br>
        <h3>Riepilogo dati squadra:</h3>
        <table class="user-info">
            <tr>
                <td>Nome squadra:</td>
                <td>{$team->name}</td>
            </tr>
            <tr>
                <td>Numero:</td>
                <td>{$team->number}</td>
            </tr>
            <tr>
                <td>Capitano:</td>
                <td>{$team->user_fk}</td>
            </tr>
            <tr>
                <td>Lista giocatori</td>
                <td>{$team->players}</td>
            </tr>
        </table>
    </div>
{/block}