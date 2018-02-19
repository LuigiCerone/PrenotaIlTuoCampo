{extends file='layout.tpl'}

{block name="css" append}
{/block}


{block name="js" append}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
    <script src="public/js/projectScript/stats.js"></script>
{/block}

{block name="content"}
    <h2 class="title">Le mie statistiche</h2>
    <div class="container">
        <div id="checkboxes">
            <input type="text" id="sportsNumber" class="hidden" value="{$sports|@count}"/>
            {foreach from=$sports item=sport}
                <div>
                    <input type="checkbox" id="{$sport->id}" name="supplies"
                           value="{$sport->name}">
                    <label for="{$sport->id}">{$sport->name}</label>
                </div>
            {/foreach}
        </div>
        <div class="chart-container">
            <canvas id="lineChart"></canvas>
        </div>
        <br>
        <hr>
        <br>
        <div class="chart-container">
            <canvas id="pileChart"></canvas>
        </div>
        <br>
        <hr>
        <br>
        <div class="chart-container">
            <canvas id="cakeChart"></canvas>
        </div>
        <br><br>
    </div>
{/block}


