<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from 'module:blockwishlistviewstemplateshookaccountmyaccountblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebc729bd6_41270772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bea152bc88d6ad4c16c87750962bcaf4f57aa3' => 
    array (
      0 => 'module:blockwishlistviewstemplateshookaccountmyaccountblock.tpl',
      1 => 1691741314,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebc729bd6_41270772 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/linda/Projets/d313/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <li>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockwishlist']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </a>
  </li>
<?php }?>
<!-- end /home/linda/Projets/d313/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl --><?php }
}