<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb263dd99_03862847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1c48082cb27ea6b9afd80011d84bbd7911f2d0' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/memory.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb263dd99_03862847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'memory' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/1c/1c/48/1c1c48082cb27ea6b9afd80011d84bbd7911f2d0_0.file.memory.tpl.php',
    'uid' => '1c1c48082cb27ea6b9afd80011d84bbd7911f2d0',
    'call_name' => 'smarty_template_function_memory_129953150766115eb260b9a3_10591104',
  ),
));
}
/* smarty_template_function_memory_129953150766115eb260b9a3_10591104 */
if (!function_exists('smarty_template_function_memory_129953150766115eb260b9a3_10591104')) {
function smarty_template_function_memory_129953150766115eb260b9a3_10591104(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value > 3) {?>
    <span class="danger"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 1) {?>
    <span class="warning"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif (round($_smarty_tpl->tpl_vars['data']->value,2) > 0) {?>
    <span class="success"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } else { ?>
    <span class="success">-</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_memory_129953150766115eb260b9a3_10591104 */
}
