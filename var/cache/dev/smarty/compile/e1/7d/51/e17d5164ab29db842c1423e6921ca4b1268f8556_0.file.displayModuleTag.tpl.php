<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:44:35
  from '/home/linda/Projets/d313/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115fd3cf5432_78376658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e17d5164ab29db842c1423e6921ca4b1268f8556' => 
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
function content_66115fd3cf5432_78376658 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
