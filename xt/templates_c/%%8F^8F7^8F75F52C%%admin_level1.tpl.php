<?php /* Smarty version 2.6.9, created on 2011-01-21 10:09:18
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/tree/admin_level1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlentities', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/tree/admin_level1.tpl', 4, false),)), $this); ?>
<?php if (sizeof ( $this->_tpl_vars['DATA'] ) > 0): ?>
 <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NAV']):
?>
  <?php if ($this->_tpl_vars['NAV']['itw']): ?><div class="naventry_active" style="padding-left: <?php echo $this->_tpl_vars['NAV']['level']*6; ?>
px;">
      <a target="<?php echo $this->_tpl_vars['NAV']['target']; ?>
" href="<?php if ($this->_tpl_vars['NAV']['ext_link']):  echo ((is_array($_tmp=$this->_tpl_vars['NAV']['ext_link'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp));  else:  echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['NAV']['id']; ?>
&amp;adminmode=1<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['NAV']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</a></div><?php else: ?><div class="naventry" style="padding-left: <?php echo $this->_tpl_vars['NAV']['level']*6; ?>
px;">
      <a target="<?php echo $this->_tpl_vars['NAV']['target']; ?>
" href="<?php if ($this->_tpl_vars['NAV']['ext_link']):  echo ((is_array($_tmp=$this->_tpl_vars['NAV']['ext_link'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp));  else:  echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['NAV']['id']; ?>
&amp;adminmode=1<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['NAV']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)); ?>
</a></div><?php endif; ?>
 <?php endforeach; endif; unset($_from);  endif; ?>