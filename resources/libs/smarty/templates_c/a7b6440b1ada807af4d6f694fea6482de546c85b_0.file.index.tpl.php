<?php
/* Smarty version 3.1.30, created on 2017-12-21 17:50:16
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3be6483ccba0_71179913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7b6440b1ada807af4d6f694fea6482de546c85b' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl',
      1 => 1513875013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a3be6483ccba0_71179913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5424442595a3be6483cab37_51984431', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_682420215a3be6483cb9b7_91493549', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6089498445a3be6483cc752_71283983', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_5424442595a3be6483cab37_51984431 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_682420215a3be6483cb9b7_91493549 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_6089498445a3be6483cc752_71283983 extends Smarty_Internal_Block
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
                                    <li class="text">Dove :</li>
                                    <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input
                                                name="place" type="text" required=""></li>
                                    <li class="text">Data :</li>
                                    <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                                class="date" id="datepicker" name="date" type="text" value=""
                                                required=""/>
                                    </li>
                                    <li class="text">Sesso :</li>
                                    <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                                name="gender" type="text" required=""></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-6 w3l-right-mk">
                                <ul>
                                    <li class="text">Sport :</li>
                                    <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                                name="sport_name"
                                                type="text"
                                                required="">
                                    </li>
                                    <li class="text">Ora :</li>
                                    <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                                class="date" id="datepicker" name="date" type="text" value=""
                                                required=""/>
                                    </li>
                                    <li class="text">Address :</li>
                                    <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                                name="address"
                                                type="text"
                                                required="">
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="agile-submit">
                                <input type="submit" value="submit">
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
