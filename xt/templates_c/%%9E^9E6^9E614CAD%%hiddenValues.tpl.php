<?php /* Smarty version 2.6.9, created on 2011-06-07 15:53:34
         compiled from ch.iframe.snode.autopilot/admin/hiddenValues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'yoffset', 'ch.iframe.snode.autopilot/admin/hiddenValues.tpl', 8, false),)), $this); ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_slide_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_direction" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="<?php echo $this->_tpl_vars['POSITION']; ?>
" />

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />

<?php echo yoffset(array(), $this);?>