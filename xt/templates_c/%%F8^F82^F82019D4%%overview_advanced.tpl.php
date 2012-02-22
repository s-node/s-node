<?php /* Smarty version 2.6.9, created on 2011-01-24 10:45:05
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview_advanced.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview_advanced.tpl', 7, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview_advanced.tpl', 17, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview_advanced.tpl', 158, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/overview_advanced.tpl', 72, false),)), $this); ?>
<form method="post" name="navigation" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" onSubmit="window.document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'],'yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<table cellpadding="0" cellspacing="0" width="100%">
 <?php $_from = $this->_tpl_vars['NODES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NODE']):
?>
  <?php if ($this->_tpl_vars['NODE']['allowed']['view'] == 1): ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <?php if ($this->_tpl_vars['NODE']['l'] != 1): ?><td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-32; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;document.forms['navigation'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /></a><?php else: ?><a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['navigation'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /></a><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="9" height="9" alt="" /><?php endif; ?></td><?php endif; ?>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px">
       <a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['navigation'].submit();"><?php if ($this->_tpl_vars['NODE']['itw']):  if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['level'] == 2): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/data.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document.png" alt="" /><?php endif;  else:  if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['level'] == 2): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/data.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/folder_document.png" alt="" /><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/document.png" alt="" /><?php endif;  endif; ?></a><br />
      </td>
      <td class="row"><?php if (! $this->_tpl_vars['NODE']['lang_na']):  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><a href="#" onClick="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['navigation'].submit();"><?php endif;  endif;  if ($this->_tpl_vars['NODE']['itw']): ?><span style="color: black;"><?php if ($this->_tpl_vars['NODE']['selected']): ?><b><?php echo $this->_tpl_vars['NODE']['id']; ?>
: <?php echo $this->_tpl_vars['NODE']['title']; ?>
</b><?php if ($this->_tpl_vars['NODE']['subs'] > 0): ?>&nbsp;(<?php echo $this->_tpl_vars['NODE']['subs']; ?>
)<?php endif;  else:  echo $this->_tpl_vars['NODE']['id']; ?>
: <?php echo $this->_tpl_vars['NODE']['title'];  if ($this->_tpl_vars['NODE']['subs'] > 0): ?>&nbsp;(<?php echo $this->_tpl_vars['NODE']['subs']; ?>
)<?php endif;  endif; ?></span><?php else:  echo $this->_tpl_vars['NODE']['id']; ?>
: <?php echo $this->_tpl_vars['NODE']['title'];  if ($this->_tpl_vars['NODE']['subs'] > 0): ?>&nbsp;(<?php echo $this->_tpl_vars['NODE']['subs']; ?>
)<?php endif;  endif;  if (! $this->_tpl_vars['NODE']['lang_na']):  if ($this->_tpl_vars['NODE']['subs'] > 0): ?></a><?php endif;  endif; ?></td>
      <td class="button" align="right">
      <?php if ($this->_tpl_vars['NODE']['id'] > 1):  if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'node_perm' => 'addPages','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'after','form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'target_module' => 'e','title' => 'Insert after this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'node_perm' => 'addPages','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'before','target_module' => 'e','title' => 'Insert before this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'node_perm' => 'addPages','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'into','target_module' => 'e','title' => 'Insert into this node'), $this); else:  if ($this->_tpl_vars['NODE']['active'] == 1):  echo actionIcon(array('action' => 'deactivateLang','icon' => "active.png",'form' => '0','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','title' => 'Deactivate this page in this language','yoffset' => '1'), $this); else:  echo actionIcon(array('action' => 'activateLang','icon' => "inactive.png",'form' => '0','node_perm' => 'changeStatus','node_pid' => $this->_tpl_vars['NODE']['pid'],'id' => $this->_tpl_vars['NODE']['id'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','title' => 'Activate this page in this language','yoffset' => '1'), $this); endif;  if (! $this->_tpl_vars['NODE']['lang_na']): ?><a href="#" onclick="window.open('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['NODE']['id']; ?>
&amp;tmp_lang=<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
','Preview');"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/view.png" alt="<?php echo ((is_array($_tmp='Preview this page')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Preview this page')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="padding-right: 4px;"
          /></a><?php else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  echo actionIcon(array('action' => 'editPage','icon' => "pencil.png",'form' => '0','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'editPages','target' => 'slave1','title' => 'Edit this page','target_tpl' => $this->_tpl_vars['TPL']), $this);?>

          <?php if ($this->_tpl_vars['NODE']['id'] != 10000): ?>
          <?php echo actionIcon(array('action' => 'cutNode','icon' => "cut.png",'form' => 'navigation','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'deletePages','title' => 'Cut this page node'), $this);?>

          <?php echo actionIcon(array('action' => 'copyNode','icon' => "copy.png",'form' => 'navigation','source_node_id' => $this->_tpl_vars['NODE']['id'],'title' => 'Copy this page node'), $this);?>

          <?php endif; ?>
          <?php echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'navigation','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'manageNodePermissions','title' => 'Edit page node permissions'), $this);?>

 		            <?php if ($this->_tpl_vars['NODE']['pid'] != 106 && $this->_tpl_vars['nodel'] != '1' && $this->_tpl_vars['NODE']['id'] != 10000): ?>
          <?php echo actionIcon(array('action' => 'deleteNode','icon' => "delete.png",'form' => 'navigation','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'node_perm' => 'deletePages','title' => 'Delete this page node','ask' => "Are you sure you want to delete this node?",'yoffset' => '1'), $this);?>

          <?php else: ?>
          <?php $this->assign('nodel', '1'); ?>
          <?php endif; ?>
      <?php endif;  else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?>
      </td>
     </tr>
    </table>
   </td>
  </tr>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
</table>
<?php echo actionIcon(array('action' => 'editNodePerms','icon' => "lock.png",'form' => 'navigation','node_perm' => 'manageNodePermissions','node_id' => 1,'node_pid' => 0,'title' => 'Edit page node permissions'), $this); if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => $this->_tpl_vars['CTRL_FORM'],'target' => $this->_tpl_vars['CTRL_TARGET'],'node_perm' => 'manageNodePermissions','node_pid' => 0,'node_id' => 1,'position' => 'into','title' => 'Insert into this node'), $this);?>

<?php endif; ?>
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
_target_module" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_source_node_id" value="" />
<input type="hidden" name="module" value="oa" />
<?php echo yoffset(array(), $this);?>

</form>
</td>
</tr>
</table>