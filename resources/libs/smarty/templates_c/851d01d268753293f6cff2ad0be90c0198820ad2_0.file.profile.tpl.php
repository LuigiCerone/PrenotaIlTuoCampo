<?php
/* Smarty version 3.1.30, created on 2018-02-09 18:28:09
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7dda29303fd6_83209356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851d01d268753293f6cff2ad0be90c0198820ad2' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl',
      1 => 1518197285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7dda29303fd6_83209356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7702502395a7dda292fec23_68050442', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3892445755a7dda29301353_42569825', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17056631995a7dda293036f6_49695057', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_7702502395a7dda292fec23_68050442 extends Smarty_Internal_Block
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
class Block_3892445755a7dda29301353_42569825 extends Smarty_Internal_Block
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
class Block_17056631995a7dda293036f6_49695057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="tiles_container break-text">
        <br>
        <h3 class="text-center">Area riservata utente</h3>
        <br>
        <ul class="grid">
            <li class="grid_item span__2 g"><a href="stats.php" class="grid_link">
                    <div class="tile">Statistiche se possibile</div>
                </a></li>
            <li class="grid_item span__2 a"><a href="repeatLastBookings.php" class="grid_link">
                    <div class="tile">
                        <i class="fa fa-repeat profile-item" aria-hidden="true"></i><br>Ripeti recenti
                    </div>
                </a></li>
            <li class="grid_item span__1 a"><a href="userInfo.php" class="grid_link">

                    <div class="tile"><i class="fa fa-id-card-o profile-item" aria-hidden="true"></i><br>Dati personali
                    </div>
                </a></li>
            <li class="grid_item span__2 b"><a href="bookings.php" class="grid_link">
                    <div class="tile"><i class="fa fa-book profile-item" aria-hidden="true"></i>
                        <br>Le miei prenotazioni
                    </div>
                </a></li>
            <li class="grid_item span__1 c"><a href="invitations.php" class="grid_link">
                    <div class="tile"><i class="fa fa-comments-o profile-item" aria-hidden="true"></i>
                        <br>I miei inviti
                    </div>
                </a></li>
            <li class="grid_item span__2 d"><a href="availability.php" class="grid_link">
                    <div class="tile"><i class="fa fa-calendar-o profile-item" aria-hidden="true"></i><br>Le mie
                        disponibilità
                    </div>
                </a></li>
            <li class="grid_item span__1 e"><a href="userTournaments.php" class="grid_link">
                    <div class="tile"><i class="fa fa-trophy profile-item" aria-hidden="true"></i>
                        <br>I miei tornei
                    </div>
                </a></li>
            <li class="grid_item span__1 f"><a href="index.php" id="logout" class="grid_link">
                    <div class="tile"><i class="fa fa-sign-out profile-item" aria-hidden="true"></i>
                        <br>Esci
                    </div>
                </a></li>
        </ul>
        <div class="clear"></div>
        <br/>
    </div>
<?php
}
}
/* {/block "content"} */
}
