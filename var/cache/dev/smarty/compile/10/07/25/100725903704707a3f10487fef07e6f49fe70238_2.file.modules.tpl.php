<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebcf0eb63_62014755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100725903704707a3f10487fef07e6f49fe70238' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/modules.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebcf0eb63_62014755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/linda/Projets/d313/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="col-5">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Module</th>
        <th>Time</th>
        <th>Memory Usage</th>
      </tr>
    </thead>

    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value['perfs'], 'perfs', false, 'moduleName');
$_smarty_tpl->tpl_vars['perfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->value => $_smarty_tpl->tpl_vars['perfs']->value) {
$_smarty_tpl->tpl_vars['perfs']->do_else = false;
?>
        <tr>
          <td>
            <a href="javascript:void(0);" onclick="$('.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['moduleName']->value, ENT_QUOTES, 'UTF-8');?>
_modules_details').toggle();"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['moduleName']->value, ENT_QUOTES, 'UTF-8');?>
</a>
            </td>
            
          </td>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>$_smarty_tpl->tpl_vars['perfs']->value['total_time']), true);?>

          </td>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['perfs']->value['total_memory']), true);?>

          </td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfs']->value['details'], 'perfs');
$_smarty_tpl->tpl_vars['perfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfs']->value) {
$_smarty_tpl->tpl_vars['perfs']->do_else = false;
?>
          <tr class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['moduleName']->value, ENT_QUOTES, 'UTF-8');?>
_modules_details" style="background-color:#EFEFEF;display:none">
            <td>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['perfs']->value['method'], ENT_QUOTES, 'UTF-8');?>

            </td>
            <td>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>$_smarty_tpl->tpl_vars['perfs']->value['time']), true);?>

            </td>
            <td>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['perfs']->value['memory']), true);?>

            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      
    </tbody>

    <tfoot>
      <tr>
        <th><b><?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['modules']->value['perfs']), ENT_QUOTES, 'UTF-8');?>
 module(s)</b></th>
        <th><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>$_smarty_tpl->tpl_vars['modules']->value['totalHooksTime']), true);?>
</th>
        <th><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['modules']->value['totalHooksMemory']), true);?>
</th>
      </tr>
    </tfoot>
  </table>
</div>
<?php }
}
