<?php
/* Smarty version 3.1.30, created on 2018-02-02 12:23:54
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/userTournaments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a744a4a43f3f1_06764316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d9c0a72e97dec6c1822c247d0ad7d10f1301f9' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/userTournaments.tpl',
      1 => 1517570631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a744a4a43f3f1_06764316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7915727975a744a4a42ada6_62039422', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17367256485a744a4a42dfe7_51126883', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12521738665a744a4a43e589_58274645', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_7915727975a744a4a42ada6_62039422 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_17367256485a744a4a42dfe7_51126883 extends Smarty_Internal_Block
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
class Block_12521738665a744a4a43e589_58274645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title"> I miei tornei</h2>
    <br>
    
    <br>
    <section>
        <div class="container">
            Seleziona una delle squadre di cui risulti essere il capitano per accedere alle informazioni del
            relativo torneo:
            <br>
            <hr>
            <br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
                <form action="tournamentTeamPage.php" method="post" id="displayInfo">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3">
                                INSERIRE FOTO
                            </div>
                            <div class="col-md-6">
                                <div class="card-block">
                                    <h4 class="card-title">Squadra <?php echo $_smarty_tpl->tpl_vars['team']->value->name;?>
</h4>
                                    <p class="card-text"><b>Numero squadra:</b> <?php echo $_smarty_tpl->tpl_vars['team']->value->number;?>
</p>
                                    <p class="card-text">Giocatori:<?php echo $_smarty_tpl->tpl_vars['team']->value->players;?>
</p>
                                    <p class="card-text">Iscritta al torneo <?php echo $_smarty_tpl->tpl_vars['team']->value->tournamentName;?>
</p>
                                    <input name="team" id="team" type="text" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['team']->value->id;?>
"/>
                                    <input name="tournament" id="tournament" type="text" class="hidden"
                                           value="<?php echo $_smarty_tpl->tpl_vars['team']->value->tournament;?>
"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input type="submit" class="signin-button" value="Vai"/>
                            </div>
                        </div>
                    </div>
                </form>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </section>
<?php
}
}
/* {/block "content"} */
}
