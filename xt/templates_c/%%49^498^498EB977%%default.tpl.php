<?php /* Smarty version 2.6.9, created on 2011-01-24 14:39:45
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.core/sourceedit/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.core/sourceedit/default.tpl', 14, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<head>
 <title>Snode XT :: Administration</title>
 <link rel="stylesheet" href="<?php echo $this->_tpl_vars['XT_STYLES']; ?>
sourceedit/default.css" />
 <?php echo $this->_tpl_vars['META']; ?>

</head>
<body>
<form method="POST" name="sourceedit">
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="toolbox">
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_id" value="<?php echo $this->_tpl_vars['TPL_ID']; ?>
">
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file" value="<?php echo $this->_tpl_vars['TPL_FILE']; ?>
">
   <input type="submit" class="button" value="<?php echo ((is_array($_tmp='Save')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" accesskey="S"> <input type="button" class="button" value="<?php echo ((is_array($_tmp='Close')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" onclick="window.close();" accesskey="Q">
  </td>
 </tr>
</table>
<textarea rows="30" cols="120" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_source" style="margin: 10px;"><?php echo $this->_tpl_vars['SOURCE']; ?>
</textarea>
</form>
<?php echo '
<script type="text/javascript"><!--

document.getElementsByName(\'x';  echo $this->_tpl_vars['BASEID'];  echo '_source\')[0].focus();
window.opener.location.href = \'';  echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL_ID'];  echo '\';

//-->
</script>
'; ?>

</body>
</html>