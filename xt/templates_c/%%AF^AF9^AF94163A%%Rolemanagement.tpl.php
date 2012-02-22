<?php /* Smarty version 2.6.9, created on 2011-01-21 10:18:48
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Rolemanagement.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Rolemanagement.tpl', 7, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Rolemanagement.tpl', 13, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/Rolemanagement.tpl', 15, false),)), $this); ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="POST" name="roletable">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'roletable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.securitycenter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="32">ID</td>
   <td class="table_header"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="100"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ROLESTABLE'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ROLESTABLE']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ROLE']):
        $this->_foreach['ROLESTABLE']['iteration']++;
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
      
       <td class="button"><?php if ($this->_tpl_vars['ROLE']['active'] == 1):  echo actionIcon(array('action' => 'deactivateRole','form' => 'roletable','icon' => "active.png",'title' => 'deactivate this role','id' => $this->_tpl_vars['ROLE']['id'],'yoffset' => 1), $this); else:  echo actionIcon(array('action' => 'activateRole','form' => 'roletable','icon' => "inactive.png",'title' => 'Activate this role','id' => $this->_tpl_vars['ROLE']['id'],'yoffset' => 1), $this); endif;  echo actionIcon(array('action' => 'clickOnRole','form' => 'roletable','icon' => "view.png",'title' => 'View this role','role_id' => $this->_tpl_vars['ROLE']['id'],'principal_id' => $this->_tpl_vars['ROLE']['id']), $this); echo actionIcon(array('action' => 's1editRole','icon' => "pencil.png",'form' => '0','target' => 'slave1','role_id' => $this->_tpl_vars['ROLE']['id'],'title' => 'Edit this role'), $this); if ($this->_tpl_vars['ROLE']['active'] == 0):  echo actionIcon(array('action' => 'deleteRole','icon' => "delete.png",'title' => 'Delete this role','id' => $this->_tpl_vars['ROLE']['id'],'ask' => "Are you sure to delete this role?",'form' => 'roletable','yoffset' => 1), $this); endif; ?></td> 
       <td class="row"><?php echo $this->_tpl_vars['ROLE']['id']; ?>
&nbsp;</td>
       <td class="row"><?php echo $this->_tpl_vars['ROLE']['title']; ?>
&nbsp;</td>
       <td class="row"><?php echo $this->_tpl_vars['ROLE']['description']; ?>
&nbsp;</td>
      </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'roletable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>