<?php /* Smarty version 2.6.9, created on 2011-06-07 15:53:43
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit_node.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit_node.tpl', 8, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit_node.tpl', 14, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit_node.tpl', 18, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit_node.tpl', 31, false),)), $this); ?>
<?php echo '
<script language="JavaScript"><!--
window.parent.frames[\'master\'].document.forms[1].submit();
//-->
</script>
'; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="POST" name="edit_node">
 <h2><span class="light"><?php echo ((is_array($_tmp='Folder')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <?php echo $this->_tpl_vars['NODE']['title']; ?>
</h2>
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
_description" cols="65" rows="6"><?php echo $this->_tpl_vars['NODE']['description']; ?>
</textarea></td>
  </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp='public')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right">
   <input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_public" <?php if ($this->_tpl_vars['NODE']['public'] == 1): ?> checked="checked" <?php endif; ?> /><?php echo ((is_array($_tmp='public')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp='Main image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right">
   <a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=597&x240_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_image&x240_form=edit_node',770,470,'picker');">
    <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php echo actionIcon(array('action' => 'deleteNodeImage','icon' => "delete.png",'form' => 'edit_node','title' => 'Delete Image','ask' => "Are you sure you want to delete this image relation?"), $this);?>
<br />
    <?php if ($this->_tpl_vars['NODE']['image'] < 1): ?>
    <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
    <?php else: ?>
    <<?php if ($this->_tpl_vars['NODE']['image_version'] == 'embed'): ?>embed<?php else: ?>img<?php endif; ?> name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['NODE']['image']; ?>
&file_version=2" <?php if ($this->_tpl_vars['NODE']['image_version'] != 'embed'): ?>alt=""<?php else: ?>width="100%"<?php endif; ?> class="picked" />
    <?php endif; ?>
   </td>
  </tr>
  <?php if ($this->_tpl_vars['DISPLAY']['properties']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['NODE_ID'],'content_type' => 271,'WBASEID' => 271,'formname' => 'edit_node','universal' => false,'lang' => $this->_tpl_vars['ACTIVE_LANG'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
   <?php if ($this->_tpl_vars['DISPLAY']['relations']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['NODE_ID'],'ctitle' => $this->_tpl_vars['NODE']['title'],'ctype' => 271)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php endif; ?>
 </table>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="<?php echo $this->_tpl_vars['NODE_ID']; ?>
">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['NODE']['active']; ?>
">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['NODE']['image']; ?>
">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['NODE']['image_version']; ?>
">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>