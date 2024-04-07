<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebc113980_99605855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd981de7836bcabf71727a48f3d2b6ae0ffa5c3e' => 
    array (
      0 => '/home/linda/Projets/d313/themes/classic/templates/_partials/helpers.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebc113980_99605855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/fd/98/1d/fd981de7836bcabf71727a48f3d2b6ae0ffa5c3e_2.file.helpers.tpl.php',
    'uid' => 'fd981de7836bcabf71727a48f3d2b6ae0ffa5c3e',
    'call_name' => 'smarty_template_function_renderLogo_118905103766115ebc10bc14_78705159',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_118905103766115ebc10bc14_78705159 */
if (!function_exists('smarty_template_function_renderLogo_118905103766115ebc10bc14_78705159')) {
function smarty_template_function_renderLogo_118905103766115ebc10bc14_78705159(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_118905103766115ebc10bc14_78705159 */
}
