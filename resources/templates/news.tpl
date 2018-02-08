{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/news.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Ultime novità!</h2>
    {*{$partners->partners|json_encode}*}
    <br>
    {foreach from=$news item=new}
        <section>
            <div class="container">
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
            </div>
        </section>
    {/foreach}
{/block}