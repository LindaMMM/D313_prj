<?php
/* Smarty version 4.3.4, created on 2024-04-06 22:39:26
  from '/home/linda/Projets/d313/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6611b2fe1e29a3_76759017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89e665d42553947f5966fef75b0c2afd07b99a7' => 
    array (
      0 => '/home/linda/Projets/d313/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6611b2fe1e29a3_76759017 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
