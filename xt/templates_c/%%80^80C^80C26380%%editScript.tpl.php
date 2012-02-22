<?php /* Smarty version 2.6.9, created on 2011-01-21 15:59:26
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editScript.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editScript.tpl', 13, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editScript.tpl', 24, false),)), $this); ?>
<?php echo '
<script language="JavaScript"><!--
if(window.parent.frames[\'master\']){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<form method="post">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Script')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span><span class="title"> <?php echo $this->_tpl_vars['SCRIPT']['title']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['SCRIPT']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="42"></td>
 </tr>
 <tr>
  <td colspan="2" class="right"><?php echo $this->_tpl_vars['SCRIPT']['content_highlighted']; ?>
</td>
 </tr>
 <tr>
  <td colspan="2" class="right">
   <textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_content" cols="70" rows="40" style="width: 100%; font-family: Courier New;"><?php echo $this->_tpl_vars['SCRIPT']['content']; ?>
</textarea>
  </td>
 </tr>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_form_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_script_id" />
</form>