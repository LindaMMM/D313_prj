<?php
/* Smarty version 4.3.4, created on 2024-04-06 22:39:23
  from '/home/linda/Projets/d313/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6611b2fb2e3d97_52457533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0049121c5e8013dd180ddf9b0774ceb3c05d3f6' => 
    array (
      0 => '/home/linda/Projets/d313/themes/classic/templates/index.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6611b2fb2e3d97_52457533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2009761526611b2fb2e0849_19710118', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15808308276611b2fb2e1080_62499367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_14606890286611b2fb2e22f9_91015469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_14907757926611b2fb2e1c14_74095857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14606890286611b2fb2e22f9_91015469', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2009761526611b2fb2e0849_19710118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2009761526611b2fb2e0849_19710118',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15808308276611b2fb2e1080_62499367',
  ),
  'page_content' => 
  array (
    0 => 'Block_14907757926611b2fb2e1c14_74095857',
  ),
  'hook_home' => 
  array (
    0 => 'Block_14606890286611b2fb2e22f9_91015469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15808308276611b2fb2e1080_62499367', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14907757926611b2fb2e1c14_74095857', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
