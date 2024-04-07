<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/peak-memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb26a4b05_37601086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b704ec9f13fdd76d16d7c79e424dd2023465dd' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/peak-memory.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb26a4b05_37601086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'peak_memory' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/78/b7/04/78b704ec9f13fdd76d16d7c79e424dd2023465dd_0.file.peak-memory.tpl.php',
    'uid' => '78b704ec9f13fdd76d16d7c79e424dd2023465dd',
    'call_name' => 'smarty_template_function_peak_memory_192539013066115eb2681f42_84128073',
  ),
));
}
/* smarty_template_function_peak_memory_192539013066115eb2681f42_84128073 */
if (!function_exists('smarty_template_function_peak_memory_192539013066115eb2681f42_84128073')) {
function smarty_template_function_peak_memory_192539013066115eb2681f42_84128073(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 16) {?>
    <span class="danger"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 12) {?>
    <span class="warning"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_peak_memory_192539013066115eb2681f42_84128073 */
}
