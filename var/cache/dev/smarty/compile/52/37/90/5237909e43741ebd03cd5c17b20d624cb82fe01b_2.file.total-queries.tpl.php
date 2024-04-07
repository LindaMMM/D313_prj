<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/total-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebce7ebb8_74451467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5237909e43741ebd03cd5c17b20d624cb82fe01b' => 
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
function content_66115ebce7ebb8_74451467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_queries' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/52/37/90/5237909e43741ebd03cd5c17b20d624cb82fe01b_2.file.total-queries.tpl.php',
    'uid' => '5237909e43741ebd03cd5c17b20d624cb82fe01b',
    'call_name' => 'smarty_template_function_total_queries_57805734766115ebce79577_05090149',
  ),
));
}
/* smarty_template_function_total_queries_57805734766115ebce79577_05090149 */
if (!function_exists('smarty_template_function_total_queries_57805734766115ebce79577_05090149')) {
function smarty_template_function_total_queries_57805734766115ebce79577_05090149(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_queries_57805734766115ebce79577_05090149 */
}
