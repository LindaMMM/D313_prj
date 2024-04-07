<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/sql-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb2708b50_74531210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5c926f432bb3fa6626df8fdabe40046556891a2' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/sql-queries.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb2708b50_74531210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sql_queries' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/a5/c9/26/a5c926f432bb3fa6626df8fdabe40046556891a2_0.file.sql-queries.tpl.php',
    'uid' => 'a5c926f432bb3fa6626df8fdabe40046556891a2',
    'call_name' => 'smarty_template_function_sql_queries_132863612066115eb26e7e99_55537382',
  ),
));
}
/* smarty_template_function_sql_queries_132863612066115eb26e7e99_55537382 */
if (!function_exists('smarty_template_function_sql_queries_132863612066115eb26e7e99_55537382')) {
function smarty_template_function_sql_queries_132863612066115eb26e7e99_55537382(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 150) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php }
}}
/*/ smarty_template_function_sql_queries_132863612066115eb26e7e99_55537382 */
}
