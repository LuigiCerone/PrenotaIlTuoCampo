{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/tournaments.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Riepilogo torneo, squadra e partite</h2>
    <br>
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
    <br>
    <hr>
    <br>
    <div class=" container text-center">
    {if isset($ranks)}
        <h3>Classifica attuale </h3>
        <table id="ranks" width="50%">
            <thead>
            <tr>
                <td>Squadra</td>
                <td>Punti</td>
            </tr>
            </thead>
            <tbody>
            {foreach from=$ranks item=rank}
                <tr>
                    <td>{$rank->teamName}</td>
                    <td>{$rank->point}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    {else}
        <h3 class="text-center">Classifica ancora non disponibile</h3>
    {/if}
    <br>
    <hr>
    <br>
{if $days != null}
    <h3>Calendario</h3>
    <ul id="tabs" class="nav nav-tabs">
        {foreach from=$days item=day}
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link"
                   href="#table_{$day[0]->day}">Giornata {$day[0]->day +1 }
                </a>
            </li>
        {/foreach}
    </ul>
    <br>
    <div class="tab-content">
        {foreach from=$days item=day}
            <div class="tab-pane" id="table_{$day[0]->day}">
                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>first_teamId</td>
                        <td>second_teamId</td>
                        <td>Giornata</td>
                        <td>Squadra casa</td>
                        <td>Squadra ospite</td>
                        <td>Data</td>
                        <td>Ora</td>
                        <td>Azienda</td>
                        <td>Campo</td>
                        <td>Risultato</td>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$day item=match}
                        <tr>
                            <td>{$match->match_id}</td>
                            <td>{$match->first_teamId}</td>
                            <td>{$match->second_teamId}</td>
                            <td>{$match->day + 1}</td>
                            <td>{$match->first_team}</td>
                            <td>{$match->second_team}</td>
                            <td>{if $match->date == null} - {else}{$match->date}{/if}</td>
                            <td>{if $match->time == null} - {else}{$match->time}{/if}</td>
                            <td>{if $match->partner == null} - {else}{$match->partner}{/if}</td>
                            <td>{if $match->number == null} - {else}{$match->number}{/if}</td>
                            <td>{if $match->result == null} - {else}{$match->result}{/if}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        {/foreach}
        {else}
        <h3 class="text-center">Calendario ancora non disponibile</h3>
        {/if}

        <br>
        <hr>
        <br>
    </div>
{/block}