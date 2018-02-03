{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="public/js/projectScript/adminNews.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Ultime novità!</h2>
    {*{$partners->partners|json_encode}*}
    <br>
    {foreach from=$news item=novita}
        <section>
            <div class="container">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block">
                                <h4 class="card-title">Titolo:{$novita->title}</h4>
                                <h6 class="card-title">Giorno:{$novita->date}</h6>
                                <p class="card-text">Novità:{$novita->text}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {/foreach}
    <!-- /banner -->
    {*New Novita*}
    {if ($smarty.session.id != null)}
        <span class="hidden" id="id">{$smarty.session.id}</span>
        <div class="row" id="post-news-box">
            <div class="col-md-6 col-center-block">
                <form accept-charset="UTF-8" action="" method="post">
                    <textarea class="form-control animated" cols="30" id="titleNews" name="insertTitle"
                              placeholder="Inserisci il titolo" rows="1"></textarea>
                    <textarea class="form-control animated" cols="20" id="titleDate" name="insertDate"
                              placeholder="Inserisci la data aaaa/mm/gg" rows="1"></textarea>
                    <textarea class="form-control animated" cols="50" id="textNews" name="insertText"
                              placeholder="Inserisci le nuove info" rows="5"></textarea>

                    <br>
                    <button id="saveNews" class="btn btn-success btn-lg" type="submit">Salva
                    </button>
                </form>
            </div>
        </div>
    {/if}
    <!-- /banner -->
{/block}