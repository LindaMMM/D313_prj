<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:53:57
  from '/home/linda/Projets/d313/admin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66116205c86103_61101055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf51a80f2237c8ea00f4feab3f00f39aae7e3dd' => 
    array (
      0 => '/home/linda/Projets/d313/admin/themes/default/template/content.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66116205c86103_61101055 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
