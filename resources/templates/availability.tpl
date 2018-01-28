{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/availability.js"></script>
{/block}

{block name="content"}
    <div class="container">
        <br>
        <h2 class="text-center">Le mie disponibilità</h2>
        <br>
        Di seguito è presente la lista delle disponibilità che hai dato, per rimuoverla fai click sull'icona, per
        aggiungere altre disponibilità <a data-toggle="modal" href="#addAvailability">clicca qui</a>.<br><br>
        <hr>
        <br>
        {foreach from=$availabilities item=availability}
            <div class="card ">
                <div class="row ">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="card-block">
                            <h4 class="card-title">Dispobilità per il {$availability->date}
                                alle {$availability->time}</h4>
                            <p class="card-text">Ti sei reso disponibile per giocare a <b>{$availability->sport}</b></p>
                            <p class="card-text">Presso <b>{$availability->partner}</b></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <i data-id="{$availability->id}" class="fa fa-trash delete" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addAvailability" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Aggiungi disponilità</h3>
                    In questa pagina può aggiungere giorni in cui sei disponibile a giocare cosi che gli altri
                    giocatori, in caso di necessità , possano contattarti!<br><br>


                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveSearch" type="button" class="btn btn-primary">Fatto</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}