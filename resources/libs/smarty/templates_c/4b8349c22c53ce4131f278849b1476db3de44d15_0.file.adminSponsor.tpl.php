<?php
/* Smarty version 3.1.30, created on 2018-02-02 19:40:42
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminSponsor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a74b0aacf4e42_20766415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b8349c22c53ce4131f278849b1476db3de44d15' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminSponsor.tpl',
      1 => 1517596594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a74b0aacf4e42_20766415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11963202275a74b0aacdfa14_68333301', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11528934955a74b0aace1fe5_79583245', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21132206715a74b0aacf40e9_90068161', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_11963202275a74b0aacdfa14_68333301 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="public/css/jquery.timepicker.min.css"/>
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_11528934955a74b0aace1fe5_79583245 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminSponsors.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_21132206715a74b0aacf40e9_90068161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Gestione sponsor di un torneo.</h2>
    <br>
    <br>
    <section>
        <div class="container">
            Lista sponsor del torneo: <b><?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
</b>
            <input id="tournament" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
"/>
            <br>
            <hr>
            <br>
            <table id="sponsorsTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Tipo</td>
                    <td>Quota</td>
                    <td>Data</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sponsors']->value, 'sponsor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsor']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['sponsor']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sponsor']->value->name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sponsor']->value->type;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sponsor']->value->money;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['sponsor']->value->date;?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>

            </table>
    </section>
    <div class="row">
        <div class="col-md-5 col-center-block">
            <button class="signin-button" id="addSponsor">Aggiungi sponsor</button>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="addSponsorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi sponsor</h3>
                        <div class="login-form">
                            <form id="sponsorForm" method="post">
                                <ul>
                                    <li class="text">Nome:
                                    </li>
                                    <li class="agileits-main">
                                        <select id="selectSponsor">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sponsors']->value, 'sponsor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsor']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['sponsor']->value->name;?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select></li>
                                    <li class="text">Quota:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="money" type="number" min="0"
                                               name="money"
                                               placeholder="Quota"
                                               required/></li>
                                </ul>
                                <input type="submit" value="Aggiungi"/>
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
