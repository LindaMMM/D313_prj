<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:41:35
  from '/home/linda/Projets/d313/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115f1f995776_33297557',
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
function content_66115f1f995776_33297557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205303089266115f1f991ea0_43902061', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5829726666115f1f992760_40789506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_196867186966115f1f993a91_02191091 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_127085783266115f1f9933c4_47510787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196867186966115f1f993a91_02191091', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_205303089266115f1f991ea0_43902061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_205303089266115f1f991ea0_43902061',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5829726666115f1f992760_40789506',
  ),
  'page_content' => 
  array (
    0 => 'Block_127085783266115f1f9933c4_47510787',
  ),
  'hook_home' => 
  array (
    0 => 'Block_196867186966115f1f993a91_02191091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5829726666115f1f992760_40789506', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127085783266115f1f9933c4_47510787', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
