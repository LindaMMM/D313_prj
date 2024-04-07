<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/php-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb26b5159_19946064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4ea52c855ddf95e4cc269d57b1d171f4f6a8159' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/php-version.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb26b5159_19946064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'php_version' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/e4/ea/52/e4ea52c855ddf95e4cc269d57b1d171f4f6a8159_0.file.php-version.tpl.php',
    'uid' => 'e4ea52c855ddf95e4cc269d57b1d171f4f6a8159',
    'call_name' => 'smarty_template_function_php_version_157013505866115eb26a89c9_97854495',
  ),
));
}
/* smarty_template_function_php_version_157013505866115eb26a89c9_97854495 */
if (!function_exists('smarty_template_function_php_version_157013505866115eb26a89c9_97854495')) {
function smarty_template_function_php_version_157013505866115eb26a89c9_97854495(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.1') <= 0) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.4') <= 0) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_php_version_157013505866115eb26a89c9_97854495 */
}
