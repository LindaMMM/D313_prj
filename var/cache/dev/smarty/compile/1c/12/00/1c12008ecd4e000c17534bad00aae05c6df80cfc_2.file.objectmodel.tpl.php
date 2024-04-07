<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:57
  from '/home/linda/Projets/d313/tools/profiling/templates/objectmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebd194b90_38175737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c12008ecd4e000c17534bad00aae05c6df80cfc' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/objectmodel.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebd194b90_38175737 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="objectModels">
      ObjectModel instances
    </a>
  </h2>

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Instances</th>
        <th>Source</th>
      </tr>
    </thead>

    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objectmodel']->value, 'info', false, 'class');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
        <tr>
          <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
</td>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'objectmodel', array('data'=>count($_smarty_tpl->tpl_vars['info']->value)), true);?>

          </td>
          <td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'trace');
$_smarty_tpl->tpl_vars['trace']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trace']->value) {
$_smarty_tpl->tpl_vars['trace']->do_else = false;
?>
              <?php echo htmlspecialchars((string) str_replace(array(_PS_ROOT_DIR_,'\\'),array('','/'),$_smarty_tpl->tpl_vars['trace']->value['file']), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['trace']->value['line'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['trace']->value['function'], ENT_QUOTES, 'UTF-8');?>
) [id: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['trace']->value['id'], ENT_QUOTES, 'UTF-8');?>
]
              <br />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
<?php }
}