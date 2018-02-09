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
        <div class="chart-container">
            <canvas id="pileChart"></canvas>
        </div>
    </div>
{/block}


