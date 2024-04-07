<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/total-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb2735cb5_44630272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32cbd5848724f321d5a317ccd970c848ba7d91fb' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/total-queries.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb2735cb5_44630272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_queries' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/32/cb/d5/32cbd5848724f321d5a317ccd970c848ba7d91fb_0.file.total-queries.tpl.php',
    'uid' => '32cbd5848724f321d5a317ccd970c848ba7d91fb',
    'call_name' => 'smarty_template_function_total_queries_126578760966115eb2730474_93941068',
  ),
));
}
/* smarty_template_function_total_queries_126578760966115eb2730474_93941068 */
if (!function_exists('smarty_template_function_total_queries_126578760966115eb2730474_93941068')) {
function smarty_template_function_total_queries_126578760966115eb2730474_93941068(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_total_queries_126578760966115eb2730474_93941068 */
}
