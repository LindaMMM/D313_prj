<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/peak-memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebce33fb5_41853166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b44709919611341ed8aefd30689e9425d8e1413b' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/peak-memory.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebce33fb5_41853166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'peak_memory' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/b4/47/09/b44709919611341ed8aefd30689e9425d8e1413b_2.file.peak-memory.tpl.php',
    'uid' => 'b44709919611341ed8aefd30689e9425d8e1413b',
    'call_name' => 'smarty_template_function_peak_memory_170216482766115ebce2c377_66177153',
  ),
));
}
/* smarty_template_function_peak_memory_170216482766115ebce2c377_66177153 */
if (!function_exists('smarty_template_function_peak_memory_170216482766115ebce2c377_66177153')) {
function smarty_template_function_peak_memory_170216482766115ebce2c377_66177153(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 16) {?>
    <span class="danger"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 12) {?>
    <span class="warning"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_peak_memory_170216482766115ebce2c377_66177153 */
}
