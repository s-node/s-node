<?php /* Smarty version 2.6.9, created on 2011-01-21 10:29:29
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/overview.tpl', 5, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/overview.tpl', 10, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/overview.tpl', 11, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/overview.tpl', 25, false),)), $this); ?>
<form method="POST">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="25">ID</td>
  <td class="table_header"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['ZONES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ZONE']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button"><?php echo actionIcon(array('action' => 'editZone','form' => '0','target' => 'slave1','icon' => "pencil.png",'title' => 'Edit this zone','zone_id' => $this->_tpl_vars['ZONE']['id']), $this); echo actionIcon(array('action' => 'deleteZone','form' => '1','icon' => "delete.png",'zone_id' => $this->_tpl_vars['ZONE']['id'],'title' => 'Delete this zone','ask' => "Are you sure you want to delete this zone?"), $this);?>
</td>
  <td class="row"><?php echo $this->_tpl_vars['ZONE']['id']; ?>
</td>
  <td class="row"><?php echo actionLink(array('action' => 'editZone','form' => '0','target' => 'slave1','zone_id' => $this->_tpl_vars['ZONE']['id'],'title' => $this->_tpl_vars['ZONE']['title'],'text' => $this->_tpl_vars['ZONE']['title']), $this);?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_zone_id" />
</form>