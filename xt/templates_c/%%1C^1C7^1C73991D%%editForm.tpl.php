<?php /* Smarty version 2.6.9, created on 2011-01-21 10:33:18
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl', 13, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl', 24, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl', 68, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl', 30, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl', 69, false),array('function', 'counter', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl', 117, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editForm.tpl', 203, false),)), $this); ?>
<?php echo '
<script language="JavaScript"><!--
if(window.parent.frames[\'master\']){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<form method="POST" name="editForm">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Form')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span><span class="title"> <?php echo $this->_tpl_vars['DATA']['title']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_FORM_BUTTONS'],'yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
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
_description" rows="6" cols="65"><?php echo $this->_tpl_vars['DATA']['description']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Choose layout')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_layout" value="<?php if ($this->_tpl_vars['DATA']['layout'] == ''): ?>default.tpl<?php else:  echo $this->_tpl_vars['DATA']['layout'];  endif; ?>" size="42"></td>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Identifier')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_identifier" value="<?php echo $this->_tpl_vars['DATA']['identifier']; ?>
" size="42"></td>
  </td>
 </tr>
<?php if ($this->_tpl_vars['DISPLAY']['relations']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['DATA']['id'],'ctitle' => $this->_tpl_vars['DATA']['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if ($this->_tpl_vars['DISPLAY']['properties']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['DATA']['id'],'content_type' => $this->_tpl_vars['BASEID'],'formname' => 'editForm','nogroups' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Fields')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_FORM_ELEMENTS_BUTTONS'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_header"><?php echo ((is_array($_tmp='Elements')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp='Field type')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="120"><?php echo ((is_array($_tmp='Scripting Identifier')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['ELEMENTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['E'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['E']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ELEMENT']):
        $this->_foreach['E']['iteration']++;
?>
 <tr>
  <td class="left" style="<?php if ($this->_tpl_vars['ELEMENT']['element_type_id'] == 8): ?>border-bottom: 1px solid black; color: black; font-weight: bold;<?php endif; ?>"><?php echo $this->_tpl_vars['ELEMENT']['pos']; ?>
. <?php if ($this->_tpl_vars['ELEMENT']['required']): ?><b><?php endif;  echo ((is_array($_tmp=$this->_tpl_vars['ELEMENT']['label'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 24, "...", true) : smarty_modifier_truncate($_tmp, 24, "...", true));  if ($this->_tpl_vars['ELEMENT']['required']): ?></b><?php endif; ?>&nbsp;</td>
  <td class="right" style="padding: 4px; padding-top: 5px; width: 80px; <?php if ($this->_tpl_vars['ELEMENT']['element_type_id'] == 8): ?>border-bottom: 1px solid black;<?php endif;  if ($this->_tpl_vars['II'] > 0): ?>padding-left:30px;<?php endif; ?> "><?php if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertElement','icon' => "explorer/arrow_down_green.png",'position' => 'after','form' => 'editForm','yoffset' => true,'insert_position' => $this->_tpl_vars['ELEMENT']['pos'],'title' => 'Insert element after this element'), $this); echo actionIcon(array('action' => 'insertElement','icon' => "explorer/arrow_up_green.png",'position' => 'before','form' => 'editForm','yoffset' => true,'insert_position' => $this->_tpl_vars['ELEMENT']['pos'],'title' => 'Insert element before this element'), $this); else:  echo actionIcon(array('action' => 'editElement','icon' => "pencil.png",'form' => 'editForm','yoffset' => true,'element_id' => $this->_tpl_vars['ELEMENT']['element_id'],'title' => 'Edit element'), $this); echo actionIcon(array('action' => 'deleteElement','icon' => "delete.png",'form' => 'editForm','yoffset' => true,'element_id' => $this->_tpl_vars['ELEMENT']['element_id'],'ask' => "Are you sure you want to delete this form element?",'title' => 'Delete element'), $this); if (! ($this->_foreach['E']['iteration'] == $this->_foreach['E']['total'])):  echo actionIcon(array('action' => 'moveElement','icon' => "explorer/arrow_down_green.png",'position' => 'down','form' => 'editForm','yoffset' => true,'move_position' => $this->_tpl_vars['ELEMENT']['pos'],'element_id' => $this->_tpl_vars['ELEMENT']['element_id'],'title' => 'Move element down'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  if (! ($this->_foreach['E']['iteration'] <= 1)):  echo actionIcon(array('action' => 'moveElement','icon' => "explorer/arrow_up_green.png",'position' => 'up','form' => 'editForm','yoffset' => true,'move_position' => $this->_tpl_vars['ELEMENT']['pos'],'element_id' => $this->_tpl_vars['ELEMENT']['element_id'],'title' => 'Move element up'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  endif; ?></td>
  <td class="right" style="<?php if ($this->_tpl_vars['ELEMENT']['element_type_id'] == 8): ?>border-bottom: 1px solid black;<?php endif; ?>"><?php echo $this->_tpl_vars['ELEMENT']['element_type']; ?>
&nbsp;</td>
  <td class="right" style="<?php if ($this->_tpl_vars['ELEMENT']['element_type_id'] == 8): ?>border-bottom: 1px solid black;<?php endif; ?>"><?php echo $this->_tpl_vars['ELEMENT']['scripting_identifier']; ?>
&nbsp;</td>
 </tr>
 <?php if ($this->_tpl_vars['ELEMENT']['element_type_id'] == 6 && $this->_tpl_vars['ELEMENT']['size'] > 1): ?>
 <?php echo smarty_function_counter(array('start' => $this->_tpl_vars['ELEMENT']['size'],'direction' => 'down','print' => false,'assign' => 'II'), $this);?>

 <?php $this->assign('GROUPWIDTH', $this->_tpl_vars['ELEMENT']['size']); ?>
 <?php $this->assign('ISCOUNTING', '1'); ?>
 <?php elseif ($this->_tpl_vars['ISCOUNTING'] == 1): ?>
 <?php echo smarty_function_counter(array(), $this);?>

 <?php else: ?>
 <?php $this->assign('ISCOUNTING', '0'); ?>
 <?php $this->assign('II', '0'); ?>
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
 <tr>
 <td colspan="4"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_FORM_BUTTONS'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
 </tr>

 <tr>
  <td class="view_header" colspan="4">
   <span class="title"><?php echo ((is_array($_tmp='Actions')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_FORM_ACTIONS_BUTTONS'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <?php $_from = $this->_tpl_vars['ACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['A'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['A']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ACTION']):
        $this->_foreach['A']['iteration']++;
?>
 <tr>
  <td class="left"><?php echo $this->_tpl_vars['ACTION']['pos']; ?>
. <?php echo ((is_array($_tmp=$this->_tpl_vars['ACTION']['label'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 24, "...", true) : smarty_modifier_truncate($_tmp, 24, "...", true)); ?>
&nbsp;</td>
  <td class="right" style="padding: 4px; padding-top: 5px; width: 80px;"><?php if ($this->_tpl_vars['CTRL_ACTION']):  echo actionIcon(array('action' => 'insertAction','icon' => "explorer/arrow_down_green.png",'position' => 'after','form' => 'editForm','yoffset' => true,'insert_position' => $this->_tpl_vars['ACTION']['pos'],'title' => 'Insert action after this action'), $this); echo actionIcon(array('action' => 'insertAction','icon' => "explorer/arrow_up_green.png",'position' => 'before','form' => 'editForm','yoffset' => true,'insert_position' => $this->_tpl_vars['ACTION']['pos'],'title' => 'Insert action before this action'), $this); else:  echo actionIcon(array('action' => 'editAction','icon' => "pencil.png",'form' => 'editForm','yoffset' => true,'action_id' => $this->_tpl_vars['ACTION']['id'],'title' => 'Edit action'), $this); echo actionIcon(array('action' => 'deleteAction','icon' => "delete.png",'form' => 'editForm','yoffset' => true,'action_id' => $this->_tpl_vars['ACTION']['id'],'ask' => "Are you sure you want to delete this form element?",'title' => 'Delete action'), $this); if (! ($this->_foreach['A']['iteration'] == $this->_foreach['A']['total'])):  echo actionIcon(array('action' => 'moveAction','icon' => "explorer/arrow_down_green.png",'position' => 'down','form' => 'editForm','yoffset' => true,'move_position' => $this->_tpl_vars['ACTION']['pos'],'action_id' => $this->_tpl_vars['ACTION']['id'],'title' => 'Move action down'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  if (! ($this->_foreach['A']['iteration'] <= 1)):  echo actionIcon(array('action' => 'moveAction','icon' => "explorer/arrow_up_green.png",'position' => 'up','form' => 'editForm','yoffset' => true,'move_position' => $this->_tpl_vars['ACTION']['pos'],'action_id' => $this->_tpl_vars['ACTION']['id'],'title' => 'Move action up'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  endif; ?></td>
  <td class="right"><?php echo $this->_tpl_vars['ACTION']['value']; ?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.formmanager/admin/editForm_preaction.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_element_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_preaction_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_insert_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_move_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_form_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_script_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<?php echo yoffset(array(), $this);?>

</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>