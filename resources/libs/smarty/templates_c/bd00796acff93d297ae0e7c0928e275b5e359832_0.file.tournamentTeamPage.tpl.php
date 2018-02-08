<?php
/* Smarty version 3.1.30, created on 2018-02-07 14:10:37
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentTeamPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7afacdab1515_84858441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd00796acff93d297ae0e7c0928e275b5e359832' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentTeamPage.tpl',
      1 => 1518009015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7afacdab1515_84858441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20441328765a7afacda5c542_30198780', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14223887735a7afacda5eff5_92238655', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13394195745a7afacdaaf752_37047214', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_20441328765a7afacda5c542_30198780 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_14223887735a7afacda5eff5_92238655 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/tournaments.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_13394195745a7afacdaaf752_37047214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Riepilogo torneo, squadra e partite</h2>
    <br>
    <br>
    <section>
    <div class="container">
        <h3>Riepilogo dati torneo:</h3>
        <table class="user-info">
            <tr>
                <td>Nome torneo:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
</td>
            </tr>
            <tr>
                <td>Sport:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->sport;?>
</td>
            </tr>
            <tr>
                <td>Numero di giocatori per squadra:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->number_players;?>
</td>
            </tr>
            <tr>
                <td>Data inizio:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->startDate;?>
</td>
            </tr>
            <tr>
                <td>Scadenza prenotazioni:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->endSubscription;?>
</td>
            </tr>
            <tr>
                <td>Luogo svolgimento:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->partner;?>
 (<?php echo $_smarty_tpl->tpl_vars['tournament']->value->region;?>
)</td>
            </tr>
            <tr>
                <td>Telefono struttura:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->telnumber;?>
</td>
            </tr>
        </table>
        <br>
        <hr>
        <br>
        <h3>Riepilogo dati squadra:</h3>
        <table class="user-info">
            <tr>
                <td>Nome squadra:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['team']->value->name;?>
</td>
            </tr>
            <tr>
                <td>Numero:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['team']->value->number;?>
</td>
            </tr>
            <tr>
                <td>Capitano:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['captain']->value->firstName;?>
 <?php echo $_smarty_tpl->tpl_vars['captain']->value->lastName;?>
</td>
            </tr>
            <tr>
                <td>Lista giocatori</td>
                <td><?php echo $_smarty_tpl->tpl_vars['team']->value->players;?>
</td>
            </tr>
        </table>
    </div>
    <br>
    <hr>
    <br>
    <div class=" container text-center">
    <?php if (isset($_smarty_tpl->tpl_vars['ranks']->value)) {?>
        <h3>Classifica attuale </h3>
        <table id="ranks" width="50%">
            <thead>
            <tr>
                <td>Squadra</td>
                <td>Punti</td>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ranks']->value, 'rank');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rank']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['rank']->value->teamName;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rank']->value->point;?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    <?php } else { ?>
        <h3 class="text-center">Classifica ancora non disponibile</h3>
    <?php }?>
    <br>
    <hr>
    <br>
<?php if ($_smarty_tpl->tpl_vars['days']->value != null) {?>
    <h3>Calendario</h3>
    <ul id="tabs" class="nav nav-tabs">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link"
                   href="#table_<?php echo $_smarty_tpl->tpl_vars['day']->value[0]->day;?>
">Giornata <?php echo $_smarty_tpl->tpl_vars['day']->value[0]->day+1;?>

                </a>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    <br>
    <div class="tab-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
            <div class="tab-pane" id="table_<?php echo $_smarty_tpl->tpl_vars['day']->value[0]->day;?>
">
                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>first_teamId</td>
                        <td>second_teamId</td>
                        <td>Giornata</td>
                        <td>Squadra casa</td>
                        <td>Squadra ospite</td>
                        <td>Data</td>
                        <td>Ora</td>
                        <td>Azienda</td>
                        <td>Campo</td>
                        <td>Risultato</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['day']->value, 'match');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['match']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->match_id;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->first_teamId;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->second_teamId;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->day+1;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->first_team;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['match']->value->second_team;?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['match']->value->date == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->date;
}?></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['match']->value->time == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->time;
}?></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['match']->value->partner == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->partner;
}?></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['match']->value->number == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->number;
}?></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['match']->value->result == null) {?> - <?php } else {
echo $_smarty_tpl->tpl_vars['match']->value->result;
}?></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
        <h3 class="text-center">Calendario ancora non disponibile</h3>
        <?php }?>

        <br>
        <hr>
        <br>
    </div>
<?php
}
}
/* {/block "content"} */
}
