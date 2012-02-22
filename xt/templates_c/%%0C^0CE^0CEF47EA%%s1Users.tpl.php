<?php /* Smarty version 2.6.9, created on 2011-02-18 13:33:42
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1Users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1Users.tpl', 7, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1Users.tpl', 42, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1Users.tpl', 72, false),)), $this); ?>
<form method="POST" name="s1">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.securitycenter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header">
  <span class="title_light"><?php echo ((is_array($_tmp='User')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <span class="title"><?php echo $this->_tpl_vars['USER']['username']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php if ($this->_tpl_vars['USER']['description'] != ''): ?>
 <tr>
  <td class="view_header" colspan="2"><span class="subline"><?php echo $this->_tpl_vars['USER']['description']; ?>
</span></td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['firstName'] != "" || $this->_tpl_vars['USER']['lastName'] != ''): ?>
 <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='Name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><b><?php echo $this->_tpl_vars['USER']['firstName']; ?>
 <?php echo $this->_tpl_vars['USER']['lastName']; ?>
</b>&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['email'] != ""): ?>
 <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='email')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><?php echo $this->_tpl_vars['USER']['email']; ?>
&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['lang'] != ""): ?>
  <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='lang')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right" style="padding-top: 5px; padding-bottom: 2px;"><img src="/images/lang/<?php echo $this->_tpl_vars['USER']['lang']; ?>
.png" />&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['last_login_date'] != 0): ?>
  <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='last_login_date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><?php echo ((is_array($_tmp=$this->_tpl_vars['USER']['last_login_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %e. %B %Y um %T") : smarty_modifier_date_format($_tmp, "%A, %e. %B %Y um %T")); ?>
&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['mod_user'] != ""): ?>
   <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='mod_user')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><?php echo $this->_tpl_vars['USER']['mod_user']; ?>
&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['mod_date'] != 0): ?>
  <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='mod_date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><?php echo ((is_array($_tmp=$this->_tpl_vars['USER']['mod_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %e. %B %Y um %T") : smarty_modifier_date_format($_tmp, "%A, %e. %B %Y um %T")); ?>
&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['creation_user'] != ""): ?>
  <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='creation_user')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><?php echo $this->_tpl_vars['USER']['creation_user']; ?>
&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['creation_date'] != 0): ?>
  <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='creation_date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><?php echo ((is_array($_tmp=$this->_tpl_vars['USER']['creation_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %e. %B %Y um %T") : smarty_modifier_date_format($_tmp, "%A, %e. %B %Y um %T")); ?>
&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['USER']['image'] > 0): ?>
  <tr>
  <td class="view_left"><?php echo ((is_array($_tmp='Image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="view_right"><?php echo image(array('id' => $this->_tpl_vars['USER']['image'],'version' => 2,'title' => $this->_tpl_vars['USER']['firstName'],'alt' => $this->_tpl_vars['USER']['firstName']), $this);?>
&nbsp;</td>
 </tr>
 <?php endif; ?>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
</form>