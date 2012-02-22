<?php /* Smarty version 2.6.9, created on 2011-01-21 10:13:41
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/overview.tpl', 14, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/overview.tpl', 24, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/overview.tpl', 143, false),)), $this); ?>
<?php echo '
<script language="JavaScript" type="text/javascript"><!--
if(window.parent.frames[\'slave2\'].document.forms[0]){
    window.parent.frames[\'slave2\'].document.forms[0].submit();
}
//-->
</script>
'; ?>

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
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><a href="javascript:window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_pid.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;window.parent.frames['slave2'].document.forms[0].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /></a><?php else: ?><a href="javascript:window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.parent.frames['slave2'].document.forms[0].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /></a><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" width="9" /><?php endif; ?></td><?php endif; ?>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px">
       <a href="javascript:window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_pid.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;window.parent.frames['slave2'].document.forms[0].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']):  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  else:  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php endif;  endif; ?></a><br />
      </td>
      <td class="row"><a href="javascript:window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_pid.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';window.parent.frames['slave2'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;window.parent.frames['slave2'].document.forms[0].submit();document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['o'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']): ?><span style="color: black;"><?php if ($this->_tpl_vars['NODE']['selected']): ?><b><?php echo $this->_tpl_vars['NODE']['title']; ?>
</b><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?></span><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?>&nbsp;</a></td>
      <td class="button" align="right">
      <?php if ($this->_tpl_vars['NODE']['id'] > 1):  if ($this->_tpl_vars['CTRL']):  if (( $this->_tpl_vars['HOME_DIRS'] != $this->_tpl_vars['NODE']['tree_id'] ) || $this->_tpl_vars['HOME_DIRS'] == ""):  if ($this->_tpl_vars['NODE']['id'] != 1):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'form' => '0','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'after','title' => 'Insert after this folder'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => '0','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'before','title' => 'Insert before this folder'), $this); endif;  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'into','title' => 'Insert into this node'), $this); endif;  else:  if ($this->_tpl_vars['NODE']['active'] == 1):  echo actionIcon(array('action' => 'deactivateLang','icon' => "active.png",'form' => 'o','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Deactivate this folder in this language'), $this); else:  echo actionIcon(array('action' => 'activateLang','icon' => "inactive.png",'form' => 'o','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Activate this folder in this language'), $this); endif;  echo actionIcon(array('action' => 'editNode','icon' => "pencil.png",'form' => '0','target' => 'slave1','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'editFiles','title' => 'Edit this folder'), $this);?>

          <?php if (( $this->_tpl_vars['HOME_DIRS'] != $this->_tpl_vars['NODE']['tree_id'] ) || $this->_tpl_vars['HOME_DIRS'] == ""): ?>
          <?php echo actionIcon(array('action' => 'cutNode','icon' => "cut.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'deleteFiles','title' => 'Cut this folder'), $this); echo actionIcon(array('action' => 'copyNode','icon' => "copy.png",'form' => 'o','source_node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Copy this folder structure'), $this);?>

          <?php endif; ?>
          <?php echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'o','node_perm' => 'manageFilePermissions','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit folder permissions'), $this);?>

          <?php if (( $this->_tpl_vars['HOME_DIRS'] != $this->_tpl_vars['NODE']['tree_id'] ) || $this->_tpl_vars['HOME_DIRS'] == ""): ?>
          <?php echo actionIcon(array('action' => 'deleteNode','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'deleteFiles','title' => 'Delete this folder','ask' => "Are you sure you want to delete this folder?"), $this);?>

          <?php endif; ?>
      <?php endif;  else:  echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'o','node_perm' => 'manageFilePermissions','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'title' => 'Edit folder permissions'), $this); if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','node_perm' => 'manageFilePermissions','node_pid' => 0,'node_id' => 1,'target' => 'slave1','position' => 'into','title' => 'Insert into root folder'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  endif; ?>
      </td>
     </tr>
    </table>
   </td>
  </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_pid" value="" />
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['ADMINMODUL']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_source_node_id" value="" />
<?php echo yoffset(array(), $this);?>

</form>