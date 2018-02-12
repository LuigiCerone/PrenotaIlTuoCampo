{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/jquery.easyPaginate.js"></script>
    <script src="public/js/projectScript/news.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Ultime novità!</h2>
    <br>
    <section>
        <div class="container  break-text">
            <div id="pagination">
                {foreach from=$news item=new}
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title"><b>Titolo:</b> {$new->title}</h4>
                                    <p class="card-text">{$new->date}</p>
                                    <p class="card-text">{$new->text}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <hr>
                            <br>
                        </div>

                    </div>
                {/foreach}
            </div>
        </div>
    </section>
{/block}