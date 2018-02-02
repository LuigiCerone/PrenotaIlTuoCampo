<?php
/* Smarty version 3.1.30, created on 2018-02-02 11:45:40
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminMatches.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a744154938c91_55963505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff885e338196b7e78970565e40a861eebb79a020' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminMatches.tpl',
      1 => 1517568327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a744154938c91_55963505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2238683575a7441548fb012_45707203', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1829807925a7441548fe6b2_53520691', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21358137895a744154937747_88793022', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_2238683575a7441548fb012_45707203 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="public/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_1829807925a7441548fe6b2_53520691 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/JSZip-2.5.0/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/pdfmake-0.1.32/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/pdfmake-0.1.32/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="public/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/adminMatches.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_21358137895a744154937747_88793022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Gestione delle partite associate ad un torneo.</h2>
    <br>
    
    <br>
    <section>
        <div class="container">
            Informazioni relative al torneo <?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
. Fare click sulla riga della tabella per
            modificare.
            <input id="sport" type="text" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tournament']->value->sportId;?>
"/>
            <input id="partner" type="text" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tournament']->value->partnerId;?>
"/>
            <input id="tournament" type="text" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
"/>
            <br>
            <hr>
            <br>
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

            </div>
        </div>
    </section>
    <!-- Modal1 -->
    <div class="modal fade" id="modifyMatch" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs">
                    <li class="nav-item active">
                        <a data-toggle="tab" class="nav-link"
                           href="#match_info">Dati partita</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" class="nav-link"
                           href="#match_result">Risultati partita</a>
                    </li>
                </ul>

                
                <div class="tab-content">
                    <div id="match_info" class="tab-pane active">

                        <div class="signin-form profile">
                            <h3 class="agileinfo_sign">Modifica dati partita </h3>
                            <form id="formInfo" class="mod2">
                                <div class="col-md-6 col-xs-6 w3l-left-mk">
                                    <ul>
                                        <li class="text">Data :</li>
                                        <li class="agileits-main"><i class="fa fa-calendar"
                                                                     aria-hidden="true"></i><input
                                                    class="date" id="dateMatch" placeholder="Data" name="date"
                                                    type="text"
                                                    value=""
                                                    required/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-6 w3l-right-mk">
                                    <ul>
                                        <li class="text">Ora :</li>
                                        <li class="agileits-main"><i class="fa fa-clock-o"
                                                                     aria-hidden="true"></i><input
                                                    class="date" placeholder="Ora" name="time" id="timeMatch"
                                                    type="text"
                                                    value=""
                                                    required/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-center-block">
                                    <button id="searchFields" class="signin-button">Cerca</button>
                                </div>
                                <div id="fields" class="col-md-8 col-center-block">

                                </div>

                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-5 col-center-block">
                                        <div class="agile-submit ">
                                            <input type="submit" value="Modifica">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    
                    <div id="match_result" class="tab-pane">
                        <div class="signin-form profile">
                            <h3 class="agileinfo_sign">Modifica risultato partita </h3>
                            <form id="formResult" class="mod2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="firstTeamScore"><input
                                                    class="number" id="firstTeamScore"
                                                    name="firstTeamScore"
                                                    type="number" min="0" max="30"
                                                    value="0"
                                                    required/> &nbsp; Goal squadra casa</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="secondTeamScore"><input
                                                    class="number" name="secondTeamScore"
                                                    id="secondTeamScore" min="0" max="30"
                                                    type="number"
                                                    value="0"
                                                    required/> &nbsp;Goal squadra ospite</label>
                                    </div>
                                </div>
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
                </div>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
