<?php
/* Smarty version 3.1.30, created on 2018-01-30 20:02:36
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/team.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70c14c4b9ee5_30559388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e8db017a9b2a5795a192e1e45d21791a2ca4ebf' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/team.tpl',
      1 => 1517338929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a70c14c4b9ee5_30559388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15543349885a70c14c4a7641_27257003', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3995039415a70c14c4a9ca0_74052574', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19845987705a70c14c4b9392_98346434', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_15543349885a70c14c4a7641_27257003 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_3995039415a70c14c4a9ca0_74052574 extends Smarty_Internal_Block
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
class Block_19845987705a70c14c4b9392_98346434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Inserimento squadra</h2>
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
                <td>Telefono:</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->telnumber;?>
</td>
            </tr>
        </table>
        <br>
        <hr>
        <br>
        Dati dell'utente loggato che svolge il capitano<br>
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['tournament']->value->number_players+1 - (2) : 2-($_smarty_tpl->tpl_vars['tournament']->value->number_players)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 2, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <input type="text">
            <br>
            <br>
        <?php }
}
?>

    </div>
<?php
}
}
/* {/block "content"} */
}
