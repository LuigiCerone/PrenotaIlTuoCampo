<?php
/* Smarty version 3.1.30, created on 2018-01-30 23:34:53
  from "C:\Users\dany\PhpstormProjects\PrenotaIlTuoCampo\resources\templates\adminPartners.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a70f30d5d16e8_15063425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e4b80a2c3fa7d729be06ab69d79999e329c22b' => 
    array (
      0 => 'C:\\Users\\dany\\PhpstormProjects\\PrenotaIlTuoCampo\\resources\\templates\\adminPartners.tpl',
      1 => 1517349654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a70f30d5d16e8_15063425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18382821715a70f30d5b7c93_37540259', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20445644395a70f30d5b9316_92316482', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6373571435a70f30d5d1040_18035352', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_18382821715a70f30d5b7c93_37540259 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_20445644395a70f30d5b9316_92316482 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/adminPartners.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_6373571435a70f30d5d1040_18035352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2 class="title">I nostri principali partners.</h2>
    <br>
    
    <br>
    <section>
        <div class="container">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partners']->value, 'partner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->value) {
?>
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title">Centro sportivo <?php echo $_smarty_tpl->tpl_vars['partner']->value->name;?>
</h4>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['partner']->value->description;?>
</p>
                                <p class="card-text">Vieni a trovarci o chiamaci al <?php echo $_smarty_tpl->tpl_vars['partner']->value->telnumber;?>
</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-img-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </section>
    
    <?php if (($_SESSION['id'] != null)) {?>
        <span class="hidden" id="id"><?php echo $_SESSION['id'];?>
</span>
        <div class="row" id="post-review-box">
            <div class="col-md-6 col-center-block">
                <form accept-charset="UTF-8" action="" method="post">
                    <textarea class="form-control animated" cols="50" id="partenersText" name="comment"
                              placeholder="Inserisci qui il nome dell'azienda" rows="5"></textarea>
                    <textarea class="form-control animated" cols="50" id="descriptionText" name="comment"
                              placeholder="Inserisci qui la descrizione " rows="5"></textarea>
                    <textarea class="form-control animated" cols="50" id="regionText" name="comment"
                              placeholder="Inserisci qui la regione " rows="5"></textarea>
                    <textarea class="form-control animated" cols="50" id="areaText" name="comment"
                              placeholder="Inserisci qui l'area " rows="5"></textarea>
                    <textarea class="form-control animated" cols="50" id="addressText" name="comment"
                              placeholder="Inserisci qui l'indirizzo " rows="5"></textarea>
                    <textarea class="form-control animated" cols="50" id="emailText" name="comment"
                              placeholder="Inserisci qui l'email " rows="5"></textarea>
                    <textarea class="form-control animated" cols="50" id="numberText" name="comment"
                              placeholder="Inserisci qui il numero di telefono" rows="5"></textarea>

                    
                        
                               
                               
                        <br>
                        <button id="savePartners" class="btn btn-success btn-lg" type="submit">Salva
                        </button>
                    
                </form>
            </div>
        </div>
    <?php }?>
    <!-- /banner -->
<?php
}
}
/* {/block "content"} */
}
