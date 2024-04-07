<?php
/* Smarty version 4.3.4, created on 2024-04-06 22:16:16
  from '/home/linda/Projets/d313/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6611ad90ec7644_18177974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f26a1c87f6a009123183c8b188c1e470a9f5623' => 
    array (
      0 => '/home/linda/Projets/d313/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6611ad90ec7644_18177974 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
