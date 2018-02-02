<?php
/* Smarty version 3.1.30, created on 2018-02-02 19:19:27
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminAwards.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a74abaf795d65_25049711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a0c20988c8b6aef83d7bda818e528b9a9166bc' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/adminAwards.tpl',
      1 => 1517595545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a74abaf795d65_25049711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5233261055a74abaf787550_76791386', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_589187065a74abaf789a32_40598025', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9796085135a74abaf795255_83384126', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_5233261055a74abaf787550_76791386 extends Smarty_Internal_Block
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
class Block_589187065a74abaf789a32_40598025 extends Smarty_Internal_Block
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
 src="public/js/projectScript/adminAwards.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_9796085135a74abaf795255_83384126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Gestione delle partite associate ad un torneo.</h2>
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
                                        <input id="place" type="number" min="0"
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
