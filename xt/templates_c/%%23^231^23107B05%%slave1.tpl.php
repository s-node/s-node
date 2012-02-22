<?php /* Smarty version 2.6.9, created on 2011-01-21 11:09:01
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/slave1.tpl', 5, false),)), $this); ?>
<div id="intro">
<form method="post" name="slave1" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" >
<div class="content">
<h1><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</h1>
<p class="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.newsletter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
</form>
</div>

<?php echo '
<script type="text/javascript"><!--
if(window.parent.frames[\'master\'].document.forms[1]){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>