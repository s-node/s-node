<?php /* Smarty version 2.6.9, created on 2011-01-21 10:26:39
         compiled from ch.iframe.snode.gmap/admin/hiddenValues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'yoffset', 'ch.iframe.snode.gmap/admin/hiddenValues.tpl', 8, false),)), $this); ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="<?php echo $this->_tpl_vars['DATA']['gmap']['id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_gmapheader" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<input type="hidden" name="showtabs" value="<?php echo $this->_tpl_vars['SHOWTABS']; ?>
" />


<?php echo yoffset(array(), $this);?>