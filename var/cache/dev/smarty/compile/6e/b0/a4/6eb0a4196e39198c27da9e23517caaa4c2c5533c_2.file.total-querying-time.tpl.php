<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/total-querying-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebce871e7_28791181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb0a4196e39198c27da9e23517caaa4c2c5533c' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/total-querying-time.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebce871e7_28791181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_querying_time' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/6e/b0/a4/6eb0a4196e39198c27da9e23517caaa4c2c5533c_2.file.total-querying-time.tpl.php',
    'uid' => '6eb0a4196e39198c27da9e23517caaa4c2c5533c',
    'call_name' => 'smarty_template_function_total_querying_time_118137655766115ebce824a0_57710242',
  ),
));
}
/* smarty_template_function_total_querying_time_118137655766115ebce824a0_57710242 */
if (!function_exists('smarty_template_function_total_querying_time_118137655766115ebce824a0_57710242')) {
function smarty_template_function_total_querying_time_118137655766115ebce824a0_57710242(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_querying_time_118137655766115ebce824a0_57710242 */
}
