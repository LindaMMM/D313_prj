<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb272c7f0_65876840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e3994f34490728c7a65f8e7755cca5d77bd478c' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/time.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb272c7f0_65876840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'time' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/1e/39/94/1e3994f34490728c7a65f8e7755cca5d77bd478c_0.file.time.tpl.php',
    'uid' => '1e3994f34490728c7a65f8e7755cca5d77bd478c',
    'call_name' => 'smarty_template_function_time_38107740766115eb2725a23_41577263',
  ),
));
}
/* smarty_template_function_time_38107740766115eb2725a23_41577263 */
if (!function_exists('smarty_template_function_time_38107740766115eb2725a23_41577263')) {
function smarty_template_function_time_38107740766115eb2725a23_41577263(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 4) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 2) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_time_38107740766115eb2725a23_41577263 */
}
