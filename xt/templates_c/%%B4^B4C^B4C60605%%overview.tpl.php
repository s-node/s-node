<?php /* Smarty version 2.6.9, created on 2011-01-21 10:57:16
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/overview.tpl', 9, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/overview.tpl', 31, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/overview.tpl', 13, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/overview.tpl', 14, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/overview.tpl', 24, false),)), $this); ?>
<form method="post" name="overview">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'overview')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="table_header" width="40">&nbsp;</td>
  <td class="table_header" width="40">&nbsp;</td>
  <td class="table_header" width="50">ID</td>
  <td class="table_header" width="150"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp='Content table')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['OBJECT']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button"><?php echo actionIcon(array('action' => 'editObject','form' => '0','icon' => "pencil.png",'perm' => 'editobjects','title' => 'Edit this object','object_id' => $this->_tpl_vars['OBJECT']['id'],'target' => 'slave1'), $this);?>
</td>
  <td class="row"><?php if ($this->_tpl_vars['OBJECT']['icon'] != ""): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/<?php echo $this->_tpl_vars['OBJECT']['icon']; ?>
" alt="<?php echo $this->_tpl_vars['OBJECT']['title']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/help_grey.png" alt="<?php echo $this->_tpl_vars['OBJECT']['title']; ?>
"/><?php endif; ?></td>
  <td class="row"><?php echo $this->_tpl_vars['OBJECT']['id']; ?>
&nbsp;</td>
  <td class="row"><?php echo actionLink(array('action' => 'editObject','form' => '0','target' => 'slave1','perm' => 'editobjects','text' => $this->_tpl_vars['OBJECT']['title'],'object_id' => $this->_tpl_vars['OBJECT']['id']), $this);?>
&nbsp;</td>
  <td class="row"><?php echo ((is_array($_tmp=$this->_tpl_vars['OBJECT']['content_table'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_object_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'overview')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>