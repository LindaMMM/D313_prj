<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/mysql-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb264a673_42782826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a61abfba70adb7a1a599ee401d765a2667a9517f' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/mysql-version.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb264a673_42782826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mysql_version' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/a6/1a/bf/a61abfba70adb7a1a599ee401d765a2667a9517f_0.file.mysql-version.tpl.php',
    'uid' => 'a61abfba70adb7a1a599ee401d765a2667a9517f',
    'call_name' => 'smarty_template_function_mysql_version_205494974966115eb2641926_33031065',
  ),
));
}
/* smarty_template_function_mysql_version_205494974966115eb2641926_33031065 */
if (!function_exists('smarty_template_function_mysql_version_205494974966115eb2641926_33031065')) {
function smarty_template_function_mysql_version_205494974966115eb2641926_33031065(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.5') < 0) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.6') < 0) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_mysql_version_205494974966115eb2641926_33031065 */
}