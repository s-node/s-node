<?php /* Smarty version 2.6.9, created on 2011-01-21 11:00:56
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 13, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 13, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 26, false),array('modifier', 'format_filesize', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 171, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 86, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 201, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 213, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/editFile.tpl', 278, false),)), $this); ?>
<?php echo '
<script language="JavaScript" type="text/javascript"><!--
window.parent.frames[\'master\'].document.forms[1].submit();
window.parent.frames[\'slave2\'].document.forms[0].submit();
//-->
</script>
'; ?>

<form method="POST" name="edit" enctype="multipart/form-data" onSubmit="window.document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value= window.pageYOffset;">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header">
   <span class="title"><?php echo $this->_tpl_vars['FILE']['title']; ?>
</span>
   <span class="subline"><br /><?php echo ((is_array($_tmp='Uploaded')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['FILE']['upload_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I:%S") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I:%S")); ?>
 - <?php echo ((is_array($_tmp='Uploaded by')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
: <?php echo $this->_tpl_vars['FILE']['username']; ?>
</span>
  </td>
  <td class="view_header" align="right"><a href="download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/download.png" alt="" class="icon" /></a></td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'edit')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" size="42" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['FILE']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
"></td>
 </tr>
 <?php if ($this->_tpl_vars['FILE']['type'] == 3 || $this->_tpl_vars['FILE']['type'] == 2 || $this->_tpl_vars['FILE']['type'] == 1): ?>
 <tr>
  <td class="view_header">
   <span class="title"><?php echo ((is_array($_tmp='Preview')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['FILE']['type'] == 3): ?>
 <tr>
  <td class="view_header" colspan="4">
   <span><img src="tmp.png?<?php echo $this->_tpl_vars['TIME']; ?>
" alt="" /></span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['FILE']['type'] == 2): ?>
 <tr>
  <td class="view_header" colspan="4">
   <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100%">
   <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
&amp;date=<?php echo $this->_tpl_vars['FILE']['upload_date']; ?>
" />
   <param name="quality" value="high" />
   <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
&amp;date=<?php echo $this->_tpl_vars['FILE']['upload_date']; ?>
" quality="high" width="100%" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
   </object>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['FILE']['type'] == 1): ?>
 <tr>
  <td class="view_header" colspan="4" style="padding-bottom: 0px;">
   <img src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
&amp;file_version=1&amp;date=<?php echo $this->_tpl_vars['FILE']['upload_date']; ?>
" alt="" style="border: 1px solid black;" />
  </td>
 </tr>
 <?php endif; ?>
 <tr>
  <td class="view_header">
   <span class="title"><?php echo ((is_array($_tmp='Details')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Filename')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="right" colspan="2"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_filename" size="42" value="<?php echo $this->_tpl_vars['FILE']['filename']; ?>
"></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="right" colspan="2"><?php echo toggle_editor(array('id' => 'description'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" cols="50" rows="4"><?php echo $this->_tpl_vars['FILE']['description']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Keywords')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="right" colspan="2"><textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_keywords" cols="50" rows="4"><?php echo $this->_tpl_vars['FILE']['keywords']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='available for search')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_public" value="1" <?php if ($this->_tpl_vars['FILE']['public'] == 1): ?>checked<?php endif; ?>></td>
 </tr>


 <tr>
  <td class="left"><?php echo ((is_array($_tmp='image Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_manual_date_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_manual_date_str" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['FILE']['manual_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
" size="12" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'manual_date_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_manual_date" value="<?php echo $this->_tpl_vars['FILE']['manual_date']; ?>
" />
  </td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Valid to Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right">
  <input type="checkbox" id="validdate" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_validity" value="enabled" <?php if ($this->_tpl_vars['FILE']['valid_date'] > 0): ?>checked="checked" <?php endif; ?> onclick="toggleDivByCheckbox('#validdate','#validdatebox');" /> Datei hat ein Ablaufdatum
  <div id="validdatebox" <?php if ($this->_tpl_vars['FILE']['valid_date'] == 0): ?> style="display:none" <?php endif; ?>>
  <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_valid_date_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_valid_date_str" value="<?php if ($this->_tpl_vars['FILE']['valid_date'] > 0):  echo ((is_array($_tmp=$this->_tpl_vars['FILE']['valid_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y"));  endif; ?>" size="12" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'valid_date_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_valid_date" value="<?php echo $this->_tpl_vars['FILE']['valid_date']; ?>
" /></div>
  </td>
 </tr>
<tr>
  <td class="left"><?php echo ((is_array($_tmp='Valid_from Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right">
  <input type="checkbox" id="validfrom" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_validity_from" value="enabled" <?php if ($this->_tpl_vars['FILE']['valid_from'] > 0): ?>checked="checked" <?php endif; ?> onclick="toggleDivByCheckbox('#validfrom','#validfrombox');" /> Datei hat ein "gültig ab" Datum
  <div id="validfrombox" <?php if ($this->_tpl_vars['FILE']['valid_from'] == 0): ?> style="display:none" <?php endif; ?>>
 <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_valid_from_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_valid_from_str" value="<?php if ($this->_tpl_vars['FILE']['valid_from'] > 0):  echo ((is_array($_tmp=$this->_tpl_vars['FILE']['valid_from'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y"));  endif; ?>" size="12" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'valid_from_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  H:   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_validity_from_hrs">
    <option value="0" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 0): ?>selected="selected"<?php endif; ?>>0</option>
    <option value="1" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 1): ?>selected="selected"<?php endif; ?>>1</option>
    <option value="2" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 2): ?>selected="selected"<?php endif; ?>>2</option>
    <option value="3" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 3): ?>selected="selected"<?php endif; ?>>3</option>
    <option value="4" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 4): ?>selected="selected"<?php endif; ?>>4</option>
    <option value="5" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 5): ?>selected="selected"<?php endif; ?>>5</option>
    <option value="6" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 6): ?>selected="selected"<?php endif; ?>>6</option>
    <option value="7" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 7): ?>selected="selected"<?php endif; ?>>7</option>
    <option value="8" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 8): ?>selected="selected"<?php endif; ?>>8</option>
    <option value="9" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 9): ?>selected="selected"<?php endif; ?>>9</option>
    <option value="10" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 10): ?>selected="selected"<?php endif; ?>>10</option>
    <option value="11" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 11): ?>selected="selected"<?php endif; ?>>11</option>
    <option value="12" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 12): ?>selected="selected"<?php endif; ?>>12</option>
    <option value="13" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 13): ?>selected="selected"<?php endif; ?>>13</option>
    <option value="14" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 14): ?>selected="selected"<?php endif; ?>>14</option>
    <option value="15" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 15): ?>selected="selected"<?php endif; ?>>15</option>
    <option value="16" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 16): ?>selected="selected"<?php endif; ?>>16</option>
    <option value="17" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 17): ?>selected="selected"<?php endif; ?>>17</option>
    <option value="18" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 18): ?>selected="selected"<?php endif; ?>>18</option>
    <option value="19" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 19): ?>selected="selected"<?php endif; ?>>19</option>
    <option value="20" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 20): ?>selected="selected"<?php endif; ?>>20</option>
    <option value="21" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 21): ?>selected="selected"<?php endif; ?>>21</option>
    <option value="22" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 22): ?>selected="selected"<?php endif; ?>>22</option>
    <option value="23" <?php if ($this->_tpl_vars['FILE']['valid_from_hrs'] == 23): ?>selected="selected"<?php endif; ?>>23</option>
    </select>
  M: <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_validity_from_min">
    <option value="0" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '00'): ?>selected="selected"<?php endif; ?>>0</option>
    <option value="5" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '05'): ?>selected="selected"<?php endif; ?>>5</option>
    <option value="10" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '10'): ?>selected="selected"<?php endif; ?>>10</option>
    <option value="15" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '15'): ?>selected="selected"<?php endif; ?>>15</option>
    <option value="20" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '20'): ?>selected="selected"<?php endif; ?>>20</option>
    <option value="25" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '25'): ?>selected="selected"<?php endif; ?>>25</option>
    <option value="30" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '30'): ?>selected="selected"<?php endif; ?>>30</option>
    <option value="35" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '35'): ?>selected="selected"<?php endif; ?>>35</option>
    <option value="40" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '40'): ?>selected="selected"<?php endif; ?>>40</option>
    <option value="45" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '45'): ?>selected="selected"<?php endif; ?>>45</option>
    <option value="50" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '50'): ?>selected="selected"<?php endif; ?>>50</option>
    <option value="55" <?php if ($this->_tpl_vars['FILE']['valid_from_min'] == '55'): ?>selected="selected"<?php endif; ?>>55</option>
    </select>
    
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_valid_from" value="<?php echo $this->_tpl_vars['FILE']['valid_from']; ?>
" /></div>
  </td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='File size')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="right" colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['FILE']['filesize'])) ? $this->_run_mod_handler('format_filesize', true, $_tmp) : format_filesize($_tmp)); ?>
</td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='MD5 sum')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="right" colspan="2"><?php echo $this->_tpl_vars['FILE']['md5sum']; ?>
</td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='MIME Type')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</td>
  <td class="right" colspan="2"><?php echo $this->_tpl_vars['FILE']['mime']; ?>
&nbsp;</td>
 </tr>
 <?php if ($this->_tpl_vars['DISPLAY']['relations']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['FILE']['id'],'ctitle' => $this->_tpl_vars['FILE']['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php endif;  if ($this->_tpl_vars['DISPLAY']['properties']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['FILE']['id'],'content_type' => $this->_tpl_vars['BASEID'],'formname' => 'edit','universal' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
 <tr>
  <td class="view_header">
   <span class="title"><?php echo ((is_array($_tmp='Image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
    <td class="left"><?php echo ((is_array($_tmp='Image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;</td>
    <td class="right">
    <a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=597&x240_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_image&x240_form=edit',770,470,'picker');"><img style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','title' => 'Delete Image','ask' => 'Are you sure that you want to delete this image relation','file_id' => $this->_tpl_vars['FILE']['id']), $this);?>
<br />
   <?php if ($this->_tpl_vars['FILE']['image'] <= 0): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <?php if ($this->_tpl_vars['FILE']['image_type'] == 2): ?>
   <div style="border: 1px solid black; margin-top: 5px; width: 200px;">
   <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['FILE']['width'],'height' => $this->_tpl_vars['FILE']['height']), $this);?>
">
   <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['image']; ?>
" />
   <param name="quality" value="high" />
   <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['image']; ?>
" quality="high" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['FILE']['width'],'height' => $this->_tpl_vars['FILE']['height']), $this);?>
" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
   </object>
   </div>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['image']; ?>
&file_version=2" alt="" class="picked" />
   <?php endif; ?>
   <?php endif; ?></td>
 </tr>

 <tr>
  <td class="view_header">
   <span class="title"><?php echo ((is_array($_tmp='Statistics')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Enable statistics')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_downloads" value="<?php echo $this->_tpl_vars['FILE']['downloads']; ?>
" />
   <input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_count_downloads" value="1" <?php if ($this->_tpl_vars['FILE']['count_downloads'] == 1): ?>checked<?php endif; ?> onclick="document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveFile';document.forms[0].submit();">
  </td>
 </tr>
 <?php if ($this->_tpl_vars['FILE']['count_downloads'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Downloads')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo $this->_tpl_vars['FILE']['downloads']; ?>
</td>
 </tr>
 <?php endif; ?>
 <tr>
  <td class="view_header">
   <span class="title"><?php echo ((is_array($_tmp='Replace file')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'],'withouthidden' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Replace file')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="file" name="file" size="34"></td>
 </tr>
</table>

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_before_content_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_before_content_type" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id" value="<?php echo $this->_tpl_vars['FILE']['id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_name" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_type" value="<?php echo $this->_tpl_vars['FILE']['type']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['FILE']['image']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['FILE']['image_version']; ?>
" />
<input type="hidden" name="module" value="e" />
<?php echo yoffset(array(), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>