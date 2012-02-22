<?php /* Smarty version 2.6.9, created on 2011-01-21 11:13:18
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/s1_online_update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/s1_online_update.tpl', 9, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/s1_online_update.tpl', 12, false),)), $this); ?>
<?php echo '
<style type="text/css">
@import url("';  echo $this->_tpl_vars['XT_STYLES'];  echo 'installer/default.css");
#introduction {
    width: 100%;
}
</style>
'; ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['FILES'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > 0): ?>
<form method="post" name="remoteinstall">
<div id="content">
<h1><?php echo ((is_array($_tmp="Online installation / update")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h1><br/><br/>
<input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_overwrite_config" checked="checked"/> <?php echo ((is_array($_tmp='overwrite_config')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br />
<input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_overwrite_translations" checked="checked"/> <?php echo ((is_array($_tmp='overwrite_translations')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

<br/><br/>
	<select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_package">
	<?php $_from = $this->_tpl_vars['FILES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
		<option value="<?php echo $this->_tpl_vars['file']['0']; ?>
" class="stats_<?php if ($this->_tpl_vars['file']['installed']): ?>green<?php else: ?>red<?php endif; ?>"><?php echo $this->_tpl_vars['file']['1']; ?>
 <?php echo $this->_tpl_vars['file']['0']; ?>
</option>
	<?php endforeach; endif; unset($_from); ?>
	</select>

	<br />
	<br />
	<?php echo "grün = installiert, rot = noch nicht installiert"; ?>

</div>

<div id="control">
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="overview" />
<input type="image" onclick="this.form.x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='goToNextStep';this.form.submit();" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard_submit" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
installer/de/zurueck.gif" />
<input type="image" onclick="this.form.x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='remoteinstall';this.form.submit();" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard_submit" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
installer/de/weiter.gif" />
</div>

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />

</form>
<?php endif; ?>