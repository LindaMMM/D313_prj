<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/rows-browsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebce4d744_89111843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '511961168071d362755ba63a875db3c8fb65aa0f' => 
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
function content_66115ebce4d744_89111843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'rows_browsed' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/51/19/61/511961168071d362755ba63a875db3c8fb65aa0f_2.file.rows-browsed.tpl.php',
    'uid' => '511961168071d362755ba63a875db3c8fb65aa0f',
    'call_name' => 'smarty_template_function_rows_browsed_35836979266115ebce41d24_34556389',
  ),
));
}
/* smarty_template_function_rows_browsed_35836979266115ebce41d24_34556389 */
if (!function_exists('smarty_template_function_rows_browsed_35836979266115ebce41d24_34556389')) {
function smarty_template_function_rows_browsed_35836979266115ebce41d24_34556389(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 400) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php }
}}
/*/ smarty_template_function_rows_browsed_35836979266115ebce41d24_34556389 */
}
