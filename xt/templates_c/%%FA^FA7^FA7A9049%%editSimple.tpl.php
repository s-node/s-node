<?php /* Smarty version 2.6.9, created on 2011-01-24 09:43:10
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl', 25, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl', 26, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl', 90, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl', 43, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl', 149, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl', 282, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editSimple.tpl', 333, false),)), $this); ?>
<script language="JavaScript"><!--
window.parent.frames['master'].document.forms[1].module.value='o';
window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['DATA']['node_id']; ?>
;
window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter.value='<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
';
window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.parent.frames['master'].pageYOffset;
window.parent.frames['master'].document.forms[1].submit();
//-->
</script>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&x<?php echo $this->_tpl_vars['BASEID']; ?>
_module=es" method="post" name="edit" onSubmit="window.document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value= window.pageYOffset;">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo $this->_tpl_vars['DATA']['node_id']; ?>
:</span> <span class="title"><?php echo $this->_tpl_vars['DATA']['title']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_submit.tpl", 'smarty_include_vars' => array('form' => 'edit')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if ($this->_tpl_vars['LANGUAGE_TRANSFER']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'],'withouthidden' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Navigation')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" style="font-weight: bold;"></td>
 </tr>
</table>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
  <tr>
  <td class="view_header" colspan="3">
   <span class="title"><?php echo ((is_array($_tmp="What you want to display on this page?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="3"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['CONTENTS_BUTTONS'],'withouthidden' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table width="100%" cellpadding="0" cellspacing="0">
 <?php $_from = $this->_tpl_vars['PACKAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['A'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['A']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['PACKAGE']):
        $this->_foreach['A']['iteration']++;
?>
 <tr>
    <td class="left"><?php if ($this->_tpl_vars['CTRL']):  echo actionIcon(array('action' => 'insertContentSimple','entry_pos' => $this->_tpl_vars['PACKAGE']['position'],'entry_mode' => 'before','title' => 'Insert content before this content','form' => 'edit','icon' => "explorer/arrow_up_green.png"), $this); echo actionIcon(array('action' => 'insertContentSimple','entry_pos' => $this->_tpl_vars['PACKAGE']['position'],'entry_mode' => 'after','title' => 'Insert content after this content','form' => 'edit','icon' => "explorer/arrow_down_green.png"), $this); else:  if ($this->_tpl_vars['PACKAGE']['active'] == 0):  echo actionIcon(array('action' => 'activateContent','icon' => "inactive.png",'form' => 'edit','title' => 'Activate this content','entry_id' => $this->_tpl_vars['PACKAGE']['id']), $this); else:  echo actionIcon(array('action' => 'deactivateContent','icon' => "active.png",'form' => 'edit','title' => 'Deactivate this content','entry_id' => $this->_tpl_vars['PACKAGE']['id']), $this); endif;  echo actionIcon(array('action' => 'editContentSimple','icon' => "pencil.png",'form' => 'edit','title' => 'Edit this content','entry_id' => $this->_tpl_vars['PACKAGE']['id'],'entry_position' => $this->_tpl_vars['PACKAGE']['position']), $this); echo actionIcon(array('action' => 'deleteContent','icon' => "delete.png",'form' => 'edit','title' => 'Delete this content','ask' => "Do you really want to delete this entry?",'entry_id' => $this->_tpl_vars['PACKAGE']['id']), $this); if (! ($this->_foreach['A']['iteration'] <= 1)):  echo actionIcon(array('action' => 'moveUpContent','icon' => "explorer/arrow_up_green.png",'form' => 'edit','title' => 'Move this content up','entry_id' => $this->_tpl_vars['PACKAGE']['id'],'entry_pos' => $this->_tpl_vars['PACKAGE']['position']), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  if (! ($this->_foreach['A']['iteration'] == $this->_foreach['A']['total'])):  echo actionIcon(array('action' => 'moveDownContent','icon' => "explorer/arrow_down_green.png",'form' => 'edit','title' => 'Move this content down','entry_id' => $this->_tpl_vars['PACKAGE']['id'],'entry_pos' => $this->_tpl_vars['PACKAGE']['position']), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  endif; ?></td>
  <td class="right" style="color: black;"><?php if (sizeof ( $this->_tpl_vars['PACKAGE']['titles'] ) > 0):  $_from = $this->_tpl_vars['PACKAGE']['titles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TITLE']):
 echo ((is_array($_tmp=$this->_tpl_vars['TITLE'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 33, "...", true) : smarty_modifier_truncate($_tmp, 33, "...", true)); ?>
<br /><?php endforeach; endif; unset($_from);  else: ?><span style="color: #999999;"><?php echo ((is_array($_tmp='Unknown')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>&nbsp;<?php endif; ?></td>
  <td class="right" width="130" align="right"><?php echo $this->_tpl_vars['PACKAGE']['title']; ?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>

</table>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Redirect')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Refer to external location')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" onclick="showhideCheckbox('x<?php echo $this->_tpl_vars['BASEID']; ?>
_refertoextlink','x<?php echo $this->_tpl_vars['BASEID']; ?>
_ext_link');showhideCheckbox('x<?php echo $this->_tpl_vars['BASEID']; ?>
_refertoextlink','x<?php echo $this->_tpl_vars['BASEID']; ?>
_blank');"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_refertoextlink" value="1" <?php if ($this->_tpl_vars['DATA']['ext_link'] != ''): ?>checked<?php endif; ?>></td>
 </tr>
 <tr id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_ext_link" style="display: <?php if ($this->_tpl_vars['DATA']['ext_link'] != ''): ?>table-row<?php else: ?>none<?php endif; ?>;">
  <td class="left"><?php echo ((is_array($_tmp='External link')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_ext_link" value="<?php echo $this->_tpl_vars['DATA']['ext_link']; ?>
" size="42" style="color: red;"></td>
 </tr>
 <tr id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_blank" style="display: <?php if ($this->_tpl_vars['DATA']['ext_link'] != ''): ?>table-row<?php else: ?>none<?php endif; ?>;">
  <td class="left"><?php echo ((is_array($_tmp='new page')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_blank" value="1"<?php if ($this->_tpl_vars['DATA']['blank'] != 0): ?> checked="checked"<?php endif; ?>></td>
 </tr>
</table>




<table cellspacing="0" cellpadding="0" width="100%">
<?php if ($this->_tpl_vars['DISPLAY']['headimage']): ?>
<tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Head image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Head image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <a href="#" onclick="javascript:popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_image&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=edit',770,470,'picker');"><img style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','yoffset' => 1,'title' => 'Delete Image','field' => 'image','ask' => 'Are you sure that you want to delete this image relation'), $this);?>
<br />
   <?php if ($this->_tpl_vars['DATA']['image'] < 1): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <?php if ($this->_tpl_vars['DATA']['image_type'] == 2): ?>
   <div style="border: 1px solid black; margin-top: 5px; width: 200px;">
   <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['DATA']['width'],'height' => $this->_tpl_vars['DATA']['height']), $this);?>
">
   <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['image']; ?>
" />
   <param name="quality" value="high" />
   <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['image']; ?>
" quality="high" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['DATA']['width'],'height' => $this->_tpl_vars['DATA']['height']), $this);?>
" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
   </object>
   </div>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['image']; ?>
&file_version=2" alt="" class="picked" />
   <?php endif; ?>
   <?php endif; ?>
  </td>
 </tr>
<?php endif;  if ($this->_tpl_vars['DISPLAY']['menuimages']): ?>
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Menu Images')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Normal')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <img onclick="javascript:popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=edit',770,470,'picker');" style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','yoffset' => 1,'title' => 'Delete Image','field' => 'nav_image','ask' => 'Are you sure that you want to delete this image relation'), $this);?>
<br />
   <?php if ($this->_tpl_vars['DATA']['nav_image'] == ''): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <<?php if ($this->_tpl_vars['DATA']['nav_image_version'] == 'embed'): ?>embed<?php else: ?>img<?php endif; ?> name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['nav_image']; ?>
&file_version=1" class="admin_image" <?php if ($this->_tpl_vars['DATA']['nav_image_version'] != 'embed'): ?>alt=""<?php else: ?>width="100%"<?php endif; ?>>
   <?php endif; ?>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Active')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <img onclick="javascript:popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=edit',770,470,'picker');" style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','yoffset' => 1,'title' => 'Delete Image','field' => 'nav_image_active','ask' => 'Are you sure that you want to delete this image relation'), $this);?>
<br />
   <?php if ($this->_tpl_vars['DATA']['nav_image_active'] == ''): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <<?php if ($this->_tpl_vars['DATA']['nav_image_active_version'] == 'embed'): ?>embed<?php else: ?>img<?php endif; ?> name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['nav_image_active']; ?>
&file_version=1" class="admin_image" <?php if ($this->_tpl_vars['DATA']['nav_image_active_version'] != 'embed'): ?>alt=""<?php else: ?>width="100%"<?php endif; ?>>
   <?php endif; ?>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Rollover')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <img onclick="javascript:popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_rollover&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=edit',770,470,'picker');" style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','yoffset' => 1,'title' => 'Delete Image','field' => 'nav_image_rollover','ask' => 'Are you sure that you want to delete this image relation'), $this);?>
<br />
   <?php if ($this->_tpl_vars['DATA']['nav_image_rollover'] == ''): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_rollover_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <<?php if ($this->_tpl_vars['DATA']['nav_image_rollover_version'] == 'embed'): ?>embed<?php else: ?>img<?php endif; ?> name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_rollover_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['nav_image_rollover']; ?>
&file_version=1" class="admin_image" <?php if ($this->_tpl_vars['DATA']['nav_image_rollover_version'] != 'embed'): ?>alt=""<?php else: ?>width="100%"<?php endif; ?>>
   <?php endif; ?>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Active Rollover')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <img onclick="javascript:popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_rollover&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=edit',770,470,'picker');" style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','yoffset' => 1,'title' => 'Delete Image','field' => 'nav_image_active_rollover','ask' => 'Are you sure that you want to delete this image relation'), $this);?>
<br />
   <?php if ($this->_tpl_vars['DATA']['nav_image_active_rollover'] == ''): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_rollover_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <<?php if ($this->_tpl_vars['DATA']['nav_image_active_rollover_version'] == 'embed'): ?>embed<?php else: ?>img<?php endif; ?> name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_rollover_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['nav_image_active_rollover']; ?>
&file_version=1" class="admin_image" <?php if ($this->_tpl_vars['DATA']['nav_image_active_rollover_version'] != 'embed'): ?>alt=""<?php else: ?>width="100%"<?php endif; ?>>
   <?php endif; ?>
  </td>
 </tr>
 <?php endif; ?>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
<?php if ($this->_tpl_vars['DISPLAY']['properties']): ?>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['DATA']['node_id'],'content_type' => $this->_tpl_vars['BASEID'],'formname' => 'edit','universal' => $this->_tpl_vars['DISPLAY']['properties_universal'],'lang' => $this->_tpl_vars['ACTIVE_LANG'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
</table>




<table cellpadding="0" cellspacing="0" border="0" width="100%">
  <tr>
  <td class="view_header" colspan="3">
   <span class="title"><?php echo ((is_array($_tmp='Choose template')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="3"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['LAYOUTS_BUTTONS'],'withouthidden' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
 <tr>
  <td class="row" style="padding-right: 0px;" width="20"><input checked type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_pagetemplate" value="0"/></td>
  <td class="row">Leere Seite</td>
  <td class="row" style="padding-right: 0px;" width="20">&nbsp;</td>
 </tr>
 <?php $_from = $this->_tpl_vars['TEMPLATES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TEMPLATE']):
?>
 <tr>
  <td class="row" style="padding-right: 0px;" width="20"><input <?php if ($this->_tpl_vars['DATA']['based_on_tpl'] == $this->_tpl_vars['TEMPLATE']['id']): ?>checked<?php endif; ?> type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_pagetemplate" value="<?php echo $this->_tpl_vars['TEMPLATE']['id']; ?>
"/></td>
  <td class="row"><?php echo $this->_tpl_vars['TEMPLATE']['title']; ?>
</td>
  <td class="row" style="padding-right: 0px;" width="20" <?php if ($this->_tpl_vars['TEMPLATE']['image'] > 0): ?>onmouseover="document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_preview<?php echo $this->_tpl_vars['TEMPLATE']['id']; ?>
').style.display='table-row';" onmouseout="document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_preview<?php echo $this->_tpl_vars['TEMPLATE']['id']; ?>
').style.display='none';"<?php endif; ?>><?php if ($this->_tpl_vars['TEMPLATE']['image'] > 0): ?><img src="/images/icons/view.png" /><?php else: ?>&nbsp;<?php endif; ?></td>
 </tr>
 <?php if ($this->_tpl_vars['TEMPLATE']['image'] > 0): ?>
 <tr id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_preview<?php echo $this->_tpl_vars['TEMPLATE']['id']; ?>
" style="display: none;">
  <td class="row" colspan="3"><?php echo image(array('id' => $this->_tpl_vars['TEMPLATE']['image'],'version' => 3,'style' => "border: 1px solid #000000;"), $this);?>
</td>
 </tr>
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_author" value="<?php echo $this->_tpl_vars['DATA']['author']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_copyright" value="<?php echo $this->_tpl_vars['DATA']['copyright']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_public" value="<?php echo $this->_tpl_vars['DATA']['public']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" value="<?php echo $this->_tpl_vars['DATA']['description']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_keywords" value="<?php echo $this->_tpl_vars['DATA']['keywords']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target" value="<?php echo $this->_tpl_vars['DATA']['target']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_visible" value="<?php echo $this->_tpl_vars['DATA']['visible']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_show_in_overview" value="<?php echo $this->_tpl_vars['DATA']['show_in_overview']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_header" value="<?php echo $this->_tpl_vars['DATA']['header']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_footer" value="<?php echo $this->_tpl_vars['DATA']['footer']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_css" value="<?php echo $this->_tpl_vars['DATA']['css']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['DATA']['image']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['DATA']['image_version']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image" value="<?php echo $this->_tpl_vars['DATA']['nav_image']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_version" value="<?php echo $this->_tpl_vars['DATA']['nav_image_version']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active" value="<?php echo $this->_tpl_vars['DATA']['nav_image_active']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_version" value="<?php echo $this->_tpl_vars['DATA']['nav_image_active_version']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_rollover" value="<?php echo $this->_tpl_vars['DATA']['nav_image_rollover']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_rollover_version" value="<?php echo $this->_tpl_vars['DATA']['nav_image_rollover_version']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_rollover" value="<?php echo $this->_tpl_vars['DATA']['nav_image_active_rollover']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_nav_image_active_rollover_version" value="<?php echo $this->_tpl_vars['DATA']['nav_image_active_rollover_version']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['NAV_ACTIVE']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_file" value="<?php echo $this->_tpl_vars['DATA']['tpl_file']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="<?php echo $this->_tpl_vars['DATA']['node_id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="<?php echo $this->_tpl_vars['DATA']['node_id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['DATA']['active']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_based_on_tpl" value="<?php echo $this->_tpl_vars['DATA']['based_on_tpl']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_pos" value="0" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_mode" value="after" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target_module" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_rewrite_name" value="<?php echo $this->_tpl_vars['DATA']['rewrite_name']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_pagetitle" value="<?php echo $this->_tpl_vars['DATA']['pagetitle']; ?>
" />

<input type="hidden" name="TPL" value="<?php echo $this->_tpl_vars['TPL']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<?php echo yoffset(array(), $this);?>

</form>