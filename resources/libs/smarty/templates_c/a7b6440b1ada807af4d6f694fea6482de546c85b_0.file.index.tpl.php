<?php
/* Smarty version 3.1.30, created on 2018-01-27 09:58:45
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6c3f459ba0e3_22862931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7b6440b1ada807af4d6f694fea6482de546c85b' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl',
      1 => 1517043509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a6c3f459ba0e3_22862931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16246608955a6c3f459b4926_85390605', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15062545725a6c3f459b6f71_91421341', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5672773015a6c3f459b97b4_50006112', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_16246608955a6c3f459b4926_85390605 extends Smarty_Internal_Block
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
class Block_15062545725a6c3f459b6f71_91421341 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/jquery.timepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/projectScript/index.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_5672773015a6c3f459b97b4_50006112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- banner -->
    <div class="container-fluid searchbox">
        <div class="col-md-6 w3l_about_bottom_left one">
            <div class="">
                <div class="searchbox-panel">
                    
                    <form action="#" method="post" class="mod2">
                        <div class="col-md-6 col-xs-6 w3l-left-mk">
                            <ul>
                                <li class="text">Sport :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    <input id="sport" name="sport_name" type="text" class="typeahead"
                                           placeholder="Sport" required/>
                                </li>
                                <li class="text">Provincia :</li>
                                <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <input id="region" placeholder="Provincia" name="region" type="text" required
                                           class='typeahead'/></li>
                                <li class="text">Data :</li>
                                <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                            class="date" id="datepicker" name="date" type="text" value=""
                                            required=""/>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 w3l-right-mk">
                            <ul>
                                <li class="text">qualcosa di utile qui :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                            name="gender" type="text" required=""></li>
                                <li class="text">Struttura :</li>
                                <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                            name="address"
                                            type="text"
                                            required="">
                                </li>
                                <li class="text">Ora :</li>
                                <li class="agileits-main"><i class="fa fa-clock-o" aria-hidden="true"></i><input
                                            class="date" name="date" id="timepicker" type="text" value=""
                                            required=""/>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="agile-submit">
                            <input type="submit" value="Prenota">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">

        </div>

    </div>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
