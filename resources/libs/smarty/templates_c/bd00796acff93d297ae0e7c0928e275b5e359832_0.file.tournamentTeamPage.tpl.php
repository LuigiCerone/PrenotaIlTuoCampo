<?php
/* Smarty version 3.1.30, created on 2018-01-31 11:43:11
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentTeamPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a719dbf048699_06711887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd00796acff93d297ae0e7c0928e275b5e359832' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentTeamPage.tpl',
      1 => 1517395339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a719dbf048699_06711887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17296518415a719dbf0314c4_75719646', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16691077985a719dbf034051_39970354', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_693812135a719dbf047a08_01630286', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_17296518415a719dbf0314c4_75719646 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_16691077985a719dbf034051_39970354 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/team.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_693812135a719dbf047a08_01630286 extends Smarty_Internal_Block
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
                <td><?php echo $_smarty_tpl->tpl_vars['team']->value->user_fk;?>
</td>
            </tr>
            <tr>
                <td>Lista giocatori</td>
                <td><?php echo $_smarty_tpl->tpl_vars['team']->value->players;?>
</td>
            </tr>
        </table>
    </div>
<?php
}
}
/* {/block "content"} */
}
