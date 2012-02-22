<?php /* Smarty version 2.6.9, created on 2011-01-21 15:59:19
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/import.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/import.tpl', 12, false),)), $this); ?>
<?php echo '
<style type="text/css">

#introduction {
    width: 100%;
}
</style>
'; ?>

<form method="post" name="upload" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
<h1><?php echo ((is_array($_tmp='Upload Import')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h1>
<p id="introduction"><?php echo ((is_array($_tmp='Upload from local source')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
<br />

<input type="file" size="25" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file"/>
</div>
</form>