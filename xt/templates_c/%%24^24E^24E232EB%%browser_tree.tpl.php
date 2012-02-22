<?php /* Smarty version 2.6.9, created on 2011-06-08 10:29:25
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_tree.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_tree.tpl', 6, false),array('function', 'get_session_value', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_tree.tpl', 16, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_tree.tpl', 20, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/admin/browser_tree.tpl', 176, false),)), $this); ?>
<form method="post" id="o" name="o" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" onSubmit="window.document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BROWSER_BUTTONS'])));
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
_active.value='<?php echo $this->_tpl_vars['NODE']['node_id']; ?>
';window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='openNode';window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
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
_active.value='<?php echo $this->_tpl_vars['NODE']['node_id']; ?>
';window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='openNode';window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.parent.frames['master'].document.forms[1].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']): ?><span style="color: black;"><?php if ($this->_tpl_vars['NODE']['selected']): ?><b><?php echo $this->_tpl_vars['NODE']['title']; ?>
</b><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?></span><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?>&nbsp;</a></td>
      <td class="button" align="right"><?php if ($this->_tpl_vars['NODE']['id'] > 1): ?>
      <?php echo get_session_value(array('baseid' => $this->_tpl_vars['BASEID'],'value' => 'ctrl_cut','assign' => 'local_target'), $this);?>

      <?php echo get_session_value(array('baseid' => $this->_tpl_vars['BASEID'],'value' => 'ctrl_copy','assign' => 'local_target'), $this);?>

      <?php if ($this->_tpl_vars['CTRL']):  if ($this->_tpl_vars['NODE']['id'] != 1 && $this->_tpl_vars['CTRLENTRY'] == 0): ?>
          <?php if ($this->_tpl_vars['local_target']): ?>
          <?php echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'form' => 'o','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'after','title' => 'Insert after this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => 'o','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'before','title' => 'Insert before this category'), $this);?>

          <?php else:  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'form' => '0','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'after','title' => 'Insert after this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => '0','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'before','title' => 'Insert before this category'), $this); endif;  endif; ?>
          <?php if ($this->_tpl_vars['local_target']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => 'o','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'into','title' => 'Insert into this category'), $this); else:  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'into','title' => 'Insert into this category'), $this); endif;  else:  if ($this->_tpl_vars['NODE']['active'] == 1):  echo actionIcon(array('action' => 'deactivateNodeLang','icon' => "active.png",'form' => 'o','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Deactivate this category in this language'), $this); else:  echo actionIcon(array('action' => 'activateNodeLang','icon' => "inactive.png",'form' => 'o','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Activate this category in this language'), $this); endif;  echo actionIcon(array('action' => 'editNode','icon' => "pencil.png",'form' => '0','target' => 'slave1','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'manageStructure','title' => 'Edit this category'), $this);?>

          <?php echo actionIcon(array('action' => 'openNode','icon' => "table_sql_add.png",'form' => '1','target' => 'master','active' => $this->_tpl_vars['NODE']['id'],'open' => $this->_tpl_vars['NODE']['id'],'title' => 'Edit this category'), $this);?>

          <?php echo actionIcon(array('action' => 'cutNode','icon' => "cut.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'manageStructure','title' => 'Cut this category'), $this); echo actionIcon(array('action' => 'copyNode','icon' => "copy.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'manageStructure','title' => 'Copy this category'), $this); echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'o','node_perm' => 'manageFilePermissions','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit category permissions'), $this); echo actionIcon(array('action' => 'deleteNode','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'manageStructure','title' => 'Delete this category','ask' => "Are you sure you want to delete this category?"), $this); endif;  else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?></td>
     </tr>
    </table>
   </td>
  </tr>

 <?php endforeach; endif; unset($_from); ?>
</table>
<?php echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'o','node_perm' => 'manageFilePermissions','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit page node permissions'), $this); if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','node_perm' => 'manageFilePermissions','node_pid' => 0,'node_id' => 1,'target' => 'slave1','position' => 'into','title' => 'Insert into this node'), $this); endif; ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" value="" />
<input type="hidden" name="showtabs" value="1" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
    <?php echo yoffset(array(), $this);?>

</form>