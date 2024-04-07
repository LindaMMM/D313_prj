<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/total-querying-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb2759be0_69678573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e717d40032a03c0684895ecc39afce6d3a3da9d' => 
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
function content_66115eb2759be0_69678573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_querying_time' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/9e/71/7d/9e717d40032a03c0684895ecc39afce6d3a3da9d_0.file.total-querying-time.tpl.php',
    'uid' => '9e717d40032a03c0684895ecc39afce6d3a3da9d',
    'call_name' => 'smarty_template_function_total_querying_time_11934789866115eb27394b3_96274707',
  ),
));
}
/* smarty_template_function_total_querying_time_11934789866115eb27394b3_96274707 */
if (!function_exists('smarty_template_function_total_querying_time_11934789866115eb27394b3_96274707')) {
function smarty_template_function_total_querying_time_11934789866115eb27394b3_96274707(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_querying_time_11934789866115eb27394b3_96274707 */
}
