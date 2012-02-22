<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:37
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/wizardCreateTheme.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/wizardCreateTheme.tpl', 12, false),)), $this); ?>
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
<h1><?php echo ((is_array($_tmp='Create your own theme')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='Please type in a title for the new theme')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<br />
<div id="form" style="margin-bottom: 0px;">
<label for="x<?php echo $this->_tpl_vars['BASEID']; ?>
_theme_title" style="padding-left: 0px;"><?php echo ((is_array($_tmp='Theme title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</label>
<input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_theme_title" value="Yourtheme" onkeyup="document.getElementById('css').value=this.value.toLowerCase() + '.css'"><br />
<label for="x<?php echo $this->_tpl_vars['BASEID']; ?>
_switch" style="padding-left: 0px;"><?php echo ((is_array($_tmp="Activate?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</label>
<input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_switch" value="1" checked>
<p id="introduction"><?php echo ((is_array($_tmp="Site settings (Default)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p><br />
<label for="x<?php echo $this->_tpl_vars['BASEID']; ?>
_doctype" style="padding-left: 0px;"><?php echo ((is_array($_tmp='Doctype')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</label>
<select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_doctype">
<?php $_from = $this->_tpl_vars['DOCTYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['KEY'] => $this->_tpl_vars['DOCTYPE']):
?>
<option><?php echo $this->_tpl_vars['KEY']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
<p id="introduction"><?php echo ((is_array($_tmp="Style settings (Default)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p><br />
<label for="x<?php echo $this->_tpl_vars['BASEID']; ?>
_create_css" style="padding-left: 0px;"><?php echo ((is_array($_tmp="Create new CSS?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</label>
<input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_create_css" value="1" checked><br />
<label for="x<?php echo $this->_tpl_vars['BASEID']; ?>
_css" style="padding-left: 0px;"><?php echo ((is_array($_tmp='CSS Name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</label>
<input type="text" id="css" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_css" value="yourtheme.css"><br />
</div>
</div>
<div id="control">
<input type="image" onclick="this.form.x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='createTheme';this.form.submit();" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard_submit" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
installer/de/weiter.gif" />
</div>
</form>