{extends file='layout.tpl'}

{block name="css" append}
    <link rel="stylesheet" type="text/css" href="public/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
{/block}


{block name="js" append}
    <script src="public/js/jquery.timepicker.min.js"></script>
    <script type="text/javascript" src="public/js/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="public/js/pdfmake-0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="public/js/pdfmake-0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="public/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="public/js/buttons.html5.min.js"></script>
    <script src="public/js/projectScript/adminAwards.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Gestione delle partite associate ad un torneo.</h2>
    <br>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
        <div class="container">
            Lista premi del torneo: <b>{$tournament->tournament}</b>
            <input id="tournament" class="hidden" value="{$tournament->id}"/>
            <br>
            <hr>
            <br>
            <table id="awardsTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Posto</td>
                </tr>
                </thead>
                <tbody>
                {foreach from=$awards item=award}
                    <tr>
                        <td>{$award->id}</td>
                        <td>{$award->name}</td>
                        <td>{$award->place}</td>
                    </tr>
                {/foreach}
                </tbody>

            </table>
    </section>
    <div class="row">
        <div class="col-md-5 col-center-block">
            <button class="signin-button" id="addAward">Aggiungi premio</button>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="addAwardModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi premio</h3>
                        <div class="login-form">
                            <form id="awardForm" method="post">
                                <ul>
                                    <li class="text">Nome:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="name" type="text"
                                               name="name"
                                               placeholder="Nome premio"
                                               required/></li>
                                    <li class="text">Posto:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="place" type="number" min="0"
                                               name="place"
                                               placeholder="Posizione"
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