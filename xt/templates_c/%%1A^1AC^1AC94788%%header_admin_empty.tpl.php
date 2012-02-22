<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from includes/header/header_admin_empty.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'includes/header/header_admin_empty.tpl', 5, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
" lang="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
">
<head>
 <title><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_TITLE'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
</title>
 <link rel="stylesheet" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
admin/office2003.css" type="text/css" media="all" />
 <link rel="stylesheet" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
live/jquery-ui-theme.css" type="text/css" media="all" />
 <?php echo $this->_tpl_vars['META']; ?>


<!--%%XTCSSLOADER%%-->
 <script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
admin.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
base.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
jquery.thickbox.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
jquery-ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
jquery-ui/ui.datepicker.js"></script>
<!--%%XTSCRIPTLOADER%%-->
</head>
<body>