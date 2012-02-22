<?php /* Smarty version 2.6.9, created on 2011-01-21 12:04:27
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/editTemplate.tpl */ ?>
<?php echo '
<script language="JavaScript"><!--
if(window.parent.frames[\'master\']){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<form method="post">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="padding: 10px;">
<textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_content" style="width: 550px; height: 500px; font-family: Courier New"><?php echo $this->_tpl_vars['FILE']; ?>
</textarea>
</div>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_path" value="<?php echo $this->_tpl_vars['PATH']; ?>
" />
</form>