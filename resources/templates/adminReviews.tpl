{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminReviews.js"></script>
    <script src="public/js/bootstrap-rating-input.min.js"></script>
{/block}

{block name="content"}
<h3 class="title">Le nuove recensoni</h3>
<div class="container">
    {if isset($reviews)}
        {foreach from=$reviews item=review}
            <section>
                <div class="container">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-block">
                                    <h4 class="card-title">Recensione di {$review->firstName}</h4>
                                    <p class="card-text">{$review->text}</p>
                                    {*<p class="pull-right"><input type="number" name="rating" id="stars_rating"*}
                                    {*data-icon-lib="fa"*}
                                    {*data-active-icon="fa-star" data-inactive-icon=" fa-star-o"*}
                                    {*class="rating bigger" value="{$review->stars}"*}
                                    {*data-readonly/>*}
                                    {*</p>*}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <i data-id="{$review->id}" class="fa fa-check add" aria-hidden="true"></i>
                                <i data-id="{$review->id}" class="fa fa-trash delete" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {/foreach}
    {else}
        <h4>Non ci sono nuove recensioni da approvare!</h4>
    {/if}

    <!-- Modal1 -->
    <div class="modal fade" id="saveReview" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Approva Recensione</h3>
                    Sei sicuro di voler approvare?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="saveButton" type="button" class="btn btn-primary">Si</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annulla
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal1 -->
    <div class="modal fade" id="deleteReview" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="agileinfo_sign">Elimina Recensione</h3>
                    Sei sicuro di voler eliminare?
                    <span id="error"></span>
                    <div class="modal-footer">
                        <button id="deleteButton" type="button" class="btn btn-primary">Rimuovi</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">Annulla
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/block}


