<?php /* Smarty version 2.6.9, created on 2011-01-21 11:15:08
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/slave1.tpl', 4, false),)), $this); ?>
<form method="post" name="slave1" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<div id="content">
<h1><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</h1>
<p class="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<p>RSS-Feed: http://<?php echo $_SERVER['SERVER_NAME']; ?>
/index.php?TPL=8102&username=XYZ&password=XYZ</p>
</div>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
</form>