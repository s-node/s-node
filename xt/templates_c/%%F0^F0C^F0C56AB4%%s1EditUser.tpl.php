<?php /* Smarty version 2.6.9, created on 2011-01-21 10:20:52
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1EditUser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1EditUser.tpl', 16, false),array('function', 'html_options', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1EditUser.tpl', 42, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1EditUser.tpl', 51, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.securitycenter/admin/s1EditUser.tpl', 61, false),)), $this); ?>
<?php echo '
<script language="JavaScript"><!--
if(window.parent.frames[\'master\']){
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<form method="POST" name="edit">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.securitycenter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_address_id" value="<?php echo $this->_tpl_vars['address_id']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='User')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <span class="title"><?php echo $this->_tpl_vars['username']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php $_from = $this->_tpl_vars['USER']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FIELD'] => $this->_tpl_vars['ROW']):
?>
 <tr>
  <td class="left" width="200" valign="top"><?php echo $this->_tpl_vars['ROW']['label']; ?>
</td>
  <?php if ($this->_tpl_vars['ROW']['type'] == 'text'): ?>
    <td class="right"><?php echo $this->_tpl_vars['ROW']['value']; ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_<?php echo $this->_tpl_vars['FIELD']; ?>
" value="<?php echo $this->_tpl_vars['ROW']['value']; ?>
"></td>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['ROW']['type'] == 'inputpassword'): ?>
    <td class="right"><input type="password" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_<?php echo $this->_tpl_vars['FIELD']; ?>
" size="<?php echo $this->_tpl_vars['ROW']['size']; ?>
"></b></td>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['ROW']['type'] == 'inputtext'): ?>
    <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_<?php echo $this->_tpl_vars['FIELD']; ?>
" value="<?php echo $this->_tpl_vars['ROW']['value']; ?>
" size="<?php echo $this->_tpl_vars['ROW']['size']; ?>
"></td>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['ROW']['type'] == 'inputarea'): ?>
    <td class="right">
     <textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_<?php echo $this->_tpl_vars['FIELD']; ?>
" rows="<?php echo $this->_tpl_vars['ROW']['rows']; ?>
" cols="<?php echo $this->_tpl_vars['ROW']['cols']; ?>
"><?php echo $this->_tpl_vars['ROW']['value']; ?>
</textarea>
    </td>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['ROW']['type'] == 'select'): ?>
    <td class="right" valign="middle">
     <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_<?php echo $this->_tpl_vars['FIELD']; ?>
">
      <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['ROW']['value'],'selected' => $this->_tpl_vars['ROW']['selected'],'output' => $this->_tpl_vars['ROW']['value_labels']), $this);?>

     </select>
    </td>
  <?php endif; ?>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_image&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=edit',770,470,'picker');"><img style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php echo actionIcon(array('action' => 's1DeleteImageFromUser','icon' => "delete.png",'form' => 'edit','title' => 'Delete Image','ask' => 'Are you sure that you want to delete this image relation','user_id' => $this->_tpl_vars['USER_ID']), $this);?>
<br />
   <?php if ($this->_tpl_vars['IMAGE'] == ''): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <?php echo image(array('id' => $this->_tpl_vars['IMAGE'],'version' => 1,'name' => 'x100_image_view'), $this);?>

   <?php endif; ?>
  </td>
 </tr>
</table>
</form>