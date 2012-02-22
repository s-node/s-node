<?php /* Smarty version 2.6.9, created on 2011-01-21 10:53:04
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_node.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_node.tpl', 15, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_node.tpl', 23, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_node.tpl', 27, false),)), $this); ?>
<?php echo '
<script type="text/javascript"><!--
if(window.parent.frames[\'master\']){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="POST" name="edit_node">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_NODE_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_submit.tpl", 'smarty_include_vars' => array('form' => 'edit_node','action' => 'saveNode')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="view_header" colspan="2">
    <span class="title_light"><?php echo ((is_array($_tmp='category')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <span class="title"><?php echo $this->_tpl_vars['NODE']['title']; ?>
</span>
   </td>
  </tr>
  <tr>
   <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
  </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp='name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['NODE']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="42"></td>
  </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp='description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><?php echo toggle_editor(array('id' => 'description'), $this);?>

   <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" cols="65" rows="4"><?php echo $this->_tpl_vars['NODE']['description']; ?>
</textarea></td>
  </tr>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.events/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>