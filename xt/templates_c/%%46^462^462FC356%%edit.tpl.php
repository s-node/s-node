<?php /* Smarty version 2.6.9, created on 2011-06-07 15:24:45
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.units/admin/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.units/admin/edit.tpl', 7, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&module=<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" method="POST" name="units">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_submit.tpl", 'smarty_include_vars' => array('form' => 'units','action' => 'save')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Unit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span><span class="title"> <?php echo $this->_tpl_vars['DATA']['standard']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='standard')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="12" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_standard" value="<?php echo $this->_tpl_vars['DATA']['standard']; ?>
"></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="15" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_short" value="<?php echo $this->_tpl_vars['DATA']['short']; ?>
"></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_full" value="<?php echo $this->_tpl_vars['DATA']['full']; ?>
"></td>
 </tr>
 </table>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="<?php echo $this->_tpl_vars['DATA']['id']; ?>
">
<br />
</form>