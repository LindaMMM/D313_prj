<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:57
  from '/home/linda/Projets/d313/tools/profiling/templates/doubles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebd168af5_03056006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feebf5c18d7e1209999d1c146b25c846c04c74ea' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/doubles.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebd168af5_03056006 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="doubles">Doubles</a>
  </h2>

  <table class="table table-condensed">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doublesQueries']->value, 'nb', false, 'q');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['nb']->value > 1) {?>
        <tr>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sql_queries', array('data'=>$_smarty_tpl->tpl_vars['nb']->value), true);?>

          </td>
          <td class="pre">
            <pre><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['q']->value, ENT_QUOTES, 'UTF-8');?>
</pre>
          </td>
        </tr>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
}
