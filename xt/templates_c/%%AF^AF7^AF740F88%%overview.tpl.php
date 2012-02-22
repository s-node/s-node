<?php /* Smarty version 2.6.9, created on 2011-01-21 10:26:39
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.gmap/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.gmap/admin/overview.tpl', 6, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.gmap/admin/overview.tpl', 11, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.gmap/admin/overview.tpl', 12, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.gmap/admin/overview.tpl', 38, false),)), $this); ?>
<form method="post" name="overview" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.gmap/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'],'withouthidden' => '1')));
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
 <?php $_from = $this->_tpl_vars['GMAPS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['GMAP']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button"><?php echo actionIcon(array('action' => 'editGmap','form' => '0','target' => 'slave1','icon' => "pencil.png",'title' => 'Edit this Google Map','id' => $this->_tpl_vars['GMAP']['id'],'gmapheader' => 'true'), $this);?>

  <?php if ($this->_tpl_vars['GMAP']['active'] == 1):  echo actionIcon(array('action' => 'deactivateGmap','icon' => "active.png",'form' => 'overview','id' => $this->_tpl_vars['GMAP']['id'],'title' => 'Deactivate this Google Map'), $this); else:  echo actionIcon(array('action' => 'activateGmap','icon' => "inactive.png",'form' => 'overview','id' => $this->_tpl_vars['GMAP']['id'],'title' => 'Activate this Google Map'), $this); endif;  echo actionIcon(array('action' => 'deleteGmap','form' => 'overview','icon' => "delete.png",'id' => $this->_tpl_vars['GMAP']['id'],'title' => 'Delete this Google Map','ask' => "Are you sure you want to delete this Google Map?"), $this);?>
</td>
  <td class="row"><?php echo $this->_tpl_vars['GMAP']['id']; ?>
</td>
  <td class="row"><?php echo actionLink(array('action' => 'editGmap','form' => '0','target' => 'slave1','id' => $this->_tpl_vars['GMAP']['id'],'title' => $this->_tpl_vars['GMAP']['title'],'text' => $this->_tpl_vars['GMAP']['title'],'gmapheader' => 'true'), $this);?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
</form>