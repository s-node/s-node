<?php /* Smarty version 2.6.9, created on 2011-01-21 11:09:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/slave1.tpl', 25, false),)), $this); ?>
<?php echo '
<style type="text/css">
@import url("';  echo $this->_tpl_vars['XT_STYLES'];  echo 'installer/default.css");
#introduction {
    width: 100%;
}
</style>
<script type="text/javascript">
var dm = false;
	function switchDeveloperMode() {
		if (dm==false) {
			document.getElementById(\'dm\').style.display=\'inline\';
			dm=true;
		} else {
			document.getElementById(\'dm\').style.display=\'none\';
			dm=false;
		}
	}
</script>
'; ?>

<form method="post" name="slave1">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.installer/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
<h1><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<ul id="packages">
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" checked value="upload">&nbsp;<?php echo ((is_array($_tmp="<b>Upload</b> and install a package")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
 <?php if ($this->_tpl_vars['fsockopen'] == 'enabled'): ?><li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="online_update" checked="checked">&nbsp;<?php echo ((is_array($_tmp="Online installation / update")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li><?php endif; ?>
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="update">&nbsp;<?php echo ((is_array($_tmp="<b>Update</b> an existing package")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="upload_sampledata">&nbsp;<?php echo ((is_array($_tmp="<b>Upload</b> and install a sample data package")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="upload_theme">&nbsp;<?php echo ((is_array($_tmp="<b>Upload</b> and install a new theme")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
<?php if ($this->_tpl_vars['fsockopen'] == 'enabled' && $this->_tpl_vars['DEVELOPER_MODE'] == 1): ?><li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="developer_mode" onclick="switchDeveloperMode();">&nbsp;<span style="color:#FF3F59;"><?php echo ((is_array($_tmp='Developer mode')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span></li><?php endif; ?>

 <!--<li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="install">&nbsp;<?php echo ((is_array($_tmp="<b>Reinstall</b> a package from repository")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>-->
</ul>
 <br />
<div id="dm" style="display:none;">
<?php echo ((is_array($_tmp='Developer password')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <input type="password" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_developer_password" />
</div>
</div>
<div id="control">
<input type="image" onclick="this.form.x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='goToNextStep';this.form.submit();" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard_submit" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
installer/de/weiter.gif" />
</div>
</form>