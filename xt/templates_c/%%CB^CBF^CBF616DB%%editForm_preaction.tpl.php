<?php /* Smarty version 2.6.9, created on 2011-01-21 10:33:18
         compiled from ch.iframe.snode.formmanager/admin/editForm_preaction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'ch.iframe.snode.formmanager/admin/editForm_preaction.tpl', 4, false),array('modifier', 'truncate', 'ch.iframe.snode.formmanager/admin/editForm_preaction.tpl', 15, false),array('function', 'actionIcon', 'ch.iframe.snode.formmanager/admin/editForm_preaction.tpl', 16, false),)), $this); ?>
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
  <td class="view_header" colspan="4">
   <span class="title"><?php echo ((is_array($_tmp='PreActions')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_FORM_PREACTIONS_BUTTONS'],'withouthidden' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <?php $_from = $this->_tpl_vars['PREACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['A'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['A']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['PREACTION']):
        $this->_foreach['A']['iteration']++;
?>
 <tr>
  <td class="left"><?php echo $this->_tpl_vars['PREACTION']['pos']; ?>
. <?php echo ((is_array($_tmp=$this->_tpl_vars['PREACTION']['label'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 24, "...", true) : smarty_modifier_truncate($_tmp, 24, "...", true)); ?>
&nbsp;</td>
  <td class="right" style="padding: 4px; padding-top: 5px; width: 80px;"><?php if ($this->_tpl_vars['CTRL_PREACTION']):  echo actionIcon(array('action' => 'insertPreAction','icon' => "explorer/arrow_down_green.png",'position' => 'after','form' => 'editForm','yoffset' => true,'insert_position' => $this->_tpl_vars['PREACTION']['pos'],'title' => 'Insert PreAction after this PreAction'), $this); echo actionIcon(array('action' => 'insertPreAction','icon' => "explorer/arrow_up_green.png",'position' => 'before','form' => 'editForm','yoffset' => true,'insert_position' => $this->_tpl_vars['PREACTION']['pos'],'title' => 'Insert PreAction before this PreAction'), $this); else:  echo actionIcon(array('action' => 'editPreAction','icon' => "pencil.png",'form' => 'editForm','yoffset' => true,'preaction_id' => $this->_tpl_vars['PREACTION']['id'],'title' => 'Edit PreAction'), $this); echo actionIcon(array('action' => 'deletePreAction','icon' => "delete.png",'form' => 'editForm','yoffset' => true,'preaction_id' => $this->_tpl_vars['PREACTION']['id'],'ask' => "Are you sure you want to delete this form element?",'title' => 'Delete PreAction'), $this); if (! ($this->_foreach['A']['iteration'] == $this->_foreach['A']['total'])):  echo actionIcon(array('action' => 'movePreAction','icon' => "explorer/arrow_down_green.png",'position' => 'down','form' => 'editForm','yoffset' => true,'move_position' => $this->_tpl_vars['PREACTION']['pos'],'preaction_id' => $this->_tpl_vars['PREACTION']['id'],'title' => 'Move PreAction down'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  if (! ($this->_foreach['A']['iteration'] <= 1)):  echo actionIcon(array('action' => 'movePreAction','icon' => "explorer/arrow_up_green.png",'position' => 'up','form' => 'editForm','yoffset' => true,'move_position' => $this->_tpl_vars['PREACTION']['pos'],'preaction_id' => $this->_tpl_vars['PREACTION']['id'],'title' => 'Move PreAction up'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  endif; ?></td>
  <td class="right"><?php echo $this->_tpl_vars['PREACTION']['value']; ?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>