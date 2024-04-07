<?php
/* Smarty version 4.3.4, created on 2024-04-06 22:15:31
  from '/home/linda/Projets/d313/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6611ad63d12426_97154263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c73a4c6b1d474efb40c60c4e5786d8c2134a900' => 
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
function content_6611ad63d12426_97154263 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
