<?php
/* Smarty version 3.1.30, created on 2018-01-31 10:35:26
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/team.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a718dde7c85c1_65992183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e8db017a9b2a5795a192e1e45d21791a2ca4ebf' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/team.tpl',
      1 => 1517391322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a718dde7c85c1_65992183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1263621615a718dde7a5f40_69495204', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18040452625a718dde7aa681_65044193', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16208519765a718dde7c7558_18216816', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_1263621615a718dde7a5f40_69495204 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_18040452625a718dde7aa681_65044193 extends Smarty_Internal_Block
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
class Block_16208519765a718dde7c7558_18216816 extends Smarty_Internal_Block
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
            <td>Telefono struttura:</td>
            <td><?php echo $_smarty_tpl->tpl_vars['tournament']->value->telnumber;?>
</td>
        </tr>
    </table>
    <br>
    <hr>
    <br>
    Dati dell'utente loggato che svolge il capitano
    <br>
    <div class="signin-form profile">
    
    <div class="login-form container-fluid">
        <div class="row">
            <div class="col-md-2 count">
                Giocatore numero 1 <br> <b>Capitano</b>
            </div>
            <div class="col-md-5"><label for="first_name">Nome:</label>
                <input class="form_input" type="text" id="first_name" name="first_name"
                       value="<?php echo $_smarty_tpl->tpl_vars['captain']->value->firstName;?>
"
                       disabled/></div>
            <div class="col-md-5">
                <label for="first_name">Cognome:</label>
                <input class="form_input" type="text" id="last_name" name="last_name"
                       value="<?php echo $_smarty_tpl->tpl_vars['captain']->value->lastName;?>
"
                       disabled/></div>
        </div>
        <form method="post" id="playersData">
            <input id="user" name="user" type="text" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['captain']->value->id;?>
"/>
            <?php
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['n']->step = 1;$_smarty_tpl->tpl_vars['n']->total = (int) ceil(($_smarty_tpl->tpl_vars['n']->step > 0 ? $_smarty_tpl->tpl_vars['tournament']->value->number_players+1 - (2) : 2-($_smarty_tpl->tpl_vars['tournament']->value->number_players)+1)/abs($_smarty_tpl->tpl_vars['n']->step));
if ($_smarty_tpl->tpl_vars['n']->total > 0) {
for ($_smarty_tpl->tpl_vars['n']->value = 2, $_smarty_tpl->tpl_vars['n']->iteration = 1;$_smarty_tpl->tpl_vars['n']->iteration <= $_smarty_tpl->tpl_vars['n']->total;$_smarty_tpl->tpl_vars['n']->value += $_smarty_tpl->tpl_vars['n']->step, $_smarty_tpl->tpl_vars['n']->iteration++) {
$_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->iteration == 1;$_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration == $_smarty_tpl->tpl_vars['n']->total;?>
                <div class="row">
                    <div class="col-md-2 count">
                        Giocatore numero <?php echo $_smarty_tpl->tpl_vars['n']->value;?>

                    </div>
                    <div class="col-md-5"><label for="first_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">Nome:</label>
                        <input class="form_input" type="text" id="first_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" name="first_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"
                               placeholder="Nome"
                               required/></div>
                    <div class="col-md-5">
                        <label for="last_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">Cognome:</label>
                        <input class="form_input" type="text" id="last_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" name="last_name_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"
                               placeholder="Cognome"
                               required/></div>
                </div>
            <?php }
}
?>

            <div class="row">
                <div class="col-md-4 col-center-block">
                    <input type="submit" value="Crea squadra"/>
                </div>
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
