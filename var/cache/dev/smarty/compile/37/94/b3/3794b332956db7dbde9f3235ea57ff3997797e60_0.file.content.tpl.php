<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:45
  from '/home/linda/Projets/d313/admin/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb1221057_08441218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3794b332956db7dbde9f3235ea57ff3997797e60' => 
    array (
      0 => '/home/linda/Projets/d313/admin/themes/new-theme/template/content.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb1221057_08441218 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
