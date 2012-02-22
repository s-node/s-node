<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from includes/header/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'XT_load_css', 'includes/header/header.tpl', 13, false),array('function', 'XT_load_js', 'includes/header/header.tpl', 22, false),array('function', 'plugin', 'includes/header/header.tpl', 26, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
" lang="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
">
 <head>
  <title><?php echo $this->_tpl_vars['TPL_TITLE']; ?>
</title>
  <?php if ($_GET['print']): ?>
   <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
live/Yourtheme/print.css" media="screen" />
   <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
live/Yourtheme/print.css" media="print" />
  <?php else: ?>
   <link rel="stylesheet" type="text/css" href="<?php if ($this->_tpl_vars['TPL_CSS'] != ''):  echo $this->_tpl_vars['TPL_CSS'];  else:  echo $this->_tpl_vars['XT_STYLES']; ?>
live/Yourtheme/yourtheme.css<?php endif; ?>" media="screen" />
   <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
live/Yourtheme/print.css" media="print" />
  <?php endif; ?>
  <!--%%XTCSSLOADER%%-->
  <?php echo XT_load_css(array('file' => "jquery.tipTip.css"), $this);?>

  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="search" type="application/opensearchdescription+xml" title="<?php echo $this->_tpl_vars['SYSTEM_NAME']; ?>
" href="/opensearch.xml.php" />
  <?php echo $this->_tpl_vars['META']; ?>

  <script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
base.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
jquery.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
jquery.thickbox.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['XT_SCRIPTS']; ?>
jquery-ui/ui.core.js"></script>
  <!--%%XTSCRIPTLOADER%%-->
  <?php echo XT_load_js(array('file' => "jquery-plugins/jquery.tipTip.js"), $this);?>

  <?php echo XT_load_js(array('file' => "jquery-plugins/call.jquery.tipTip.js"), $this);?>

 </head>
 <body>
  <?php echo load_plugin(array('package' => "ch.iframe.snode.toolbox",'module' => 'viewer'), $this);?>

  <a name="top"></a>
  <div id="container">
   <div id="header"><a href="<?php echo $_SERVER['PHP_SELF']; ?>
">Home</a><br />THEME : <?php echo $this->_tpl_vars['THEME']; ?>
</div>
   <div id="topnav"><?php echo load_plugin(array('package' => "ch.iframe.snode.navigation",'module' => 'tree','depth' => 1,'open_depth' => 1,'node' => '10000'), $this);?>
</div>
   <div id="sidenav"><?php echo load_plugin(array('package' => "ch.iframe.snode.navigation",'module' => 'tree','depth' => 2,'start_level' => 2,'node' => '10000','style' => "sidenav.tpl"), $this);?>
</div>
   <div id="content">