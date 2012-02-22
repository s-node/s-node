<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.toolbox/viewer/info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.toolbox/viewer/info.tpl', 8, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.toolbox/viewer/info.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.toolbox/viewer/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="post" name="info">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'info')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%" summary="">
 <tr>
  <td class="adminleft">
  	<?php echo ((is_array($_tmp='Navigation')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
  <td class="adminright">
	<input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="18" style="font-weight: bold;" />
  </td>
 </tr>
 <tr>
  <td class="adminright">
    <?php if ($this->_tpl_vars['DATA']['active'] == 1): ?>
		<?php echo ((is_array($_tmp='site is active')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

	<?php else: ?>
		<?php echo ((is_array($_tmp='site is not active')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

	<?php endif; ?>

  </td>
  <td class="adminright">
	<?php if ($this->_tpl_vars['DATA']['active'] == 1): ?>
		<a href="#" onclick="document.forms['info'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='deactivatePage';document.forms['info'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/activated.png" alt="<?php echo ((is_array($_tmp='deactivate')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
	<?php else: ?>
		<a href="#" onclick="document.forms['info'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='activatePage';document.forms['info'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/deactivated.png" alt="<?php echo ((is_array($_tmp='deactivate')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
	<?php endif; ?>
  </td>
 </tr>
 <tr>
  <td class="adminright">
  	<?php echo ((is_array($_tmp='Page id')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
  <td class="adminright">
	<input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_id" value="<?php echo $this->_tpl_vars['TPL']; ?>
" size="18" style="border-width: 0px;" readonly="readonly" />
  </td>
 </tr>
 <tr>
  <td class="adminright"><?php echo ((is_array($_tmp='Header')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="adminright">

  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_header" style="width:150px;">
   <?php $_from = $this->_tpl_vars['USERTPL']['HEADERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['avTPL'] => $this->_tpl_vars['avTPLTheme']):
?>
    <option <?php if ($this->_tpl_vars['avTPLTheme'] != 'system'): ?>style="background-color:#99FF99;"<?php endif; ?> value="<?php echo $this->_tpl_vars['avTPL']; ?>
"<?php if ($this->_tpl_vars['avTPL'] == $this->_tpl_vars['DATA']['header']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['avTPL']; ?>
  (<?php echo $this->_tpl_vars['avTPLTheme']; ?>
)</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>

  </td>
 </tr>
 <tr>
  <td class="adminright"><?php echo ((is_array($_tmp='Footer')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="adminright">
    <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_footer" style="width:150px;">
   <?php $_from = $this->_tpl_vars['USERTPL']['FOOTERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['avTPL'] => $this->_tpl_vars['avTPLTheme']):
?>
    <option <?php if ($this->_tpl_vars['avTPLTheme'] != 'system'): ?>style="background-color:#99FF99;"<?php endif; ?> value="<?php echo $this->_tpl_vars['avTPL']; ?>
"<?php if ($this->_tpl_vars['avTPL'] == $this->_tpl_vars['DATA']['footer']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['avTPL']; ?>
  (<?php echo $this->_tpl_vars['avTPLTheme']; ?>
)</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
   </td>
 </tr>
 <tr>
  <td class="adminright"><?php echo ((is_array($_tmp='CSS')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="adminright"><input type="text" size="18" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_css" value="<?php echo $this->_tpl_vars['DATA']['css']; ?>
" /></td>
 </tr>
  <tr>
  <td class="adminright"><?php echo ((is_array($_tmp='Template file')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="adminright"><input type="text" size="18" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_file" value="<?php echo $this->_tpl_vars['DATA']['tpl_file']; ?>
" /></td>
 </tr>
 <tr>
  <td class="adminleft" colspan="2">
  	<?php echo ((is_array($_tmp='Behaviour')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
 </tr>
 <tr>
  <td class="adminright"><?php echo ((is_array($_tmp='Target')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="adminright">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target" style="width:150px;">
    <option value="_self"<?php if ($this->_tpl_vars['DATA']['target'] == '_self'): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp='Same window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_self)</option>
    <option value="_blank"<?php if ($this->_tpl_vars['DATA']['target'] == '_blank'): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp='New window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_blank)</option>
    <option value="_parent"<?php if ($this->_tpl_vars['DATA']['target'] == '_parent'): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp='Parent window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_parent)</option>
    <option value="_top"<?php if ($this->_tpl_vars['DATA']['target'] == '_top'): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp='Top window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_top)</option>
   </select>
  </td>
 </tr>
 </table>
 </form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.toolbox/viewer/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>