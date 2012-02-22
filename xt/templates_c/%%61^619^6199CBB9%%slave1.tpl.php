<?php /* Smarty version 2.6.9, created on 2011-01-21 10:13:41
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/slave1.tpl', 10, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/slave1.tpl', 11, false),)), $this); ?>
<?php echo '
<script language="JavaScript"><!--
window.parent.frames[\'master\'].document.forms[1].submit();
window.parent.frames[\'slave2\'].document.forms[0].submit();
//-->
</script>
'; ?>

<form method="post" name="slave1" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<div id="content">
<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_REAL_TITLE'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>

<div id="tipp"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/tipps/ch.iframe.snode.filemanager/tipp1.gif" alt="" class="tipp"/><?php echo ((is_array($_tmp='tipp1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
<br clear="all" />
</div>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
</form>