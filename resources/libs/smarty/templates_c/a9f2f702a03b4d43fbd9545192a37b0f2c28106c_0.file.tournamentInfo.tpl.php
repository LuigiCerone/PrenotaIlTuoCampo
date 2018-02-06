<?php
/* Smarty version 3.1.30, created on 2018-02-06 19:06:28
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a79eea4d761c1_50083516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f2f702a03b4d43fbd9545192a37b0f2c28106c' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentInfo.tpl',
      1 => 1517940261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a79eea4d761c1_50083516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19103293855a79eea4d4bf40_64786514', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19818605155a79eea4d4f258_68983800', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20602345065a79eea4d74ba7_33308802', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_19103293855a79eea4d4bf40_64786514 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_19818605155a79eea4d4f258_68983800 extends Smarty_Internal_Block
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
class Block_20602345065a79eea4d74ba7_33308802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Premi e sponsor del torneo <?php echo $_smarty_tpl->tpl_vars['tournament']->value->name;?>
</h2>
    <br>
    <section>
        <div class="container">
            <h2>Classifica premi</h2>
            <br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['awards']->value, 'award');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['award']->value) {
?>
                <div class="card">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img_award" src="public/images/t.png" alt="Immagine dimostrativa"/>
                        </div>
                        <div class="col-md-4">
                            <div class="card-block">
                                <h4 class="card-title">Premio per il <b><?php echo $_smarty_tpl->tpl_vars['award']->value->place;?>
&deg;</b> classificato</h4>
                                <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['award']->value->name;?>
</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <hr>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <br>
            <hr>
            <h2>Lista sponsor</h2><br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sponsors']->value, 'sponsor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsor']->value) {
?>
                <div class="card">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="img_sponsor" src="public/images/sponsor.png" alt="Immagine dimostrativa"/>
                        </div>
                        <div class="col-md-4">
                            <div class="card-block">
                                <h4 class="card-title">Nome sponsor: <?php echo $_smarty_tpl->tpl_vars['sponsor']->value->name;?>
</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
                <hr>
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
