<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:37
         compiled from ch.iframe.snode.installer/admin/hiddenValues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'yoffset', 'ch.iframe.snode.installer/admin/hiddenValues.tpl', 5, false),)), $this); ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />


<?php echo yoffset(array(), $this);?>
