<?php /* Smarty version 2.6.9, created on 2011-01-21 10:57:16
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.objects/admin/slave1.tpl', 20, false),)), $this); ?>
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
</div>

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_object_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" />
</form>