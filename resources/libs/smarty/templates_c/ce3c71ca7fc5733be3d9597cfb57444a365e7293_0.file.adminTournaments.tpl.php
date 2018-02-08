<?php
/* Smarty version 3.1.30, created on 2018-02-08 12:17:59
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminTournaments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c31e7b5a4f6_24819617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce3c71ca7fc5733be3d9597cfb57444a365e7293' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminTournaments.tpl',
      1 => 1518088676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7c31e7b5a4f6_24819617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4735889635a7c31e7b20949_24556443', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7815398395a7c31e7b23234_86547804', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13489778115a7c31e7b59181_08715495', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_4735889635a7c31e7b20949_24556443 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_7815398395a7c31e7b23234_86547804 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminTournaments.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_13489778115a7c31e7b59181_08715495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_SESSION['admin'])) {?>
        <h2 class="title">Gestione dei tornei.</h2>
        <br>
        <br>
        <section>
            <div class="container">
                Se il numero di posti disponibili è terminato è possibile creare il calendario delle partite del torneo
                facendo click sulla riga del torneo. <br>
                <hr>
                <br>
                <table id="tournamentsTable">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Sport</td>
                        <td>Giocatori per squadra</td>
                        <td>Numero squadre</td>
                        <td>Posti disponbili</td>
                        <td>Data inizio</td>
                        <td>Data fine iscrizioni</td>
                        <td>Azienda</td>
                        <td>Telefono</td>
                        <td>Partite</td>
                        <td>Sponsor</td>
                        <td>Premi</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tournaments']->value, 'tournament');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tournament']->value) {
?>
                        <tr class="<?php if ($_smarty_tpl->tpl_vars['tournament']->value->teamLeft == 0 && $_smarty_tpl->tpl_vars['tournament']->value->scheduled == 0) {?>pending<?php }?>">
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->sport;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->number_players;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->teamNumber;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->teamLeft;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->startDate;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->endSubscription;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->partner;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->telnumber;?>
</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>

                </table>

                <div class="row">
                    <div class="col-md-5 col-center-block">
                        <button class="signin-button" id="addTournament">Aggiungi torneo</button>
                    </div>
                </div>
            </div>
        </section>
    <?php } elseif (isset($_SESSION['moderator'])) {?>
        <h2 class="title">Gestione dei tornei azienda <?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
.</h2>
        <br>
        <br>
        <section>
            <div class="container">
                Se il numero di posti disponibili è terminato è possibile creare il calendario delle partite del torneo
                facendo click sulla riga del torneo. <br>
                <hr>
                <br>
                <table id="tournamentsTable">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Sport</td>
                        <td>Giocatori per squadra</td>
                        <td>Numero squadre</td>
                        <td>Posti disponbili</td>
                        <td>Data inizio</td>
                        <td>Data fine iscrizioni</td>
                        <td>Telefono</td>
                        <td>Partite</td>
                        <td>Sponsor</td>
                        <td>Premi</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tournaments']->value, 'tournament');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tournament']->value) {
?>
                        <tr class="<?php if ($_smarty_tpl->tpl_vars['tournament']->value->teamLeft == 0 && $_smarty_tpl->tpl_vars['tournament']->value->scheduled == 0) {?>pending<?php }?>">
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->sport;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->number_players;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->teamNumber;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->teamLeft;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->startDate;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->endSubscription;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->telnumber;?>
</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>

                </table>

                <div class="row">
                    <div class="col-md-5 col-center-block">
                        <button class="signin-button" id="addTournament">Aggiungi torneo</button>
                    </div>
                </div>
            </div>
        </section>
    <?php }?>
    <!-- Modal1 -->
    <div class="modal fade" id="scheduleCalendar" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Creazione calendario </h3>
                        Creazione del calendario associato al torneo in corso, attendi.....
                        <img src='public/images/loading.webp'/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="newTournament" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Inserimento nuovo torneo </h3>
                        <form id="newTournamentForm">
                            <div class="col-md-6 col-xs-6 col-center-block">
                                <ul>
                                    <li class="text">Nome torneo:</li>
                                    <li class="agileits-main">
                                        <input id="name" type="text" name="name" placeholder="Nome torneo"
                                               required/></li>
                                    <li class="text">Azienda:</li>
                                    <li class="agileits-main">
                                        <select id="selectPartner">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value, 'partner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['partner']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select></li>
                                    <li class="text">Data inizio:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="startDate" type="text" class="date"
                                               name="startDate"
                                               placeholder="Data inizio"
                                               required/></li>
                                    <li class="text">Data fine iscrizioni:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="endSubscription" type="text" class="date"
                                               name="endSubscription"
                                               placeholder="Data termine iscrizioni"
                                               required/></li>
                                    <li class="text">Numero squadre:
                                    </li>
                                    <li class="agileits-main">
                                        <input type="number" name="teamNumber" class="form-control"
                                               value="10" disabled/></li>
                                    <li class="text">Sport:
                                    </li>
                                    <li class="agileits-main">
                                        <select id="selectSport" class="form-control">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['sport']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sport']->value->name;?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select></li>
                                </ul>
                            </div>
                            <input type="submit" value="Inserisci"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
