<?php
/* Smarty version 3.1.30, created on 2018-01-31 17:57:28
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a71f5783e3a36_60539719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd775e0584d9b9143b767b503527fa03d57f297fc' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\index.tpl',
      1 => 1517417376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a71f5783e3a36_60539719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4890014065a71f5783cf2b5_78548611', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19532289645a71f5783d1050_47856932', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8721134645a71f5783e2e34_74195382', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_4890014065a71f5783cf2b5_78548611 extends Smarty_Internal_Block
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
class Block_19532289645a71f5783d1050_47856932 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/index.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_8721134645a71f5783e2e34_74195382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- banner -->
    <div class="container-fluid searchbox">
        <?php if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {?>
            <p>Sei un cazzo di amministratore</p>
        <?php } else { ?>
            <div class="col-md-6 w3l_about_bottom_left one">
                <div class="">
                    <div class="searchbox-panel">
                        
                        <form id="form" method="post" action="bookingReview.php" class="mod2">
                            <div class="col-md-6 col-xs-6 w3l-left-mk">
                                <ul>
                                    <li class="text">Sport :</li>
                                    <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        <input id="sport" name="sport" type="text" class="typeahead"
                                               placeholder="Sport" required/>
                                    </li>
                                    <li class="text">Provincia :</li>
                                    <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <input id="province" placeholder="Provincia" name="province" type="text"
                                               required
                                               class='typeahead'/></li>
                                    <li class="text">Data :</li>
                                    <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                                class="date" id="datepicker" placeholder="Data" name="date" type="text"
                                                value=""
                                                required/>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-6 w3l-right-mk">
                                <ul>
                                    <li class="text">qualcosa di utile qui :</li>
                                    <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                                name="gender" type="text"/></li>
                                    <li class="text">Struttura :</li>
                                    <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                                id="partner" name="partner" placeholder="Struttura" class="typeahead"
                                                type="text" required/>
                                    </li>
                                    <li class="text">Ora :</li>
                                    <li class="agileits-main"><i class="fa fa-clock-o" aria-hidden="true"></i><input
                                                class="date" placeholder="Ora" name="time" id="timepicker" type="text"
                                                value=""
                                                required/>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="agile-submit">
                                <input type="submit" value="Prenota">
                            </div>
                            <input class="hidden" id="selectedSport" name="selectedSport"/>
                            <input class="hidden" id="selectedPartner" name="selectedPartner"/>
                            <input class="hidden" id="selectedProvince" name="selectedProvince"/>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        <?php }?>
    </div>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
