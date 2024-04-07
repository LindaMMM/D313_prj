<?php
/* Smarty version 4.3.4, created on 2024-04-06 22:39:23
  from '/home/linda/Projets/d313/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6611b2fb2f3f51_62603763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9afff054fc8385f9a55da58165e48b0bf34b2b00' => 
    array (
      0 => '/home/linda/Projets/d313/themes/classic/templates/page.tpl',
      1 => 1708959642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6611b2fb2f3f51_62603763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19363283606611b2fb2ebeb5_83456555', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6628448156611b2fb2ece72_67437644 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_12135138976611b2fb2ec5c3_03623323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6628448156611b2fb2ece72_67437644', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4024171636611b2fb2f11d2_70088280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_610547796611b2fb2f1b17_47487466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9194548636611b2fb2f0b44_81530394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4024171636611b2fb2f11d2_70088280', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_610547796611b2fb2f1b17_47487466', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1398507886611b2fb2f2f39_16281373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15016863356611b2fb2f28e5_44240482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1398507886611b2fb2f2f39_16281373', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19363283606611b2fb2ebeb5_83456555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19363283606611b2fb2ebeb5_83456555',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12135138976611b2fb2ec5c3_03623323',
  ),
  'page_title' => 
  array (
    0 => 'Block_6628448156611b2fb2ece72_67437644',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9194548636611b2fb2f0b44_81530394',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4024171636611b2fb2f11d2_70088280',
  ),
  'page_content' => 
  array (
    0 => 'Block_610547796611b2fb2f1b17_47487466',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15016863356611b2fb2f28e5_44240482',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1398507886611b2fb2f2f39_16281373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12135138976611b2fb2ec5c3_03623323', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9194548636611b2fb2f0b44_81530394', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15016863356611b2fb2f28e5_44240482', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
