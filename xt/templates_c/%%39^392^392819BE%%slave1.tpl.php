<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/slave1.tpl', 20, false),)), $this); ?>
<?php echo '
<style type="text/css">
@import url("';  echo $this->_tpl_vars['XT_STYLES'];  echo 'installer/default.css");
#introduction {
    width: 100%;
}
</style>
'; ?>

<?php echo '
<script language="JavaScript"><!--
if(window.parent.frames[\'master\'].document.forms[1]){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<form method="post" name="slave1">
<div id="content">
<h1><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<ul id="packages">
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" checked value="wz_ct">&nbsp;<?php echo ((is_array($_tmp="<b>Create</b> your own theme")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="wz_st">&nbsp;<?php echo ((is_array($_tmp="<b>Switch</b> your site to another theme")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="wz_dt">&nbsp;<?php echo ((is_array($_tmp="<b>Delete</b> an existing theme")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
 <li><input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard" value="wz_ex">&nbsp;<?php echo ((is_array($_tmp="<b>Export</b> a theme")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</li>
</ul>
</div>
<div id="control">
<input type="image" onclick="this.form.x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='goToNextStep';this.form.submit();" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_wizard_submit" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
installer/de/weiter.gif" />
</div>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_path" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
</form>