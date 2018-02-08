<?php
/* Smarty version 3.1.30, created on 2018-02-08 10:44:32
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7c1c00144224_00586866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851d01d268753293f6cff2ad0be90c0198820ad2' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl',
      1 => 1518083057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7c1c00144224_00586866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18340555375a7c1c0013eec5_51882032', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1265616585a7c1c00141681_26421920', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1377088815a7c1c00143954_41743164', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_18340555375a7c1c0013eec5_51882032 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="public/css/tiles.css"/>
<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_1265616585a7c1c00141681_26421920 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/profile.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_1377088815a7c1c00143954_41743164 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="tiles_container">
        <br>
        <h3 class="text-center">Area riservata utente</h3>
        <br>
        <ul class="grid">
            <li class="grid_item span__2 g"><a href="#" class="grid_link">
                    <div class="tile">Statistiche se possibile</div>
                </a></li>
            <li class="grid_item span__2 a"><a href="#" class="grid_link">
                    <div class="tile">Ripeti recenti</div>
                </a></li>
            <li class="grid_item span__1 a"><a href="userInfo.php" class="grid_link">
                    <div class="tile">Dati personali</div>
                </a></li>
            <li class="grid_item span__2 b"><a href="bookings.php" class="grid_link">
                    <div class="tile">Le miei prenotazioni</div>
                </a></li>
            <li class="grid_item span__1 c"><a href="invitations.php" class="grid_link">
                    <div class="tile">I miei inviti</div>
                </a></li>
            <li class="grid_item span__2 d"><a href="availability.php" class="grid_link">
                    <div class="tile">Le mie disponibilità</div>
                </a></li>
            <li class="grid_item span__1 e"><a href="userTournaments.php" class="grid_link">
                    <div class="tile">I miei tornei</div>
                </a></li>
            <li class="grid_item span__1 f"><a href="index.php" id="logout" class="grid_link">
                    <div class="tile">Esci</div>
                </a></li>

        </ul>
        <br>
    </div>
    <br>
    <br>
<?php
}
}
/* {/block "content"} */
}
