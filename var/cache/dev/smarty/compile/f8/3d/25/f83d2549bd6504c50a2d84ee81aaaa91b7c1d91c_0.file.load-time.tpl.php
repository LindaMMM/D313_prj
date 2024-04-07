<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/load-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb2606e00_36096429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f83d2549bd6504c50a2d84ee81aaaa91b7c1d91c' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/load-time.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb2606e00_36096429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'load_time' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/f8/3d/25/f83d2549bd6504c50a2d84ee81aaaa91b7c1d91c_0.file.load-time.tpl.php',
    'uid' => 'f83d2549bd6504c50a2d84ee81aaaa91b7c1d91c',
    'call_name' => 'smarty_template_function_load_time_187408532566115eb25e28e6_17031937',
  ),
));
}
/* smarty_template_function_load_time_187408532566115eb25e28e6_17031937 */
if (!function_exists('smarty_template_function_load_time_187408532566115eb25e28e6_17031937')) {
function smarty_template_function_load_time_187408532566115eb25e28e6_17031937(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 1.6) {?>
    <span class="danger"><?php echo round($_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 0.8) {?>
    <span class="warning"><?php echo round($_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo sprintf('%01.3f',$_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php }?>
  ms
<?php
}}
/*/ smarty_template_function_load_time_187408532566115eb25e28e6_17031937 */
}
