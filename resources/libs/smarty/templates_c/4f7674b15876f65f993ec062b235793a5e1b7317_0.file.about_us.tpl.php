<?php
/* Smarty version 3.1.30, created on 2018-02-04 11:05:55
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/about_us.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a76db03e375d7_17927141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f7674b15876f65f993ec062b235793a5e1b7317' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/resources/templates/about_us.tpl',
      1 => 1517738752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a76db03e375d7_17927141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19411430225a76db03e31ed5_35391638', "css");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19267865315a76db03e34985_17004283', "js");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16995597535a76db03e36af4_27852730', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "css"} */
class Block_19411430225a76db03e31ed5_35391638 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_19267865315a76db03e34985_17004283 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="public/js/projectScript/about_us.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js"} */
/* {block "content"} */
class Block_16995597535a76db03e36af4_27852730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h2 class="title">Chi siamo?</h2>
        <br>
        Questo sito ti permette di effettuare prenotazioni presso strutture sportive affiliate e di partecipare a tornei
        organizzati da aziende con in palio diversi premi!
        Se sei una azienda o una società sportiva e desideri entrare nella nostra rete non esitare a contattarci!
    </div>
<?php
}
}
/* {/block "content"} */
}
