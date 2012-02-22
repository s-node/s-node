<?php /* Smarty version 2.6.9, created on 2011-01-21 10:24:19
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1Roles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1Roles.tpl', 15, false),)), $this); ?>
<form method="POST" name="s1">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.securitycenter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header">
   <span class="title"><?php echo $this->_tpl_vars['ROLE']['title']; ?>
</span>
  </td>
 </tr>
<tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php if ($this->_tpl_vars['ROLE']['description'] != ''): ?>
 <tr>
  <td class="view_header" colspan="2">
   <span class="subline"><?php echo ((is_array($_tmp=$this->_tpl_vars['ROLE']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php endif; ?>
 </table>
</form>