<?php /* Smarty version 2.6.9, created on 2011-01-21 15:49:25
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editElement.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editElement.tpl', 5, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editElement.tpl', 26, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editElement.tpl', 32, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editElement.tpl', 142, false),)), $this); ?>
<form method="POST" name="editElement">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Field')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span><span class="title"> <?php echo $this->_tpl_vars['DATA']['label']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_ELEMENT_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Field type')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_element_type" onChange="document.forms['editElement'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveElement';document.forms['editElement'].submit()">
   <?php $_from = $this->_tpl_vars['TYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['KEY'] => $this->_tpl_vars['TYPE']):
?>
   <option value="<?php echo $this->_tpl_vars['KEY']; ?>
" <?php if ($this->_tpl_vars['DATA']['element_type'] == $this->_tpl_vars['KEY']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['TYPE']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Label')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_label" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['label'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="42">
  <input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_hide_label" value="1" <?php if ($this->_tpl_vars['DATA']['hide_label'] == 1): ?> checked="checked" <?php endif; ?> /><?php echo ((is_array($_tmp='hide label')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'description'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" cols="65" rows="4"><?php echo $this->_tpl_vars['DATA']['description']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="view_header" colspan="3">
   <span class="title"><?php echo ((is_array($_tmp='Details')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php if ($this->_tpl_vars['DATA']['element_type'] != 8): ?>
 <?php if ($this->_tpl_vars['DATA']['element_type'] == 6): ?>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Mark as required')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
?</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_required" value="1" <?php if ($this->_tpl_vars['DATA']['required'] == 1): ?>checked<?php endif; ?>></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['element_type'] != 6): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Initial value')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" style="color: darkorange;" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_default_value" value="<?php echo $this->_tpl_vars['DATA']['default_value']; ?>
" size="42"></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Mark as required')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
?</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_required" value="1" onchange="document.forms['editElement'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='makeRequired';document.forms['editElement'].submit();" <?php if ($this->_tpl_vars['DATA']['required'] == 1): ?>checked<?php endif; ?>></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Read-Only")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
?</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_readonly" value="1" <?php if ($this->_tpl_vars['DATA']['readonly'] == 1): ?>checked<?php endif; ?>></td>
 </tr>
  <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['element_type'] != 11): ?>
 <tr>
  <td class="left"> <?php if ($this->_tpl_vars['DATA']['element_type'] != 6):  echo ((is_array($_tmp='Field size')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  else:  echo ((is_array($_tmp='Number of fields for grouping')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  endif; ?></td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_size" value="<?php echo $this->_tpl_vars['DATA']['size']; ?>
" size="3" value="42" maxlength="3"></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['element_type'] == 11): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Maximal field lenght')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maxlength" value="<?php echo $this->_tpl_vars['DATA']['maxlength']; ?>
" size="5" value="42" maxlength="5"></td>
 </tr>
 <?php endif; ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Additional parameters')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_params" cols="65" rows="3"><?php echo $this->_tpl_vars['DATA']['params']; ?>
</textarea></td>
 </tr>
 <?php if ($this->_tpl_vars['DATA']['element_type'] == 2 || $this->_tpl_vars['DATA']['element_type'] == 3 || $this->_tpl_vars['DATA']['element_type'] == 4 || $this->_tpl_vars['DATA']['element_type'] == 5): ?>
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Value presets')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php endif; ?>
 <?php endif; ?>
</table>
<?php if ($this->_tpl_vars['DATA']['element_type'] == 2 || $this->_tpl_vars['DATA']['element_type'] == 3 || $this->_tpl_vars['DATA']['element_type'] == 4 || $this->_tpl_vars['DATA']['element_type'] == 5):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_ELEMENT_VALUES_BUTTONS'],'withouthidden' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Datasource')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_datasource_type" onChange="document.forms['editElement'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveElement';document.forms['editElement'].submit()">
    <option value="2" <?php if ($this->_tpl_vars['DATA']['datasource_type'] == 2): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Only custom values')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="3" <?php if ($this->_tpl_vars['DATA']['datasource_type'] == 3): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Database (SQL)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="4" <?php if ($this->_tpl_vars['DATA']['datasource_type'] == 4): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="URL value (Get)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="5" <?php if ($this->_tpl_vars['DATA']['datasource_type'] == 5): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Form value (Post)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="6" <?php if ($this->_tpl_vars['DATA']['datasource_type'] == 6): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Request value (Post or Get)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="7" <?php if ($this->_tpl_vars['DATA']['datasource_type'] == 7): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Session value (Session)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   </select>
  </td>
 </tr>
 <?php if ($this->_tpl_vars['DATA']['datasource_type'] == 3): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Database query')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2"><textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_datasource_query" cols="65" rows="3"><?php echo $this->_tpl_vars['DATA']['datasource_query']; ?>
</textarea>
  <br /><?php echo ((is_array($_tmp="e.g.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 SELECT id, username FROM xt_user ORDER BY username ASC
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Datasource value field')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_datasource_value_field" value="<?php echo $this->_tpl_vars['DATA']['datasource_value_field']; ?>
" size="42">&nbsp;<?php echo ((is_array($_tmp="e.g.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 id</td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Datasource label field')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_datasource_label_field" value="<?php echo $this->_tpl_vars['DATA']['datasource_label_field']; ?>
" size="42">&nbsp;<?php echo ((is_array($_tmp="e.g.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 username</td>
 </tr>
 <?php endif;  if ($this->_tpl_vars['DATA']['datasource_type'] == 4 || $this->_tpl_vars['DATA']['datasource_type'] == 5 || $this->_tpl_vars['DATA']['datasource_type'] == 6 || $this->_tpl_vars['DATA']['datasource_type'] == 7): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Array Name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_datasource_query" value="<?php echo $this->_tpl_vars['DATA']['datasource_query']; ?>
" size="42">&nbsp;<?php echo ((is_array($_tmp="e.g.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 mydata for $Array['mydata']</td>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Datasource value field')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_datasource_value_field" value="<?php echo $this->_tpl_vars['DATA']['datasource_value_field']; ?>
" size="42">&nbsp;<?php echo ((is_array($_tmp="e.g.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 value for $Array['mydata'][0]['value']</td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Datasource label field')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_datasource_label_field" value="<?php echo $this->_tpl_vars['DATA']['datasource_label_field']; ?>
" size="42">&nbsp;<?php echo ((is_array($_tmp="e.g.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 label for $Array['mydata'][0]['label']</td>
 </tr>
 <?php endif; ?>
 <?php $_from = $this->_tpl_vars['VALUES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['V'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['V']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['VALUE']):
        $this->_foreach['V']['iteration']++;
?>
 <tr>
  <td class="left"><?php echo $this->_tpl_vars['VALUE']['pos']; ?>
.</td>
  <td class="right" style="width: 80px; padding-right: 0px;"><?php if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertValue','icon' => "explorer/arrow_down_green.png",'position' => 'after','form' => 'editElement','insert_position' => $this->_tpl_vars['VALUE']['pos']), $this); echo actionIcon(array('action' => 'insertValue','icon' => "explorer/arrow_up_green.png",'position' => 'before','form' => 'editElement','insert_position' => $this->_tpl_vars['VALUE']['pos']), $this); else:  echo actionIcon(array('action' => 'editValue','icon' => "pencil.png",'form' => 'editElement','value_id' => $this->_tpl_vars['VALUE']['id'],'title' => 'Edit value'), $this); echo actionIcon(array('action' => 'deleteValue','icon' => "delete.png",'form' => 'editElement','ask' => "Are you sure to delete this value?",'title' => 'Delete value','value_id' => $this->_tpl_vars['VALUE']['id']), $this); if (! ($this->_foreach['V']['iteration'] == $this->_foreach['V']['total'])):  echo actionIcon(array('action' => 'moveValue','icon' => "explorer/arrow_down_green.png",'position' => 'down','form' => 'editElement','move_position' => $this->_tpl_vars['VALUE']['pos'],'value_id' => $this->_tpl_vars['VALUE']['id']), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  if (! ($this->_foreach['V']['iteration'] <= 1)):  echo actionIcon(array('action' => 'moveValue','icon' => "explorer/arrow_up_green.png",'position' => 'up','form' => 'editElement','move_position' => $this->_tpl_vars['VALUE']['pos'],'value_id' => $this->_tpl_vars['VALUE']['id']), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  endif; ?></td>
  <td class="right"><?php echo $this->_tpl_vars['VALUE']['label']; ?>
 <span style="color: #000000;">=></span> <span style="color: green;"><?php echo $this->_tpl_vars['VALUE']['value']; ?>
</span></td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="left">&nbsp;</td>
  <td class="right" colspan="2"><?php if ($this->_tpl_vars['FIRST_VALUE']):  echo actionIcon(array('action' => 'addFirstValue','icon' => "add_small.png",'form' => 'editElement','title' => 'Add a new value'), $this); else:  echo actionIcon(array('action' => 'addValue','icon' => "add_small.png",'form' => 'editElement','title' => 'Add a new value'), $this); endif; ?></td>
 </tr>
</table>
<?php endif;  if ($this->_tpl_vars['DATA']['element_type'] != 6): ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="3">
   <span class="title"><?php echo ((is_array($_tmp='Scripting')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="3"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Scripting Identifier')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_scripting_identifier" value="<?php echo $this->_tpl_vars['DATA']['scripting_identifier']; ?>
" size="42"></td>
 </tr>
 <tr>
  <td class="view_header" colspan="3">
   <span class="title"><?php echo ((is_array($_tmp='Rules')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="3"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php $_from = $this->_tpl_vars['RULES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['RULE']):
?>
 <?php if ($this->_tpl_vars['RULE']['compare_type'] == 1): ?>
 <tr>
  <td class="left"><?php echo $this->_tpl_vars['RULE']['title']; ?>
</td>
  <td class="right" style="width: 40px; padding-right: 0px;"><?php echo actionIcon(array('action' => 'editElementRule','icon' => "pencil.png",'form' => 'editElement','title' => 'Edit this rule','rule_id' => $this->_tpl_vars['RULE']['id']), $this); echo actionIcon(array('action' => 'deleteElementRule','icon' => "delete.png",'form' => 'editElement','title' => 'Delete this rule','ask' => "Are you sure to delete this rule?",'rule_id' => $this->_tpl_vars['RULE']['id']), $this);?>
</td>
  <td class="right">Simple compare: <span style="color: green;">Input</span> <?php echo $this->_tpl_vars['RULE']['compare_query']; ?>
 <span style="color: red;"><?php echo $this->_tpl_vars['RULE']['value']; ?>
</span></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['RULE']['compare_type'] == 4): ?>
 <tr>
  <td class="left"><?php echo $this->_tpl_vars['RULE']['title']; ?>
</td>
  <td class="right" style="width: 40px; padding-right: 0px;"><?php echo actionIcon(array('action' => 'editElementRule','icon' => "pencil.png",'form' => 'editElement','title' => 'Edit this rule','rule_id' => $this->_tpl_vars['RULE']['id']), $this); echo actionIcon(array('action' => 'deleteElementRule','icon' => "delete.png",'form' => 'editElement','title' => 'Delete this rule','ask' => "Are you sure to delete this rule?",'rule_id' => $this->_tpl_vars['RULE']['id']), $this);?>
</td>
  <td class="right">Script: <span style="color: red;"><?php echo $this->_tpl_vars['RULE']['value']; ?>
</span></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['RULE']['compare_type'] == 2 || $this->_tpl_vars['RULE']['compare_type'] == 3): ?>
 <tr>
  <td class="left"><?php echo $this->_tpl_vars['RULE']['title']; ?>
</td>
  <td class="right" style="width: 40px; padding-right: 0px;"><?php echo actionIcon(array('action' => 'editElementRule','icon' => "pencil.png",'form' => 'editElement','title' => 'Edit this rule','rule_id' => $this->_tpl_vars['RULE']['id']), $this); echo actionIcon(array('action' => 'deleteElementRule','icon' => "delete.png",'form' => 'editElement','title' => 'Delete this rule','ask' => "Are you sure to delete this rule?",'rule_id' => $this->_tpl_vars['RULE']['id']), $this);?>
</td>
  <td class="right">Regular expression: <span style="color: green;">Input</span> <?php echo ((is_array($_tmp='must match')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <span style="color: red;"><?php echo $this->_tpl_vars['RULE']['compare_query']; ?>
</span></td>
 </tr>
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="left">&nbsp;</td>
  <td class="right" colspan="2"><?php echo actionIcon(array('action' => 'addElementRule','icon' => "add_small.png",'form' => 'editElement','title' => 'Add a new rule','element_id' => $this->_tpl_vars['DATA']['element_id']), $this);?>
</td>
 </tr>
 <?php endif; ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_element_id" value="<?php echo $this->_tpl_vars['DATA']['element_id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_rule_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_form_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_insert_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_move_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="ee" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_script_id" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>