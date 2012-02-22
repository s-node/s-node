<?php /* Smarty version 2.6.9, created on 2012-01-30 13:18:20
         compiled from includes/header/header_admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'includes/header/header_admin.tpl', 4, false),array('modifier', 'translate', 'includes/header/header_admin.tpl', 37, false),array('function', 'plugin', 'includes/header/header_admin.tpl', 48, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <title><?php echo $this->_tpl_vars['SYSTEM_NAME']; ?>
 : <?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_TITLE'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
</title>
 <?php echo $this->_tpl_vars['META']; ?>

 <link rel="stylesheet" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
admin/office2003.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
live/jquery-ui-theme.css" type="text/css" media="all" />

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

<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/jquery-ui-1.8.16.custom.min.js"></script>

<!-- navigation drag and drop -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/ajax.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/context-menu.js"></script><!-- IMPORTANT! INCLUDE THE context-menu.js FILE BEFORE drag-drop-folder-tree.js -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
libs/drag-drop-folder-tree.js"></script>
	


<!--%%XTSCRIPTLOADER%%-->
</head>
<body>
<?php if ($_GET['adminmode'] == 1): ?>
<table cellpadding="0" cellspacing="0" width="100%" style="height: 100%">
 <tr>
  <td id="header" colspan="2" valign="top"><a href="<?php echo $_SERVER['PHP_SELF']; ?>
"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/snode.jpg" alt="" border="0" /></a></td>
 </tr>
 <tr>
  <td class="toolbar" style="height: 25px;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/gfx/toolbar_left.gif" alt="" /><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?logout=1"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/exit.png" alt="" /></a><img style="margin-left: 175px;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/gfx/toolbar_left.gif" alt="" /><a href="#" onclick="javascript:switchToolbar();"><img id="sidebar_icon" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/window_sidebar.png" alt="" /></a><br /></td>
  <td class="toolbar" align="right" style="padding: 0px; padding-right: 10px;"><?php if ($this->_tpl_vars['DEFAULT_PASSWORD'] == 1): ?><span style="color:red;"><?php echo ((is_array($_tmp="You are still using the default password. Please change it in your settings!")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php endif;  if ($_SESSION['user']['lastName'] != ''): ?>Willkommen, <?php endif;  echo $_SESSION['user']['firstName']; ?>
 <?php echo $_SESSION['user']['lastName']; ?>
 <?php if ($_SESSION['user']['lastName'] != ''): ?>(<?php endif;  echo $_SESSION['user']['name']; ?>
@<?php echo $_SERVER['HTTP_HOST'];  if ($_SESSION['user']['lastName'] != ''): ?>)<?php endif; ?></td>
 </tr>
 <tr>
  <td class="desktop_container" colspan="2">

   <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%">
    <tr>
     <td id="sidebar" style="width: 200px; padding-right: 3px;" valign="top">

      <table cellspacing="0" cellpadding="0" width="100%" class="left" style="height: 100%;">
       <tr>
        <td class="top_head"><?php echo load_plugin(array('package' => "ch.iframe.snode.navigation",'module' => 'single_node','level' => '3','additional' => "adminmode=1"), $this);?>
</td>
       </tr>
       <tr>
        <td style="background-color: white; padding: 5px;" valign="top"><?php echo load_plugin(array('package' => "ch.iframe.snode.navigation",'module' => 'tree','node' => '100','style' => "admin.tpl",'start_level' => '2'), $this);?>
</td>
       </tr>
       <tr><td class="separator"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/gfx/separator.gif" alt="" /></td></tr>
       <tr>
        <td style="background-color: white; height:1px;" valign="top"><?php echo load_plugin(array('package' => "ch.iframe.snode.navigation",'module' => 'tree','node' => '100','style' => "admin_level1.tpl",'start_level' => '1','depth' => '1'), $this);?>
</td>
       </tr>
      </table>

     </td>
     <td>
      <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%;">
       <tr>
        <td valign="top">
<?php endif; ?>