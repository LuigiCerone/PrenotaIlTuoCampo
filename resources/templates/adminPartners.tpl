{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminPartners.js"></script>
{/block}

{block name="content"}
    <h2 class="title">I nostri principali partners.</h2>
    <br>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
        <div class="container">
            {foreach from=$partners item=partner}
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Centro sportivo {$partner->name}</h4>
                                <p class="card-text">{$partner->description}</p>
                                <p class="card-text">Vieni a trovarci o chiamaci al {$partner->telnumber}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-img-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </section>
    {*New review*}
    {if ($smarty.session.id != null)}
        <span class="hidden" id="id">{$smarty.session.id}</span>
        <div class="row" id="post-review-box">
            <div class="col-md-6 col-center-block">
                <form accept-charset="UTF-8" action="" method="post">
                    <textarea class="form-control animated" cols="30" id="partenersText" name="comment"
                              placeholder="Inserisci qui il nome dell'azienda" rows="1"></textarea>
                    <textarea class="form-control animated" cols="30" id="descriptionText" name="comment"
                              placeholder="Inserisci qui la descrizione " rows="2"></textarea>
                    <textarea class="form-control animated" cols="20" id="regionText" name="comment"
                              placeholder="Inserisci qui la regione " rows="1"></textarea>
                    <textarea class="form-control animated" cols="20" id="areaText" name="comment"
                              placeholder="Inserisci qui l'area " rows="1"></textarea>
                    <textarea class="form-control animated" cols="30" id="addressText" name="comment"
                              placeholder="Inserisci qui l'indirizzo " rows="1"></textarea>
                    <textarea class="form-control animated" cols="30" id="emailText" name="comment"
                              placeholder="Inserisci qui l'email " rows="1"></textarea>
                    <textarea class="form-control animated" cols="20" id="numberText" name="comment"
                              placeholder="Inserisci qui il numero di telefono" rows="1"></textarea>

                    {*<div class="text-right">*}
                        {*<input type="number" name="rating" id="reviewStars" data-icon-lib="fa"*}
                               {*data-active-icon="fa-star" data-inactive-icon=" fa-star-o" class="rating bigger"*}
                               {*value="1"/>*}
                        <br>
                        <button id="savePartners" class="btn btn-success btn-lg" type="submit">Salva
                        </button>
                    {*</div>*}
                </form>
            </div>
        </div>
    {/if}
    <!-- /banner -->
{/block}