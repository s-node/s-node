<?php /* Smarty version 2.6.9, created on 2011-01-21 10:49:27
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/import.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/import.tpl', 4, false),)), $this); ?>
<form method="post" name="upload" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
<h2><?php echo ((is_array($_tmp='Address importer')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h2>
<p id="introduction"><?php echo ((is_array($_tmp='select File')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<br />

<input type="file" size="25" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file" value=""/>
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />

</div>
</form>