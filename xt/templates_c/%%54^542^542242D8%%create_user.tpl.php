<?php /* Smarty version 2.6.9, created on 2011-01-21 10:39:43
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/create_user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/create_user.tpl', 8, false),)), $this); ?>
<form method="POST" name="edit">
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
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Create new user')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left" valign="top"><?php echo ((is_array($_tmp='Username')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
    <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_username" value="<?php echo $this->_tpl_vars['xt100_admin']['username']; ?>
" size="25">
  </td>
 </tr>

 <tr>
  <td class="left" valign="top"><?php echo ((is_array($_tmp='Password')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
    <input type="password" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_password" value="" size="25">
  </td>
 </tr>
 <tr>
  <td class="left" valign="top"><?php echo ((is_array($_tmp='Confirm password')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
    <input type="password" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_password_confirm" value="" size="25">
  </td>
 </tr>
  <tr>
  <td class="left" valign="top"><?php echo ((is_array($_tmp="E-Mail")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
    <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_email" value="<?php echo $this->_tpl_vars['xt100_admin']['email']; ?>
" size="25">
  </td>
 </tr>
 </tr>
 <tr>
  <td class="left" valign="top"><?php echo ((is_array($_tmp='Add to groups')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
    <?php $_from = $this->_tpl_vars['xt100_admin']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
    	<input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_groups[]" value="<?php echo $this->_tpl_vars['group']['id']; ?>
"<?php if ($this->_tpl_vars['group']['selected'] == 1): ?> checked<?php endif; ?> /> <?php echo $this->_tpl_vars['group']['title']; ?>
<br/>
    <?php endforeach; endif; unset($_from); ?>
  </td>
 </tr>
 <tr>
  <td class="left" valign="top"><?php echo ((is_array($_tmp='Add to roles')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
    <?php $_from = $this->_tpl_vars['xt100_admin']['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
    	<input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_roles[]" value="<?php echo $this->_tpl_vars['role']['id']; ?>
"<?php if ($this->_tpl_vars['role']['selected'] == 1): ?> checked<?php endif; ?> /> <?php echo $this->_tpl_vars['role']['title']; ?>
<br/>
    <?php endforeach; endif; unset($_from); ?>
  </td>
 </tr>
</table>
</form>