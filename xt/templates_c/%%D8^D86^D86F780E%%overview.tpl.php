<?php /* Smarty version 2.6.9, created on 2011-01-21 10:52:42
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/overview.tpl', 6, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/overview.tpl', 16, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/overview.tpl', 117, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/overview.tpl', 117, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/overview.tpl', 126, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/overview.tpl', 180, false),)), $this); ?>
<form method="post" name="o" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'o')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <?php $_from = $this->_tpl_vars['NODES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NODE']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <?php if ($this->_tpl_vars['NODE']['l'] != 1): ?><td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-32; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0 || $this->_tpl_vars['EVENTS'][$this->_tpl_vars['NODE']['id']] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><a href="javascript:document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /></a><?php else: ?><a href="javascript:document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /></a><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="9" /><?php endif; ?></td><?php endif; ?>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px">
       <a href="javascript:window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.parent.frames['master'].document.forms[1].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']):  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  else:  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php endif;  endif; ?></a><br />
      </td>
      <td class="row"><a href="javascript:window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.parent.frames['master'].document.forms[1].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']): ?><span style="color: black;"><?php if ($this->_tpl_vars['NODE']['selected']): ?><b><?php echo $this->_tpl_vars['NODE']['title']; ?>
</b><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?></span><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?>&nbsp;</a></td>
      <td class="button" align="right"><?php if ($this->_tpl_vars['NODE']['id'] > 1): ?>
      <?php if ($this->_tpl_vars['CTRL']):  if ($this->_tpl_vars['NODE']['id'] != 1 && $this->_tpl_vars['CTRLENTRY'] == 0):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'form' => '0','perm' => 'addEvents','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'after','title' => 'Insert after this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => '0','perm' => 'addEvents','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'before','title' => 'Insert before this category'), $this); endif;  if ($this->_tpl_vars['CTRLENTRY']):  echo actionIcon(array('action' => 'insertEntry','icon' => "explorer/folder_into.png",'form' => '1','perm' => 'addEvents','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'master','position' => 'into','title' => 'Insert into this category'), $this); else:  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','perm' => 'edit','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'into','title' => 'Insert into this category'), $this); endif;  else:  if ($this->_tpl_vars['NODE']['active'] == 1):  echo actionIcon(array('action' => 'deactivateLang','icon' => "active.png",'form' => 'o','perm' => 'edit','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Deactivate this category in this language'), $this); else:  echo actionIcon(array('action' => 'activateLang','icon' => "inactive.png",'form' => 'o','perm' => 'edit','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Activate this category in this language'), $this); endif;  echo actionIcon(array('action' => 'editNode','icon' => "pencil.png",'form' => '0','target' => 'slave1','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'perm' => 'edit','title' => 'Edit this category'), $this); echo actionIcon(array('action' => 'cutNode','icon' => "cut.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'perm' => 'edit','title' => 'Cut this category'), $this); echo actionIcon(array('action' => 'copyNode','icon' => "copy.png",'form' => 'o','source_node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Copy this category'), $this); echo actionIcon(array('action' => 'deleteNode','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'perm' => 'edit','title' => 'Delete this category','ask' => "Are you sure you want to delete this category?"), $this); endif;  else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php if ($this->_tpl_vars['NODE']['itw'] && $this->_tpl_vars['CTRL'] == 0): ?>
  <?php $_from = $this->_tpl_vars['EVENTS'][$this->_tpl_vars['NODE']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['EVENT']):
?>
  <tr>
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-12; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['EVENT']['timer'] == 'ready'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_pause.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['EVENT']['timer'] == 'expired'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_stop.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['EVENT']['timer'] == 'running'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_run.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['EVENT']['timer'] == 'unused'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" width="16" /><?php endif; ?></td>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document.png" width="16" height="16" /></td>
      <td class="row" style="width: 50%;"><?php echo actionLink(array('action' => 'editEvent','form' => '0','target' => 'slave1','id' => $this->_tpl_vars['EVENT']['id'],'perm' => 'edit','title' => 'Edit this event entry','text' => ((is_array($_tmp=$this->_tpl_vars['EVENT']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true))), $this);?>

       </td>
      <td class="row">(<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['from_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
)</td>
      <td class="button" width="120" align="right"><?php if ($this->_tpl_vars['EVENT']['registrations'] > 0):  echo actionIcon(array('action' => 'showRegistrations','icon' => "users1.png",'form' => 0,'perm' => 'edit','id' => $this->_tpl_vars['EVENT']['id'],'target' => 'slave1','title' => 'Show registrations'), $this); else:  echo actionIcon(array('action' => 'showRegistrations','icon' => "users1_na.png",'form' => 0,'perm' => 'edit','id' => $this->_tpl_vars['EVENT']['id'],'target' => 'slave1','title' => 'Show registrations'), $this); endif;  if ($this->_tpl_vars['EVENT']['locked'] != 1 || $this->_tpl_vars['EVENT']['locked_user'] == $this->_tpl_vars['USER_ID']):  if ($this->_tpl_vars['EVENT']['active']):  echo actionIcon(array('action' => 'deactivate','icon' => "active.png",'form' => 'o','perm' => 'edit','id' => $this->_tpl_vars['EVENT']['id'],'title' => 'Deactivate this event entry'), $this); else:  echo actionIcon(array('action' => 'activate','icon' => "inactive.png",'form' => 'o','perm' => 'edit','id' => $this->_tpl_vars['EVENT']['id'],'title' => 'Activate this event entry'), $this); endif;  echo actionIcon(array('action' => 'editEvent','icon' => "pencil.png",'form' => '0','target' => 'slave1','id' => $this->_tpl_vars['EVENT']['id'],'perm' => 'edit','title' => 'Edit this event entry'), $this); echo actionIcon(array('action' => 'cutEntry','icon' => "cut.png",'form' => 'o','id' => $this->_tpl_vars['EVENT']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'perm' => 'edit','title' => 'Cut this entry'), $this); echo actionIcon(array('action' => 'copyEntry','icon' => "copy.png",'form' => 'o','id' => $this->_tpl_vars['EVENT']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Copy this entry'), $this); echo actionIcon(array('action' => 'deleteEvent','icon' => "delete.png",'form' => 'o','id' => $this->_tpl_vars['EVENT']['id'],'perm' => 'edit','title' => 'Delete this event entry','ask' => "Are you sure you want to delete this event entry?"), $this); else:  echo ((is_array($_tmp='In edit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  endif; ?></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
</table>
<?php echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'o','node_perm' => 'edit','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit page node permissions'), $this); if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','perm' => 'edit','node_pid' => 0,'node_id' => 1,'target' => 'slave1','position' => 'into','title' => 'Insert into this node'), $this); endif;  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.events/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>