<?php /* Smarty version 2.6.9, created on 2011-01-26 14:20:27
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/loginbox/loggedin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.usermanager/loginbox/loggedin.tpl', 1, false),)), $this); ?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>
?logout=1"><?php echo ((is_array($_tmp='Logout')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a>