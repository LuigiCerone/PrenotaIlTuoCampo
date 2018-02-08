{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminSponsors.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Gestione sponsor di un torneo.</h2>
    <br>
    <br>
    <section>
        <div class="container">
            Lista sponsor del torneo: <b>{$tournament->tournament}</b>
            <input id="tournament" class="hidden" value="{$tournament->id}"/>
            <br>
            <hr>
            <br>
            <table id="sponsorsTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Quota</td>
                    <td>Data</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$sponsors item=sponsor}
                    <tr>
                        <td>{$sponsor->id}</td>
                        <td>{$sponsor->name}</td>
                        <td>{$sponsor->money}</td>
                        <td>{$sponsor->date}</td>
                    </tr>
                {/foreach}
                </tbody>

            </table>
    </section>
    <div class="row">
        <div class="col-md-5 col-center-block">
            <button class="signin-button" id="addSponsor">Aggiungi sponsor</button>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="addSponsorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi sponsor</h3>
                        <div class="login-form">
                            <form id="sponsorForm" method="post">
                                <ul>
                                    <li class="text">Nome:
                                    </li>
                                    <li class="agileits-main">
                                        <select class="form-control" id="selectSponsor">
                                            {foreach from=$allsponsors item=allsponsor}
                                                <option value="{$allsponsor->id}">{$allsponsor->name}</option>
                                            {/foreach}
                                        </select></li>
                                    <li class="text">Quota:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="money" type="number" min="0" class="form-control"
                                               name="money"
                                               placeholder="Quota"
                                               required/></li>
                                </ul>
                                <input type="submit" value="Aggiungi"/>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}