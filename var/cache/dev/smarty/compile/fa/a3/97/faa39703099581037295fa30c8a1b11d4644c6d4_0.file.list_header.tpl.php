<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:53:57
  from '/home/linda/Projets/d313/admin/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661162058c73d7_92422163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa39703099581037295fa30c8a1b11d4644c6d4' => 
    array (
      0 => '/home/linda/Projets/d313/admin/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661162058c73d7_92422163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_660738248661162058c5c38_65214362', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_660738248661162058c5c38_65214362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_660738248661162058c5c38_65214362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
