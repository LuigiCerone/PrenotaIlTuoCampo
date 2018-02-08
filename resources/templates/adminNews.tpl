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
    <section>
        <div class="container">
            {foreach from=$news item=new}
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block">
                                <h4 class="card-title">Titolo:{$new->title}</h4><br>
                                <h6 class="card-title">Giorno:{$new->date}</h6>
                                <p class="card-text">Novità:{$new->text}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            {/foreach}
        </div>
    </section>
    <br>
    <hr>
    <br>
    <!-- /banner -->
    {if isset($smarty.session.id)}
        <span class="hidden" id="id">{$smarty.session.id}</span>
        <div class="col-md-6 col-center-block">
            <div class="signin-form profile">
                <form id="addNewForm" class="mod2">
                    <fieldset>
                        <legend>Inserisci nuova news</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" type="text" id="titleNews" name="insertTitle"
                                       placeholder="Inserisci il titolo"/>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" id="titleDate" name="titleDate" type="text"
                                       placeholder="Inserisci data" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" id="textNews" name="insertText" type="text"
                                       placeholder="Inserisci le nuove info" required/>
                            </div>
                        </div>
                    </fieldset>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-5 col-center-block">
                            <div class="agile-submit ">
                                <input type="submit" value="Inserisci">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    {/if}
{/block}