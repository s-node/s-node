<?php /* Smarty version 2.6.9, created on 2011-01-21 10:18:11
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/overview.tpl', 8, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/overview.tpl', 16, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/overview.tpl', 31, false),)), $this); ?>
<form method="POST" name="o">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.securitycenter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <?php $_from = $this->_tpl_vars['NODES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NODE']):
?>
 <?php if ($this->_tpl_vars['NODE']['l'] != 1 || $this->_tpl_vars['CTRL'] != 0): ?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" colspan="2">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <?php if ($this->_tpl_vars['NODE']['l'] != 1): ?><td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-32; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['pid']; ?>
;document.forms['navigation'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /></a><?php else: ?><a href="javascript:document.forms['navigation'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['navigation'].submit();" /><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /></a><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="9" height="9" alt="" /><?php endif; ?></td><?php endif; ?>
      <td class="row" style="padding: 5px; padding-right: 0px;width: 16px">
       <a href="javascript:document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms[1].submit();"><?php if ($this->_tpl_vars['NODE']['itw']):  if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['level'] == 2): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/data.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  else:  if ($this->_tpl_vars['NODE']['level'] == 2): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/data.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/data.png" alt="" /><?php endif; ?></a><br />
      </td>
      <td class="row"><?php if ($this->_tpl_vars['NODE']['itw']):  echo actionLink(array('action' => 'clickOnNode','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['NODE']['title'],'open' => $this->_tpl_vars['NODE']['id'],'style' => "color:black; font-weight:bold",'principal_type' => 4), $this); else:  echo actionLink(array('action' => 'clickOnNode','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['NODE']['title'],'open' => $this->_tpl_vars['NODE']['id'],'principal_type' => 4), $this); endif; ?>&nbsp;</a></td>
      <td class="button" align="right">
      <?php if ($this->_tpl_vars['CTRL']):  if ($this->_tpl_vars['NODE']['id'] != 1):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'form' => '0','perm' => 'pools','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'after','title' => 'Insert after this node'), $this); echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => '0','perm' => 'pools','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'before','title' => 'Insert before this node'), $this); endif;  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => '0','perm' => 'pools','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'target' => 'slave1','position' => 'into','title' => 'Insert into this node'), $this); else:  if ($this->_tpl_vars['NODE']['id'] != 1):  echo actionIcon(array('action' => 'editNode','icon' => "pencil.png",'form' => '0','target' => 'slave1','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'perm' => 'pools','title' => 'Edit this page'), $this); echo actionIcon(array('action' => 'cutNode','icon' => "cut.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'perm' => 'pools','title' => 'Cut this page node'), $this); echo actionIcon(array('action' => 'deleteNode','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'perm' => 'pools','title' => 'Delete this page node','ask' => "Are you sure you want to delete this node?"), $this); else: ?> &nbsp;<?php endif; ?>
      <?php endif; ?>
      </td>
     </tr>
    </table>
   </td>
  </tr>
  <?php $_from = $this->_tpl_vars['ROLES'][$this->_tpl_vars['NODE']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ROLE']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" colspan="2">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20+5; ?>
px; width: 1px;padding-right: 0px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/role.png" width="16" /></td>
      <td class="row"><?php if ($this->_tpl_vars['PRINCIPAL_ID'] == $this->_tpl_vars['ROLE']['id'] && $this->_tpl_vars['PRINCIPAL_TYPE'] == 3 && $this->_tpl_vars['ROLE']['node_id'] == $this->_tpl_vars['OPEN']):  echo actionLink(array('action' => 'clickOnRole','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['ROLE']['title'],'open' => $this->_tpl_vars['NODE']['id'],'principal_id' => $this->_tpl_vars['ROLE']['id'],'principal_type' => 3,'style' => "color:black; font-weight:bold"), $this); else:  echo actionLink(array('action' => 'clickOnRole','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['ROLE']['title'],'open' => $this->_tpl_vars['NODE']['id'],'principal_id' => $this->_tpl_vars['ROLE']['id'],'principal_type' => 3), $this); endif; ?></td>
     <td class="row" align="right"><?php echo actionIcon(array('action' => 's1editRole','icon' => "pencil.png",'form' => '0','target' => 'slave1','role_id' => $this->_tpl_vars['ROLE']['id'],'title' => 'Edit this role'), $this); echo actionIcon(array('action' => 'removeRoleFromPool_o','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'principal_id' => $this->_tpl_vars['ROLE']['id'],'perm' => 'roles','title' => 'remove this role','yoffset' => 1), $this);?>

     </td>
      </tr>
    </table>
   </td>
  </tr>

  <?php if ($this->_tpl_vars['PRINCIPAL_ID'] == $this->_tpl_vars['ROLE']['id'] && $this->_tpl_vars['PRINCIPAL_TYPE'] == 3 && $this->_tpl_vars['ROLE']['node_id'] == $this->_tpl_vars['OPEN']): ?>

      <?php $_from = $this->_tpl_vars['GROUPSINROLES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['GIR']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" colspan="2">
       <td>
        <table cellspacing="0" cellpadding="0" width="100%">
         <tr>
          <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20+25; ?>
px; width: 1px;padding-right: 0px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/group.png" width="16" /></td>
      <td class="row"><?php if ($this->_tpl_vars['GROUP_ID'] == $this->_tpl_vars['GIR']['id'] && $this->_tpl_vars['PRINCIPAL_TYPE'] == 3 && $this->_tpl_vars['ROLE']['node_id'] == $this->_tpl_vars['OPEN']):  echo actionLink(array('action' => 'clickOnGroup','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['GIR']['title'],'open' => $this->_tpl_vars['NODE']['id'],'group_id' => $this->_tpl_vars['GIR']['id'],'group_selected' => 1,'style' => "color:black; font-weight:bold"), $this); else:  echo actionLink(array('action' => 'clickOnGroup','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['GIR']['title'],'open' => $this->_tpl_vars['NODE']['id'],'group_id' => $this->_tpl_vars['GIR']['id'],'group_selected' => 1), $this); endif; ?></td>

      <td class="row" align="right"><?php echo actionIcon(array('action' => 's1EditGroup','icon' => "pencil.png",'form' => '0','target' => 'slave1','group_id' => $this->_tpl_vars['GIR']['id'],'title' => 'Edit this group'), $this); echo actionIcon(array('action' => 'removeGroupFromRole','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'role_id' => $this->_tpl_vars['ROLE']['id'],'group_id' => $this->_tpl_vars['GIR']['id'],'perm' => 'roles','title' => 'remove this group','yoffset' => 1), $this);?>

     </td>
     </tr>
    </table>
       </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>


  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
  <?php $_from = $this->_tpl_vars['GROUPS'][$this->_tpl_vars['NODE']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['GROUP']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" colspan="2">
   <td>
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20+5; ?>
px; width: 1px;padding-right: 0px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/group.png" width="16" /></td>
      <td class="row"><?php if ($this->_tpl_vars['PRINCIPAL_ID'] == $this->_tpl_vars['GROUP']['id'] && $this->_tpl_vars['PRINCIPAL_TYPE'] == 2 && $this->_tpl_vars['GROUP']['node_id'] == $this->_tpl_vars['OPEN']):  echo actionLink(array('action' => 'clickOnGroup','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['GROUP']['title'],'open' => $this->_tpl_vars['NODE']['id'],'principal_id' => $this->_tpl_vars['GROUP']['id'],'group_id' => $this->_tpl_vars['GROUP']['id'],'principal_type' => 2,'style' => "color:black; font-weight:bold"), $this); else:  echo actionLink(array('action' => 'clickOnGroup','form' => 'o','yoffset' => 1,'text' => $this->_tpl_vars['GROUP']['title'],'open' => $this->_tpl_vars['NODE']['id'],'principal_id' => $this->_tpl_vars['GROUP']['id'],'group_id' => $this->_tpl_vars['GROUP']['id'],'principal_type' => 2), $this); endif; ?></td>

      <td class="row" align="right"><?php echo actionIcon(array('action' => 's1EditGroup','icon' => "pencil.png",'form' => '0','target' => 'slave1','group_id' => $this->_tpl_vars['GROUP']['id'],'title' => 'Edit this group'), $this); echo actionIcon(array('action' => 'removeGroupFromPool_o','icon' => "delete.png",'form' => 'o','node_id' => $this->_tpl_vars['NODE']['id'],'node_pid' => $this->_tpl_vars['NODE']['pid'],'principal_id' => $this->_tpl_vars['GROUP']['id'],'perm' => 'roles','title' => 'remove this group','yoffset' => 1), $this);?>

     </td>
     </tr>
    </table>
   </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
</table>
</form>