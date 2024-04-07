<?php
/* Smarty version 4.3.4, created on 2024-04-06 16:39:56
  from '/home/linda/Projets/d313/tools/profiling/templates/stopwatch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66115ebcf2ef64_61078247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e25f784bddbb422e25f4ce608f8ffb2ce455babd' => 
    array (
      0 => '/home/linda/Projets/d313/tools/profiling/templates/stopwatch.tpl',
      1 => 1711703872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66115ebcf2ef64_61078247 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="stopwatch">
      Stopwatch SQL - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['summary']->value['nbQueries'], ENT_QUOTES, 'UTF-8');?>
 queries
    </a>
  </h2>

  <table class="table table-condensed table-bordered sortable">
    <thead>
      <tr>
        <th>#</th>
        <th>Query</th>
        <th>Time (ms)</th>
        <th>Rows</th>
        <th>Filesort</th>
        <th>Group By</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stopwatchQueries']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('callstack', implode('<br>',$_smarty_tpl->tpl_vars['data']->value['stack']));?>
        <?php $_smarty_tpl->_assignInScope('callstack_md5', md5($_smarty_tpl->tpl_vars['callstack']->value));?>
        <tr>
          <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['id'], ENT_QUOTES, 'UTF-8');?>
</td>
          <td class="pre" style="max-width: 60vw"><pre><?php echo htmlspecialchars((string) preg_replace("/(^[\s]*)/m",'',htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['query'],ENT_NOQUOTES,'utf-8',false)), ENT_QUOTES, 'UTF-8');?>
</pre></td>
          <td data-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['time'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>($_smarty_tpl->tpl_vars['data']->value['time'])), true);?>

          </td>

          <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['rows'], ENT_QUOTES, 'UTF-8');?>
</td>
          <td data-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['filesort'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['filesort']) {?>
              <span class="danger">Yes</span>
            <?php }?>
          </td>
          <td data-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['group_by'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['data']->value['group_by']) {?>
              <span class="danger"">Yes</span>
            <?php }?>
          </td>
          <td data-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['location'], ENT_QUOTES, 'UTF-8');?>
">
            <a href="javascript:void(0);" onclick="$('#callstack_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['callstack_md5']->value, ENT_QUOTES, 'UTF-8');?>
').toggle();"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['location'], ENT_QUOTES, 'UTF-8');?>
</a>
            <div id="callstack_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['callstack_md5']->value, ENT_QUOTES, 'UTF-8');?>
" style="display:none">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['stack'], 'stack');
$_smarty_tpl->tpl_vars['stack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stack']->value) {
$_smarty_tpl->tpl_vars['stack']->do_else = false;
?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stack']->value, ENT_QUOTES, 'UTF-8');?>
<br/>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
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
