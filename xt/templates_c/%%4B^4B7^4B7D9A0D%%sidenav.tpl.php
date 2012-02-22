<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/tree/sidenav.tpl */ ?>
<?php if (sizeof ( $this->_tpl_vars['DATA'] ) > 0): ?>
	<?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['N'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['N']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['NAV']):
        $this->_foreach['N']['iteration']++;
?>
		<a class="sidenav" <?php if ($this->_tpl_vars['NAV']['target'] != ''): ?>target="<?php echo $this->_tpl_vars['NAV']['target']; ?>
"<?php endif; ?> href="<?php if ($this->_tpl_vars['NAV']['ext_link']):  echo $this->_tpl_vars['NAV']['ext_link'];  else:  echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['NAV']['id'];  endif; ?>"><?php echo $this->_tpl_vars['NAV']['title']; ?>
</a>
	<?php endforeach; endif; unset($_from);  endif; ?>