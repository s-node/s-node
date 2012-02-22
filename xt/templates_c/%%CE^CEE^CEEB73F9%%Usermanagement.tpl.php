<?php /* Smarty version 2.6.9, created on 2011-01-21 10:18:43
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Usermanagement.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Usermanagement.tpl', 7, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Usermanagement.tpl', 14, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Usermanagement.tpl', 15, false),)), $this); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="POST" name="usertable">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'usertable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.securitycenter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="81"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="32">ID</td>
   <td class="table_header"><?php echo ((is_array($_tmp='Username')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="100"><?php echo ((is_array($_tmp='Last name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="100"><?php echo ((is_array($_tmp='First name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['USERTABLE'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['USERTABLE']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['USER']):
        $this->_foreach['USERTABLE']['iteration']++;
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button"><?php if ($this->_tpl_vars['USER']['active'] == 1):  echo actionIcon(array('action' => 'deactivateUser','form' => 'usertable','icon' => "active.png",'title' => 'deactivate this user','perm' => 'user','id' => $this->_tpl_vars['USER']['id'],'yoffset' => 1), $this); else:  echo actionIcon(array('action' => 'activateUser','form' => 'usertable','icon' => "inactive.png",'title' => 'Activate this user','perm' => 'user','id' => $this->_tpl_vars['USER']['id'],'yoffset' => 1), $this); endif;  echo actionIcon(array('action' => 'clickOnUser','form' => '0','target' => 'slave1','icon' => "view.png",'title' => 'View this user','perm' => 'user','user_id' => $this->_tpl_vars['USER']['id'],'principal_id' => $this->_tpl_vars['USER']['id']), $this); echo actionIcon(array('action' => 's1EditUser','icon' => "pencil.png",'form' => '0','target' => 'slave1','user_id' => $this->_tpl_vars['USER']['id'],'principal_id' => $this->_tpl_vars['USER']['id'],'title' => 'Edit this user'), $this); if ($this->_tpl_vars['USER']['active'] == 0):  echo actionIcon(array('action' => 'deleteUser','icon' => "delete.png",'title' => 'Delete this user','perm' => 'user','id' => $this->_tpl_vars['USER']['id'],'ask' => "Are you sure to delete this user?",'form' => 'usertable','yoffset' => 1), $this); endif; ?></td>
       <td class="row"><?php echo $this->_tpl_vars['USER']['id']; ?>
&nbsp;</td>
       <td class="row"><?php echo $this->_tpl_vars['USER']['username']; ?>
&nbsp;</td>
       <td class="row"><?php echo $this->_tpl_vars['USER']['lastName']; ?>
&nbsp;</td>
       <td class="row"><?php echo $this->_tpl_vars['USER']['firstName']; ?>
&nbsp;</td>
      </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'usertable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>