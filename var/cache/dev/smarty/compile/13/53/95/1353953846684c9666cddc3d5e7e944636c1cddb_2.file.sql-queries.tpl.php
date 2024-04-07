<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/sql-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebce56690_87442427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1353953846684c9666cddc3d5e7e944636c1cddb' => 
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
function content_66115ebce56690_87442427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sql_queries' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/13/53/95/1353953846684c9666cddc3d5e7e944636c1cddb_2.file.sql-queries.tpl.php',
    'uid' => '1353953846684c9666cddc3d5e7e944636c1cddb',
    'call_name' => 'smarty_template_function_sql_queries_17009071966115ebce51614_32074285',
  ),
));
}
/* smarty_template_function_sql_queries_17009071966115ebce51614_32074285 */
if (!function_exists('smarty_template_function_sql_queries_17009071966115ebce51614_32074285')) {
function smarty_template_function_sql_queries_17009071966115ebce51614_32074285(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 150) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php }
}}
/*/ smarty_template_function_sql_queries_17009071966115ebce51614_32074285 */
}
