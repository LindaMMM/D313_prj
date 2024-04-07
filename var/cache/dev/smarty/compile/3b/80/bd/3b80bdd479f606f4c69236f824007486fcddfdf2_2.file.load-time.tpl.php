<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/load-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebcdf4ac1_92178232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b80bdd479f606f4c69236f824007486fcddfdf2' => 
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
function content_66115ebcdf4ac1_92178232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'load_time' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/3b/80/bd/3b80bdd479f606f4c69236f824007486fcddfdf2_2.file.load-time.tpl.php',
    'uid' => '3b80bdd479f606f4c69236f824007486fcddfdf2',
    'call_name' => 'smarty_template_function_load_time_145983170666115ebcdeccf8_95623080',
  ),
));
}
/* smarty_template_function_load_time_145983170666115ebcdeccf8_95623080 */
if (!function_exists('smarty_template_function_load_time_145983170666115ebcdeccf8_95623080')) {
function smarty_template_function_load_time_145983170666115ebcdeccf8_95623080(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 1.6) {?>
    <span class="danger"><?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 0.8) {?>
    <span class="warning"><?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf('%01.3f',$_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
  ms
<?php
}}
/*/ smarty_template_function_load_time_145983170666115ebcdeccf8_95623080 */
}
