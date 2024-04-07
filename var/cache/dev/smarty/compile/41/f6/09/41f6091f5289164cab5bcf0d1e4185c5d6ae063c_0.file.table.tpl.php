<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb2721a03_59619063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f6091f5289164cab5bcf0d1e4185c5d6ae063c' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/table.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb2721a03_59619063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'table' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/41/f6/09/41f6091f5289164cab5bcf0d1e4185c5d6ae063c_0.file.table.tpl.php',
    'uid' => '41f6091f5289164cab5bcf0d1e4185c5d6ae063c',
    'call_name' => 'smarty_template_function_table_164585024366115eb270c9e5_83890490',
  ),
));
}
/* smarty_template_function_table_164585024366115eb270c9e5_83890490 */
if (!function_exists('smarty_template_function_table_164585024366115eb270c9e5_83890490')) {
function smarty_template_function_table_164585024366115eb270c9e5_83890490(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 30) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 20) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_table_164585024366115eb270c9e5_83890490 */
}
