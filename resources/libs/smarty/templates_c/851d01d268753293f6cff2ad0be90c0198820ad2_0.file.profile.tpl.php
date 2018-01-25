<?php
/* Smarty version 3.1.30, created on 2018-01-25 10:37:04
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a69a54015e895_25623375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851d01d268753293f6cff2ad0be90c0198820ad2' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/profile.tpl',
      1 => 1516873003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a69a54015e895_25623375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9618694035a69a540146458_70613057', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4856300075a69a54014ac24_38459486', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_806427975a69a54015dca1_64465877', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_9618694035a69a540146458_70613057 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_4856300075a69a54014ac24_38459486 extends Smarty_Internal_Block
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
class Block_806427975a69a54015dca1_64465877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container padding">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-center-block">
                <h2>Il mio profilo</h2>
                <br>
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="public/images/user.png" alt="" class="img-rounded img-responsive"/>
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <h4>Ciao <?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['user']->value->lastName;?>
</h4>
                            
                            
                            
                            <p> I tuoi dati: </p>
                            <table>
                                <tr>
                                    <td>Nome:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->firstName;?>
</td>
                                </tr>
                                <tr>
                                    <td>Cognome:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->lastName;?>
</td>
                                </tr>
                                <tr>
                                    <td>Sesso:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->gender;?>
</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                                </tr>
                                <tr>
                                    <td>Numero telefono:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->telnumber;?>
</td>
                                </tr>
                                <tr>
                                    <td>Data nascita:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->birthdate;?>
</td>
                                </tr>
                                <tr>
                                    <td>Registrato in data:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->created_at;?>
</td>
                                </tr>
                            </table>
                            <br><br>
                            <button type="button" class="btn btn-primary">
                                Cambia password
                            </button>
                            <!-- Split button -->
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
