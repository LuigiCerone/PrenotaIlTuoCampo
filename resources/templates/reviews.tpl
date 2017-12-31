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
    {foreach from=$reviews->reviews item=review}
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block">
                                <h4 class="card-title">Recensione di {$review->username}</h4>
                                <p class="card-text">Cras convallis ut turpis vitae facilisis. Morbi eu augue vel quam
                                    efficitur rhoncus vitae eget lectus. Cras augue ligula, aliquam ut enim ut, feugiat
                                    imperdiet sem. Integer sed mi quis nisl eleifend interdum.</p>
                                <p class="pull-right"><input type="number" name="rating" id="stars_rating" data-icon-lib="fa"
                                           data-active-icon="fa-star" data-inactive-icon=" fa-star-o" class="rating bigger" value="{$review->value}" data-readonly/>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {/foreach}
    <!-- /banner -->
{/block}