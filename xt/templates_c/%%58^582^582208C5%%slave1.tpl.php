<?php /* Smarty version 2.6.9, created on 2011-01-21 10:38:36
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/slave1.tpl', 4, false),)), $this); ?>
<form method="post" name="slave1" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<div id="content">
<h1><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</h1>
<p class="introduction"><?php echo ((is_array($_tmp='intro_text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</p>
</div>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
</form>


<?php if ($this->_tpl_vars['LIVEEDIT']): ?>
<script type="text/javascript"><!--
window.opener.location.reload();
window.close();
//-->
</script>
<?php else:  echo '
<script type="text/javascript"><!--
if(window.parent.frames[\'master\'].document.forms[1]){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<?php endif; ?>