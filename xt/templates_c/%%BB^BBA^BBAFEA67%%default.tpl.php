<?php /* Smarty version 2.6.9, created on 2011-01-21 10:09:18
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/single_node/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlentities', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/single_node/default.tpl', 1, false),array('function', 'get_param', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/single_node/default.tpl', 1, false),)), $this); ?>
<a target="<?php echo $this->_tpl_vars['NAV']['target']; ?>
" href="<?php if ($this->_tpl_vars['NAV']['ext_link']):  echo ((is_array($_tmp=$this->_tpl_vars['NAV']['ext_link'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp));  else:  echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['NAV']['id']; ?>
&amp;adminmode=1&amp;<?php echo get_param(array('param' => 'additional'), $this); endif; ?>" style="color:white; text-decoration:none;"><?php echo $this->_tpl_vars['NAV']['title']; ?>
</a>