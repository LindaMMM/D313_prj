<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:45
  from '/home/linda/Projets/d313/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb10c4d65_03090326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '477cd523216f2fe184640a9d4a4e6de3efa97251' => 
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
function content_66115eb10c4d65_03090326 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
