<?php
/* Smarty version 3.1.30, created on 2018-02-08 12:19:14
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminAwards.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c3232ceaba4_69980703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a0c20988c8b6aef83d7bda818e528b9a9166bc' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminAwards.tpl',
      1 => 1517679187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7c3232ceaba4_69980703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6287986515a7c3232cd0b11_67934846', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12017850095a7c3232cd34b8_04181716', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2075620295a7c3232ce9aa5_60117394', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_6287986515a7c3232cd0b11_67934846 extends Smarty_Internal_Block
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
class Block_12017850095a7c3232cd34b8_04181716 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/adminAwards.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_2075620295a7c3232ce9aa5_60117394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Gestione premi di un torneo.</h2>
    <br>
    
    <br>
    <section>
        <div class="container">
            Lista premi del torneo: <b><?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
</b>
            <input id="tournament" class="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tournament']->value->id;?>
"/>
            <br>
            <hr>
            <br>
            <table id="awardsTable">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Posto</td>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['awards']->value, 'award');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['award']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['award']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['award']->value->name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['award']->value->place;?>
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
            <button class="signin-button" id="addAward">Aggiungi premio</button>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="addAwardModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Aggiungi premio</h3>
                        <div class="login-form">
                            <form id="awardForm" method="post">
                                <ul>
                                    <li class="text">Nome:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="name" type="text"
                                               name="name"
                                               placeholder="Nome premio"
                                               required/></li>
                                    <li class="text">Posto:
                                    </li>
                                    <li class="agileits-main">
                                        <input id="place" type="number" min="0" class="form-control"
                                               name="place"
                                               placeholder="Posizione"
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
