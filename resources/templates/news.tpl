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
        <div class="container">
            <div id="pagination">
                {foreach from=$news item=new}
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-block">
                                    <h4 class="card-title">Titolo:{$new->title}</h4>
                                    <h6 class="card-title">Giorno:{$new->date}</h6>
                                    <p class="card-text">Novità:{$new->text}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </section>
{/block}