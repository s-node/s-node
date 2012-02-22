<?php /* Smarty version 2.6.9, created on 2011-01-21 10:26:53
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/overview.tpl', 6, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/overview.tpl', 16, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/overview.tpl', 126, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/overview.tpl', 228, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/overview.tpl', 119, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/overview.tpl', 126, false),)), $this); ?>
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
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0 || $this->_tpl_vars['ARTICLES'][$this->_tpl_vars['NODE']['id']] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><a href="javascript:document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
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
      <?php if ($this->_tpl_vars['CTRL']):  if ($this->_tpl_vars['NODE']['id'] != 1 && $this->_tpl_vars['CTRLENTRY'] == 0):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'form' => '0','node_perm' => 'add','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'after','title' => 'Insert after this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => '0','node_perm' => 'add','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'before','title' => 'Insert before this category'), $this); endif;  if ($this->_tpl_vars['CTRLENTRY']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '1','node_perm' => 'add','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'master','position' => 'into','title' => 'Insert into this category'), $this); else:  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','node_perm' => 'add','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'into','title' => 'Insert into this category'), $this); endif;  else:  if ($this->_tpl_vars['NODE']['active'] == 1):  echo actionIcon(array('action' => 'deactivateLang','icon' => "active.png",'form' => 'o','node_perm' => 'statuschange','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Deactivate this category in this language'), $this); else:  echo actionIcon(array('action' => 'activateLang','icon' => "inactive.png",'form' => 'o','node_perm' => 'statuschange','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Activate this category in this language'), $this); endif;  echo actionIcon(array('action' => 'editNode','icon' => "pencil.png",'form' => '0','target' => 'slave1','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'edit','title' => 'Edit this category'), $this); echo actionIcon(array('action' => 'cutNode','icon' => "cut.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'delete','title' => 'Cut this category'), $this); echo actionIcon(array('action' => 'copyNode','icon' => "copy.png",'form' => 'o','source_node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Copy this category'), $this); echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'o','node_perm' => 'manageNodePermissions','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit category permissions'), $this); echo actionIcon(array('action' => 'deleteNode','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'delete','title' => 'Delete this category','ask' => "Are you sure you want to delete this category?"), $this); endif;  else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php if ($this->_tpl_vars['NODE']['itw'] && $this->_tpl_vars['CTRL'] == 0): ?>
  <?php $_from = $this->_tpl_vars['ARTICLES'][$this->_tpl_vars['NODE']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ARTICLE']):
?>
  <?php if ($this->_tpl_vars['ARTICLE']['rid'] != ""): ?>
  <tr>
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-12; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['ARTICLE']['timer'] == 'ready'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_pause.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['ARTICLE']['timer'] == 'expired'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_stop.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['ARTICLE']['timer'] == 'running'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_run.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['ARTICLE']['timer'] == 'unused'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" width="16" /><?php endif; ?></td>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px"><?php if ($this->_tpl_vars['ARTICLE']['published'] == 1): ?><img class="icon" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document_green.png" alt="<?php echo ((is_array($_tmp='Published')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Published')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/><?php else:  echo actionIcon(array('action' => 'publish','icon' => "document_red.png",'form' => 'o','perm' => 'statuschange','id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Publish this article'), $this); endif; ?></td>
      <td class="row"><?php echo actionLink(array('action' => 'editArticle','form' => '0','target' => 'slave1','id' => $this->_tpl_vars['ARTICLE']['id'],'node_perm' => 'edit','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit this article entry','text' => ((is_array($_tmp=$this->_tpl_vars['ARTICLE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 45, "...", true) : smarty_modifier_truncate($_tmp, 45, "...", true))), $this);?>

       </td>
      <td class="button" width="120" align="right"><?php if ($this->_tpl_vars['ARTICLE']['locked'] != 1 || $this->_tpl_vars['ARTICLE']['locked_user'] == $this->_tpl_vars['USER_ID']):  if ($this->_tpl_vars['ARTICLE']['active']):  echo actionIcon(array('action' => 'view','icon' => "view.png",'form' => 'o','node_perm' => 'view','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Preview this article entry'), $this); echo actionIcon(array('action' => 'deactivate','icon' => "active.png",'form' => 'o','node_perm' => 'statuschange','id' => $this->_tpl_vars['ARTICLE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Deactivate this article entry'), $this); else:  echo actionIcon(array('action' => 'activate','icon' => "inactive.png",'form' => 'o','node_perm' => 'statuschange','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Activate this article entry'), $this); endif;  echo actionIcon(array('action' => 'editArticle','icon' => "pencil.png",'form' => '0','target' => 'slave1','id' => $this->_tpl_vars['ARTICLE']['id'],'node_perm' => 'edit','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit this article entry'), $this); echo actionIcon(array('action' => 'cutEntry','icon' => "cut.png",'form' => 'o','id' => $this->_tpl_vars['ARTICLE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'delete','title' => 'Cut this entry'), $this); echo actionIcon(array('action' => 'copyEntry','icon' => "copy.png",'form' => 'o','id' => $this->_tpl_vars['ARTICLE']['id'],'title' => 'Copy this entry','node_perm' => 'add','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id']), $this); echo actionIcon(array('action' => 'deleteArticle','icon' => "delete.png",'form' => 'o','id' => $this->_tpl_vars['ARTICLE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'delete','title' => 'Delete this article entry','ask' => "Are you sure you want to delete this article entry?"), $this); else:  echo ((is_array($_tmp='In edit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  endif; ?></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
</table>
<?php echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'o','node_perm' => 'managePermissions','node_id' => 1,'node_pid' => 0,'title' => 'Edit page node permissions'), $this); if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','node_perm' => 'managePermissions','node_pid' => 0,'node_id' => 1,'target' => 'slave1','position' => 'into','title' => 'Insert into this node'), $this); endif; ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_source_node_id" value="" />
<?php echo yoffset(array(), $this);?>

</form>