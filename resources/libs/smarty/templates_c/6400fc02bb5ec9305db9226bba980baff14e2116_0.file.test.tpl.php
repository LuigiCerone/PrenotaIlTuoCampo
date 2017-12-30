<?php
/* Smarty version 3.1.30, created on 2017-12-21 16:52:38
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3bd8c6bd13c3_02220189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6400fc02bb5ec9305db9226bba980baff14e2116' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl',
      1 => 1513871547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a3bd8c6bd13c3_02220189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16006660795a3bd8c6bcf737_84310243', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2888272305a3bd8c6bd0543_63295940', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10785613285a3bd8c6bd1015_13918474', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_16006660795a3bd8c6bcf737_84310243 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_2888272305a3bd8c6bd0543_63295940 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_10785613285a3bd8c6bd1015_13918474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- banner -->
    <div class="about-bottom">
        <div class="col-md-6 w3l_about_bottom_left">
            <div class="video-grid-single-page-agileits">
                <div data-video="E91gAjunqOM" id="video"><img src="include/assets/images/banner2.jpg" alt=""
                                                              class="img-responsive"/></div>
            </div>
            <div class="w3l_about_bottom_left_video">
                <h4>watch our video</h4>
            </div>
        </div>
        <div class="col-md-6 w3l_about_bottom_right one">
            <div class="abt-w3l">
                <div class="header-w3l">
                    <h2>Admission Form</h2>
                    <h4>Enter the Following Details</h4>
                    <form action="#" method="post" class="mod2">
                        <div class="col-md-6 col-xs-6 w3l-left-mk">
                            <ul>
                                <li class="text">Name of Applicant :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                            name="name"
                                            type="text"
                                            required="">
                                </li>
                                <li class="text">Date of Birth :</li>
                                <li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input
                                            class="date" id="datepicker" name="Text" type="text" value=""
                                            required=""/>
                                </li>
                                <li class="text">Father Name :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                            name="name"
                                            type="text"
                                            required="">
                                </li>
                                <li class="text">Gender :</li>
                                <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input
                                            name="gender" type="text" required=""></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 w3l-right-mk">
                            <ul>
                                <li class="text">mobile no :</li>
                                <li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i><input
                                            name="mobile"
                                            type="text"
                                            required="">
                                </li>
                                <li class="text">Address :</li>
                                <li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input
                                            name="address"
                                            type="text"
                                            required="">
                                </li>
                                <li class="text">District :</li>
                                <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input
                                            name="address" type="text" required=""></li>
                                <li class="text">State :</li>
                                <li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input
                                            name="address" type="text" required=""></li>
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
    </div>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
