<?php
/* Smarty version 3.1.30, created on 2018-02-10 18:03:24
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7f25dc1160c5_04424904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851d01d268753293f6cff2ad0be90c0198820ad2' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl',
      1 => 1518282200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7f25dc1160c5_04424904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18430643055a7f25dc110e76_90695968', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14695276095a7f25dc113460_05500936', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13873865135a7f25dc1157f6_54670702', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_18430643055a7f25dc110e76_90695968 extends Smarty_Internal_Block
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
class Block_14695276095a7f25dc113460_05500936 extends Smarty_Internal_Block
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
class Block_13873865135a7f25dc1157f6_54670702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="tiles_container break-text">
        <br>
        <h3 class="text-center">Area riservata utente</h3>
        <br>
        <ul class="grid">
            <li class="grid_item span__4 g"><a href="" class="not-hoverable grid_link">
                    <div class="tile">
                        <div class="content-slider">
                            <div class="slider">
                                <div class="mask">
                                    <ul>
                                        <li class="anim1">
                                            <div class="quote">Gay</div>
                                        </li>
                                        <li class="anim2">
                                            <div class="quote">Cane</div>
                                        </li>
                                        <li class="anim3">
                                            <div class="quote">Maiale</div>
                                        </li>
                                        <li class="anim4">
                                            <div class="quote">Porco</div>
                                        </li>
                                        <li class="anim5">
                                            <div class="quote">Cazzo</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable g"><a href="stats.php" class="grid_link">
                    <div class="tile">
                        <i class="fa fa-line-chart profile-item" aria-hidden="true"></i><br>Statistiche
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable a"><a href="repeatLastBookings.php" class="grid_link">
                    <div class="tile">
                        <i class="fa fa-repeat profile-item" aria-hidden="true"></i><br>Ripeti recenti
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable a"><a href="userInfo.php" class="grid_link">

                    <div class="tile"><i class="fa fa-id-card-o profile-item" aria-hidden="true"></i><br>Dati personali
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable b"><a href="bookings.php" class="grid_link">
                    <div class="tile"><i class="fa fa-book profile-item" aria-hidden="true"></i>
                        <br>Le miei prenotazioni
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable c"><a href="invitations.php" class="grid_link">
                    <div class="tile"><i class="fa fa-comments-o profile-item" aria-hidden="true"></i>
                        <br>I miei inviti
                    </div>
                </a></li>
            <li class="grid_item span__2 hoverable d"><a href="availability.php" class="grid_link">
                    <div class="tile"><i class="fa fa-calendar-o profile-item" aria-hidden="true"></i><br>Le mie
                        disponibilità
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable e"><a href="userTournaments.php" class="grid_link">
                    <div class="tile"><i class="fa fa-trophy profile-item" aria-hidden="true"></i>
                        <br>I miei tornei
                    </div>
                </a></li>
            <li class="grid_item span__1 hoverable f"><a href="index.php" id="logout" class="grid_link">
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
