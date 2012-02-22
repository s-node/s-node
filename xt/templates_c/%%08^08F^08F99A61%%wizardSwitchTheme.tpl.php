<?php /* Smarty version 2.6.9, created on 2011-01-21 10:09:45
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/wizardSwitchTheme.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/wizardSwitchTheme.tpl', 12, false),)), $this); ?>
<?php echo '
<style type="text/css">
@import url("';  echo $this->_tpl_vars['XT_STYLES'];  echo 'installer/default.css");
#introduction {
    width: 100%;
}
</style>
'; ?>

<form method="post" name="slave1">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.installer/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
<h1><?php echo ((is_array($_tmp='Switch live site to another theme')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp="Which theme should be activated?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<br />
<div id="form" style="margin-bottom: 0px;">
<label for="x<?php echo $this->_tpl_vars['BASEID']; ?>
_theme_title" style="padding-left: 0px;"><?php echo ((is_array($_tmp='Choose theme')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</label>
<select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_theme_title">
<?php $_from = $this->_tpl_vars['THEMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['THEME']):
?>
<option><?php echo $this->_tpl_vars['THEME']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</div>
</div>
<div id="control">
<input type="image" onclick="this.form.x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='switchTheme';this.form.submit();" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard_submit" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
installer/de/weiter.gif" />
</div>
</form>