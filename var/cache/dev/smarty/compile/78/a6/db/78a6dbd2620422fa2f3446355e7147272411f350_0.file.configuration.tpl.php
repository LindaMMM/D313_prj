<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:46
  from '/home/linda/Projets/d313/tools/profiling/templates/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115eb27ad151_83768843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a6dbd2620422fa2f3446355e7147272411f350' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/configuration.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115eb27ad151_83768843 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-4">
  <table class="table table-condensed">
    <tr>
      <td>PrestaShop Version</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['psVersion'];?>
</td>
    </tr>
    <tr>
      <td>PHP Version</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['phpVersion'];?>
</td>
    </tr>
    <tr>
      <td>MySQL Version</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['mysqlVersion'];?>
</td>
    </tr>
    <tr>
      <td>Memory Limit</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['memoryLimit'];?>
</td>
    </tr>
    <tr>
      <td>Max Execution Time</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['maxExecutionTime'];?>
s</td>
    </tr>
    <tr>
      <td>Smarty Cache</td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['configuration']->value['smartyCache']) {?>
          <span class="success">enabled</span>
        <?php } else { ?>
          <span class="error">disabled</span>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Smarty Compilation</td>
      <td>
      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['smartyCompilation'] == 0) {?>
        <span class="success">never recompile</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['smartyCompilation'] == 1) {?>
        <span class="warning">auto</span>
      <?php } else { ?>
        <span class="red">force compile</span>
      <?php }?>
      </td>
    </tr>
  </table>
</div>
<?php }
}
