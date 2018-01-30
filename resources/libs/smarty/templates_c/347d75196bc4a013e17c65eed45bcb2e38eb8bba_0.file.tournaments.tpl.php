<?php
/* Smarty version 3.1.30, created on 2018-01-30 19:48:56
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournaments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70be184b76c9_78997758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347d75196bc4a013e17c65eed45bcb2e38eb8bba' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournaments.tpl',
      1 => 1517338133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a70be184b76c9_78997758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16945585985a70be1849cc43_60895038', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4390693905a70be1849fa77_73001313', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6617909985a70be184b6983_82373763', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_16945585985a70be1849cc43_60895038 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_4390693905a70be1849fa77_73001313 extends Smarty_Internal_Block
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
class Block_6617909985a70be184b6983_82373763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">I noi tornei</h2>
    <br>
    
    <br>
    <section>
        <div class="container">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tournaments']->value, 'tournament');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tournament']->value) {
?>
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">
                            INSERIRE FOTO
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Torneo <?php echo $_smarty_tpl->tpl_vars['tournament']->value->name;?>
</h4>
                                <p class="card-text"><b>Sport:</b> <?php echo $_smarty_tpl->tpl_vars['tournament']->value->sport;?>
, squadre
                                    da: <?php echo $_smarty_tpl->tpl_vars['tournament']->value->number_players;?>
</p>
                                <p class="card-text">Si svolge presso il centro <?php echo $_smarty_tpl->tpl_vars['tournament']->value->partner;?>

                                    (<?php echo $_smarty_tpl->tpl_vars['tournament']->value->region;?>
)<br> tel. <?php echo $_smarty_tpl->tpl_vars['tournament']->value->telnumber;?>
. Posti disponibili
                                    (squadre): <?php echo $_smarty_tpl->tpl_vars['tournament']->value->teamLeft;?>
</p>
                                <p class="card-text">Inizio torneo: <b><?php echo $_smarty_tpl->tpl_vars['tournament']->value->startDate;?>
</b>, iscrizioni
                                    entro: <b><?php echo $_smarty_tpl->tpl_vars['tournament']->value->endSubscription;?>
</b></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <?php if (($_SESSION['id'] != null)) {?>
                                <form action="team.php" method="post">
                                    <input name="id" type="text" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
"/>
                                    <input type="submit" class="signin-button" value="Partecipa"/>
                                </form>
                            <?php } else { ?>
                                <p>Per iscriverti è necessario essere registrati o avere effettuato l'accesso!</p>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </section>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}