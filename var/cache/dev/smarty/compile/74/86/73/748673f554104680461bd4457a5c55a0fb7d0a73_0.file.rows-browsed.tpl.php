<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/rows-browsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb26e3b62_81425741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '748673f554104680461bd4457a5c55a0fb7d0a73' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/rows-browsed.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb26e3b62_81425741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'rows_browsed' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/74/86/73/748673f554104680461bd4457a5c55a0fb7d0a73_0.file.rows-browsed.tpl.php',
    'uid' => '748673f554104680461bd4457a5c55a0fb7d0a73',
    'call_name' => 'smarty_template_function_rows_browsed_89487999466115eb26b8fd5_46114947',
  ),
));
}
/* smarty_template_function_rows_browsed_89487999466115eb26b8fd5_46114947 */
if (!function_exists('smarty_template_function_rows_browsed_89487999466115eb26b8fd5_46114947')) {
function smarty_template_function_rows_browsed_89487999466115eb26b8fd5_46114947(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 400) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php }
}}
/*/ smarty_template_function_rows_browsed_89487999466115eb26b8fd5_46114947 */
}
