<?php /* Smarty version 2.6.9, created on 2011-01-21 10:57:05
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.virtual/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.virtual/admin/overview.tpl', 5, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.virtual/admin/overview.tpl', 27, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.virtual/admin/overview.tpl', 10, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.virtual/admin/overview.tpl', 11, false),)), $this); ?>
<form method="post" name="overview">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="150"><?php echo ((is_array($_tmp='Shortcut')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp='URL')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['virtual']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button"><?php echo actionIcon(array('action' => 'editVirtual','form' => '0','icon' => "pencil.png",'perm' => 'editVirtual','title' => 'Edit this Virtual','virtual_id' => $this->_tpl_vars['virtual']['id'],'target' => 'slave1'), $this); echo actionIcon(array('action' => 'deleteVirtual','form' => 'overview','icon' => "delete.png",'perm' => 'deleteVirtual','title' => 'Delete this Virtual','virtual_id' => $this->_tpl_vars['virtual']['id'],'ask' => "Are you sure you want to delete this virtual?"), $this);?>
</td>
  <td class="row"><?php echo $this->_tpl_vars['virtual']['pattern']; ?>
&nbsp;</td>
  <td class="row"><?php echo ((is_array($_tmp=$this->_tpl_vars['virtual']['url'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_virtual_id" />
</form>