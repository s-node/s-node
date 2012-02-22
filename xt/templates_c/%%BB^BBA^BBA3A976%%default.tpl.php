<?php /* Smarty version 2.6.9, created on 2011-01-24 09:53:19
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/upload/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/upload/default.tpl', 3, false),)), $this); ?>
<form method="post" enctype="multipart/form-data" name="fileupload" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
 <input type="file" size="36" name="file">
 <input type="button" value="<?php echo ((is_array($_tmp='Upload')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" onclick="document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='upload';document.forms[0].submit();">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action">
</form>