<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebce03436_30078738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0505989ea5e2fe11e91867d3d8c4a1a6cbb995' => 
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
function content_66115ebce03436_30078738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'memory' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/3b/05/05/3b0505989ea5e2fe11e91867d3d8c4a1a6cbb995_2.file.memory.tpl.php',
    'uid' => '3b0505989ea5e2fe11e91867d3d8c4a1a6cbb995',
    'call_name' => 'smarty_template_function_memory_106067417366115ebcdf8b95_83366905',
  ),
));
}
/* smarty_template_function_memory_106067417366115ebcdf8b95_83366905 */
if (!function_exists('smarty_template_function_memory_106067417366115ebcdf8b95_83366905')) {
function smarty_template_function_memory_106067417366115ebcdf8b95_83366905(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value > 3) {?>
    <span class="danger"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 1) {?>
    <span class="warning"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif (round($_smarty_tpl->tpl_vars['data']->value,2) > 0) {?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success">-</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_memory_106067417366115ebcdf8b95_83366905 */
}
