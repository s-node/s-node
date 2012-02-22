<?php /* Smarty version 2.6.9, created on 2011-01-21 11:09:01
         compiled from ch.iframe.snode.newsletter/admin/hiddenValues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'yoffset', 'ch.iframe.snode.newsletter/admin/hiddenValues.tpl', 11, false),)), $this); ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_subscriber_id" value="<?php echo $this->_tpl_vars['SUBSCRIBER']['id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_category_id" value="<?php echo $this->_tpl_vars['CATEGORY']['id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_newsletter_id" value="<?php echo $this->_tpl_vars['NEWSLETTER']['id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_level" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maxlevel" value="<?php echo $this->_tpl_vars['MAXLEVEL']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_newlevel" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_chapter" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_origlevel" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_scategory_id" value="" />
<?php echo yoffset(array(), $this);?>