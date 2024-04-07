<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebce6ccd8_00290698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8ecf614af38f6bdd6e3e61ece3fef56d41f3429' => 
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
function content_66115ebce6ccd8_00290698 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'table' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/f8/ec/f6/f8ecf614af38f6bdd6e3e61ece3fef56d41f3429_2.file.table.tpl.php',
    'uid' => 'f8ecf614af38f6bdd6e3e61ece3fef56d41f3429',
    'call_name' => 'smarty_template_function_table_94359866266115ebce5a4c7_26548203',
  ),
));
}
/* smarty_template_function_table_94359866266115ebce5a4c7_26548203 */
if (!function_exists('smarty_template_function_table_94359866266115ebce5a4c7_26548203')) {
function smarty_template_function_table_94359866266115ebce5a4c7_26548203(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 30) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 20) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_table_94359866266115ebce5a4c7_26548203 */
}
