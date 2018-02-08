<?php
/* Smarty version 3.1.30, created on 2018-01-30 11:23:11
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70478f4b7309_40413571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36599233dd48be749244b8e8f6b4ecd7114f67cd' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\profile.tpl',
      1 => 1517306030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a70478f4b7309_40413571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5742680745a70478f4a8de9_96480417', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4082775885a70478f4aa2f1_31175171', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11738208975a70478f4b6a60_93683948', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_5742680745a70478f4a8de9_96480417 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_4082775885a70478f4aa2f1_31175171 extends Smarty_Internal_Block
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
class Block_11738208975a70478f4b6a60_93683948 extends Smarty_Internal_Block
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
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#changePasswordModal">
                                Cambia password
                            </button>
                            <!-- Split button -->
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog">
        <div class="modal-dialog change_pass">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Cambia password</h3>
                        <form id="changePassFrom" method="post">
                            <input id="old_password" type="password" name="old_password"
                                   placeholder="Vecchia password" required/>
                            <input id="new_password" type="password" name="new_password"
                                   placeholder="Nuova password" required/>
                            <span id="error"></span>
                            <input type="submit" value="Cambia passoword"/>
                        </form>
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
