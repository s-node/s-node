<?php /* Smarty version 2.6.9, created on 2011-01-21 10:09:18
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/tree/admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/tree/admin.tpl', 5, false),)), $this); ?>
<?php if (sizeof ( $this->_tpl_vars['DATA'] ) > 0): ?>
 <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NAV']):
?>
    <div class="navigation_subentry<?php if ($this->_tpl_vars['NAV']['itw']): ?>_active<?php endif; ?>" style="padding-left: <?php echo $this->_tpl_vars['NAV']['level']*11-20; ?>
px;">
    <?php if ($this->_tpl_vars['NAV']['subs']): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus_blue.gif" />&nbsp;&nbsp;<?php endif; ?>
    <a <?php if ($this->_tpl_vars['NAV']['target'] != ""): ?>target="<?php echo $this->_tpl_vars['NAV']['target']; ?>
" <?php endif; ?>href="<?php if ($this->_tpl_vars['NAV']['ext_link']):  echo $this->_tpl_vars['NAV']['ext_link'];  else:  echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['NAV']['id']; ?>
&amp;adminmode=1<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['NAV']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
</a>
    </div>
 <?php endforeach; endif; unset($_from);  endif; ?>