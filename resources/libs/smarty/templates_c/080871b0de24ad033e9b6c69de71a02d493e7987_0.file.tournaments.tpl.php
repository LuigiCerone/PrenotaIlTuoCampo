<?php
/* Smarty version 3.1.30, created on 2018-02-01 11:21:29
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\tournaments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a72ea28f40ab4_63924732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080871b0de24ad033e9b6c69de71a02d493e7987' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\tournaments.tpl',
      1 => 1517417376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a72ea28f40ab4_63924732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11766154915a72ea28f0fe80_93314961', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18392611735a72ea28f116a4_36798972', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18803188085a72ea28f40037_43874567', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_11766154915a72ea28f0fe80_93314961 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_18392611735a72ea28f116a4_36798972 extends Smarty_Internal_Block
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
class Block_18803188085a72ea28f40037_43874567 extends Smarty_Internal_Block
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
                                <p class="card-text"><a href="tournamentInfo.php?t=<?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
">Clicca qui per
                                        visualizzare premi e sponsor di questo torneo</a></p>
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
