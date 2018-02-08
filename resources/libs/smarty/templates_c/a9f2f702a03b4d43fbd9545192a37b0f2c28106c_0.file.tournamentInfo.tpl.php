<?php
/* Smarty version 3.1.30, created on 2018-02-08 12:38:01
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c36991d21f0_07342163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f2f702a03b4d43fbd9545192a37b0f2c28106c' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/tournamentInfo.tpl',
      1 => 1518089837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7c36991d21f0_07342163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11895867475a7c36991bdae7_91244035', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19418241365a7c36991c0709_68924580', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9554137185a7c36991d15b7_16690537', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_11895867475a7c36991bdae7_91244035 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_19418241365a7c36991c0709_68924580 extends Smarty_Internal_Block
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
class Block_9554137185a7c36991d15b7_16690537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">Premi e sponsor del torneo <?php echo $_smarty_tpl->tpl_vars['tournament']->value->tournament;?>
</h2>
    <br>
    <section>
        <div class="container">
            <h2>Classifica premi</h2>
            <br>
            <?php if (isset($_smarty_tpl->tpl_vars['awards']->value)) {?>
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

            <?php } else { ?>Non sono ancora stati inseriti premi per questo torneo! La lista è in aggiornamento..<?php }?>
            <br>
            <hr>
            <h2>Lista sponsor</h2><br>
            <?php if (isset($_smarty_tpl->tpl_vars['sponsors']->value)) {?>
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

            <?php } else { ?>Non sono ancora stati inseriti sponsor per questo torneo! La lista è in aggiornamento..<?php }?>
        </div>
    </section>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
