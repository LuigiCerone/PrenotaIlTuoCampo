{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/reviews.js"></script>
    <script src="public/js/bootstrap-rating-input.min.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Cosa dicono di noi?</h2>
    {*{$partners->partners|json_encode}*}
    <br>
    <section>
        <div class="container break-text">
            {foreach from=$reviews item=review}
                <div class="row">
                    <div class="card">
                        <div class="card-block ">
                            <div class="col-md-6">
                                <h4 class="card-title">Recensione di {$review->firstName}</h4>
                                <p class="card-text">{$review->text}</p>
                            </div>
                            <div class="col-md-5">
                                <input type="number" name="rating" id="stars_rating"
                                       data-icon-lib="fa"
                                       data-active-icon="fa-star"
                                       data-inactive-icon=" fa-star-o"
                                       class="rating bigger"
                                       value="{$review->stars}"
                                       data-readonly/>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            {/foreach}
        </div>
    </section>
    {*New review*}
    {if isset($smarty.session.id)}
        <span class="hidden" id="id">{$smarty.session.id}</span>
        <div class="row" id="post-review-box">
            <div class="col-md-6 col-center-block">
                <form accept-charset="UTF-8" action="" method="post">
                    <textarea class="form-control animated" cols="50" id="reviewText" name="comment"
                              placeholder="Inserisci la tua recensione qui..." rows="5"></textarea>

                    <div class="text-right">
                        <input type="number" name="rating" id="reviewStars" data-icon-lib="fa"
                               data-active-icon="fa-star" data-inactive-icon=" fa-star-o" class="rating bigger"
                               value="1"/>
                        <br>
                        <button id="saveReview" class="btn btn-success btn-lg" type="submit">Salva
                        </button>
                    </div>
                </form>
            </div>
        </div>
    {/if}
    <!-- /banner -->
{/block}