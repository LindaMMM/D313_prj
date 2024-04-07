<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/functions/objectmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb267e168_95297736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d43a0a65fa60db034d6bbd102cea0e07b0757b' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/functions/objectmodel.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb267e168_95297736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'objectmodel' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/20/d4/3a/20d43a0a65fa60db034d6bbd102cea0e07b0757b_0.file.objectmodel.tpl.php',
    'uid' => '20d43a0a65fa60db034d6bbd102cea0e07b0757b',
    'call_name' => 'smarty_template_function_objectmodel_133081794466115eb2666743_12109500',
  ),
));
}
/* smarty_template_function_objectmodel_133081794466115eb2666743_12109500 */
if (!function_exists('smarty_template_function_objectmodel_133081794466115eb2666743_12109500')) {
function smarty_template_function_objectmodel_133081794466115eb2666743_12109500(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 50) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 10) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_objectmodel_133081794466115eb2666743_12109500 */
}
