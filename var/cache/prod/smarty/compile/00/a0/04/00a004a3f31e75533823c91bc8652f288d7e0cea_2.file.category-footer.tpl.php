<?php
/* Smarty version 4.3.4, created on 2024-04-06 22:39:59
  from '/home/linda/Projets/d313/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6611b31f7d9c88_68417344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a004a3f31e75533823c91bc8652f288d7e0cea' => 
    array (
      0 => '/home/linda/Projets/d313/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6611b31f7d9c88_68417344 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
