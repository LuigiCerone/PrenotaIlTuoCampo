<?php
/* Smarty version 3.1.30, created on 2018-02-03 17:09:09
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a75dea5917e03_28578428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7b6440b1ada807af4d6f694fea6482de546c85b' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/index.tpl',
      1 => 1517674148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a75dea5917e03_28578428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1385327575a75dea5901498_42130100', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12049150465a75dea5903d00_97625702', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14151820175a75dea5917004_06763988', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_1385327575a75dea5901498_42130100 extends Smarty_Internal_Block
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
class Block_12049150465a75dea5903d00_97625702 extends Smarty_Internal_Block
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
class Block_14151820175a75dea5917004_06763988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- banner -->
    <div class="container-fluid searchbox">
        <?php if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {?>
            <div class="container padding">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-center-block">
                        <h2>Profilo amministratore</h2>
                        <br>
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="public/images/user.png" alt="" class="img-rounded img-responsive"/>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>Ciao <?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->lastName;?>
</h4>
                                    <br>
                                    <p> I tuoi dati: </p>

                                    <table class="user-info">
                                        <tr>
                                            <td><b>Nome:</b></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
</td>
                                        </tr>
                                        <tr>
                                            <td><b>Cognome:</b></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->lastName;?>
</td>
                                        </tr>
                                        <tr>
                                            <td><b>Sesso:</b></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->gender;?>
</td>
                                        </tr>
                                        <tr>
                                            <td><b>Email:</b></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                        </tr>
                                        <tr>
                                            <td><b>Numero telefono:</b></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->telnumber;?>
</td>
                                        </tr>
                                        <tr>
                                            <td><b>Data nascita:</b></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->birthdate;?>
</td>
                                        </tr>
                                        <tr>
                                            <td><b>Registrato in data:</b></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->created_at;?>
</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="col-md-6 w3l_about_bottom_left one">
                <div class="">
                    <div class="searchbox-panel">
                        
                        <form id="form" method="post" autocomplete="off" action="bookingReview.php" class="mod2">
                            <div class="col-md-6 col-xs-6 w3l-left-mk">
                                <ul>
                                    <li class="text">Sport :</li>
                                    <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        <input id="sport" name="sport" type="text"
                                               class="typeahead"
                                               placeholder="Sport" required/>
                                    </li>
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
                            <div class="col-md-6 col-xs-6 w3l-right-mk">
                                <ul>
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
