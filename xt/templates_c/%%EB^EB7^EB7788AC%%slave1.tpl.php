<?php /* Smarty version 2.6.9, created on 2012-01-29 20:35:53
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/slave1.tpl', 4, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/slave1.tpl', 20, false),)), $this); ?>
<form method="post" name="navigation" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<div id="content">
<h1><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<br clear="all" />
<div><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/tipps/ch.iframe.snode.navigation/tipp1.gif" alt="" class="tipp"/><?php echo ((is_array($_tmp='tipp1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br /><br /><br /><br /></div>
<br clear="all" />
<div><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/tipps/ch.iframe.snode.navigation/tipp2.gif" alt="" class="tipp"/><?php echo ((is_array($_tmp='tipp2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br /><br /><br /><br /></div>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_step" value="1" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target_module" value="" />
<input type="hidden" name="TPL" value="<?php echo $this->_tpl_vars['TPL']; ?>
" />
<?php echo yoffset(array(), $this);?>

<br clear="all" />
</div>
</form>
<?php echo '
<script language="JavaScript" type="text/javascript"><!--
if(window.parent.frames[\'master\'].document.forms[1]){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>