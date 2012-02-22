<?php /* Smarty version 2.6.9, created on 2011-01-21 10:26:37
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/slave1.tpl', 4, false),)), $this); ?>
<form method="post" name="slave1" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<div id="content">
<h1><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</h1>
	<p class="introduction"><?php echo ((is_array($_tmp='intro_text_intro')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
	<div><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/tipps/ch.iframe.snode.googlemaps/overview.png" alt="" class="tipp"/><?php echo ((is_array($_tmp='intro_text_desc')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br clear="all" /><br />
	<div><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/tipps/ch.iframe.snode.googlemaps/edit.png" alt="" width="337" class="tipp"/><?php echo ((is_array($_tmp='intro_text_addr_desc')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br /><br /><br clear="all" />
</div>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
</form>