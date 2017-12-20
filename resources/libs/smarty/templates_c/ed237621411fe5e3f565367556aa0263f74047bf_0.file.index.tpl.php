<?php
/* Smarty version 3.1.30, created on 2017-12-20 11:49:02
  from "/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/smarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3a401ebde121_37070492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed237621411fe5e3f565367556aa0263f74047bf' => 
    array (
      0 => '/home/debian-luigi/PhpstormProjects/PrenotaIlTuoCampo/smarty/templates/index.tpl',
      1 => 1513766935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5a3a401ebde121_37070492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>Smarty</title>
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
</body>
</html><?php }
}
