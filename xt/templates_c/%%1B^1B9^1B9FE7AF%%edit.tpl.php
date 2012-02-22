<?php /* Smarty version 2.6.9, created on 2011-01-21 10:27:09
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 11, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 27, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 39, false),array('modifier', 'cat', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 263, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 51, false),array('function', 'actionPopUp', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 73, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 82, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 95, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/admin/edit.tpl', 399, false),)), $this); ?>
<?php echo '
<script type="text/javascript"><!--
if(window.parent.frames[\'master\']){
    window.parent.frames[\'master\'].document.forms[1].x';  echo $this->_tpl_vars['BASEID']; ?>
_lang_filter.value='<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
';<?php echo '
    window.parent.frames[\'master\'].document.forms[1].submit();
}
//-->
</script>
'; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="post" name="edit" onSubmit="window.document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value= window.pageYOffset;">
<h2><span class="light"><?php echo ((is_array($_tmp='Article')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <?php echo $this->_tpl_vars['ARTICLE']['title']; ?>
</h2>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT2_BUTTONS'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Status')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_published" value="<?php echo $this->_tpl_vars['ARTICLE']['published']; ?>
" /><?php if ($this->_tpl_vars['ARTICLE']['published'] == 1): ?><span style="color: green;"><?php echo ((is_array($_tmp='This revision is published')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php else: ?><span style="color: red;"><?php echo ((is_array($_tmp="This is a revision in edit. It is not published")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php endif; ?></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Language')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
lang/<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
.png" alt="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" /></td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  	<input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ARTICLE']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="42" style="font-weight: bold;" />
  	<input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_hide_title" <?php if ($this->_tpl_vars['ARTICLE']['hide_title'] == 1): ?> checked="checked" <?php endif; ?> /><?php echo ((is_array($_tmp='hide title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Subtitle')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_subtitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ARTICLE']['subtitle'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="42" /></td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_articledate_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_articledate_str" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ARTICLE']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
" size="12" />
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_articledate" value="<?php echo $this->_tpl_vars['ARTICLE']['date']; ?>
" />
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'articledate_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </td>
 </tr>

  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Author')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_autor" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ARTICLE']['autor'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="42" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Introduction')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'introduction'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_introduction" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_introduction" rows="4" cols="65"><?php echo $this->_tpl_vars['ARTICLE']['introduction']; ?>
</textarea></td>
 </tr>
   <?php if ($this->_tpl_vars['DISPLAY']['text']): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'maintext'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maintext" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maintext" rows="12" cols="65"><?php echo $this->_tpl_vars['ARTICLE']['maintext']; ?>
</textarea></td>
 </tr>
 <?php endif;  if ($this->_tpl_vars['DISPLAY']['relations']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['ARTICLE']['id'],'ctitle' => $this->_tpl_vars['ARTICLE']['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if ($this->_tpl_vars['DISPLAY']['properties']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['ARTICLE']['id'],'content_type' => $this->_tpl_vars['BASEID'],'formname' => 'edit','universal' => true,'lang' => $this->_tpl_vars['ACTIVE_LANG'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
</table>

<h2><?php echo ((is_array($_tmp='Main image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h2>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="image" /></td>
  <td class="right"><?php echo actionPopUp(array('icon' => "pick_photo.png",'title' => ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['IMAGE_PICKER_TPL'],'BASEID' => $this->_tpl_vars['IMAGE_PICKER_BASE_ID'],'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'image','form' => 'edit','name' => 'picker','anker' => 'image'), $this); echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','yoffset' => 1,'title' => 'Delete Image','ask' => 'Are you sure that you want to delete this image relation','article_id' => $this->_tpl_vars['ARTICLE']['id']), $this);?>
<br />
   <?php if ($this->_tpl_vars['ARTICLE']['image'] < 1): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <?php if ($this->_tpl_vars['ARTICLE']['image_type'] == 2): ?>
   <div style="border: 1px solid black; margin-top: 5px; width: 200px;">
   <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['ARTICLE']['width'],'height' => $this->_tpl_vars['ARTICLE']['height']), $this);?>
">
   <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['ARTICLE']['image']; ?>
" />
   <param name="quality" value="high" />
   <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['ARTICLE']['image']; ?>
" quality="high" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['ARTICLE']['width'],'height' => $this->_tpl_vars['ARTICLE']['height']), $this);?>
" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
   </object>
   </div>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['ARTICLE']['image']; ?>
&amp;file_version=1" alt="" class="picked" />
   <?php endif; ?>
   <?php endif; ?>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image link')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_link" <?php if ($this->_tpl_vars['ARTICLE']['image_zoom'] == 1): ?>disabled<?php endif; ?> id="image_link" value="<?php echo $this->_tpl_vars['ARTICLE']['image_link']; ?>
" size="42" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image link target')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_link_target" id="image_link_target" <?php if ($this->_tpl_vars['ARTICLE']['image_zoom'] == 1): ?>disabled<?php endif; ?>>
    <option value="_self"   <?php if ($this->_tpl_vars['ARTICLE']['image_link_target'] == '_self'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Same window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_self)</option>
    <option value="_blank"  <?php if ($this->_tpl_vars['ARTICLE']['image_link_target'] == '_blank'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='New window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_blank)</option>
    <option value="_parent" <?php if ($this->_tpl_vars['ARTICLE']['image_link_target'] == '_parent'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Parent window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_parent)</option>
    <option value="_top"    <?php if ($this->_tpl_vars['ARTICLE']['image_link_target'] == '_top'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Top window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_top)</option>
   </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Zoom Popup available?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input onclick="switchLinkType(this,'');" type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_zoom" value="1" <?php if ($this->_tpl_vars['ARTICLE']['image_zoom'] == 1): ?>checked<?php endif; ?> />
  </td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONSDOWN'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT2_BUTTONS'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  if (( $this->_tpl_vars['CHAPTERSTHERE'] == true )): ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maxlevel" value="<?php echo $this->_tpl_vars['MAXLEVEL']; ?>
" />
 <?php $_from = $this->_tpl_vars['ARTICLECHAPTER']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FIELD'] => $this->_tpl_vars['ROW']):
?>
 <h2><span class="light"><?php echo ((is_array($_tmp='Chapter')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <?php echo $this->_tpl_vars['ROW']['title']; ?>
</h2>
 <table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Controls')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a id="chapter_<?php echo $this->_tpl_vars['ROW']['level']; ?>
" name="chapter_<?php echo $this->_tpl_vars['ROW']['level']; ?>
">&nbsp;</a></td>
  <td class="right"><?php if ($this->_tpl_vars['COPY'] != true):  if ($this->_tpl_vars['ROW']['active']):  echo actionIcon(array('action' => 'deactivateChapter','perm' => 'edit','icon' => "active.png",'form' => 'edit','yoffset' => 1,'title' => 'Deactivate the chapter','level' => $this->_tpl_vars['ROW']['level']), $this); else:  echo actionIcon(array('action' => 'activateChapter','icon' => "inactive.png",'perm' => 'edit','form' => 'edit','yoffset' => 1,'title' => 'Activate the chapter','level' => $this->_tpl_vars['ROW']['level']), $this); endif;  echo actionIcon(array('action' => 'saveArticle','icon' => "disk_blue.png",'perm' => 'edit','form' => 'edit','yoffset' => 1,'title' => 'Save','article_id' => $this->_tpl_vars['ROW']['level']), $this); echo actionIcon(array('action' => 'cutChapter','icon' => "cut.png",'perm' => 'edit','form' => 'edit','yoffset' => 1,'title' => 'Cut chapter','level' => $this->_tpl_vars['ROW']['level']), $this); echo actionIcon(array('action' => 'copyChapter','icon' => "copy.png",'perm' => 'edit','form' => 'edit','yoffset' => 1,'title' => 'Copy chapter','level' => $this->_tpl_vars['ROW']['level']), $this); echo actionIcon(array('action' => 'deleteChapter','icon' => "delete.png",'perm' => 'edit','form' => 'edit','yoffset' => 1,'title' => 'Delete','ask' => "Are you sure to delete this entry?",'level' => $this->_tpl_vars['ROW']['level']), $this);?>

   <?php else: ?>
    <?php echo actionIcon(array('action' => 'editArticle','chapter' => $this->_tpl_vars['FIELD'],'icon' => "cancel.png",'form' => 'edit','title' => 'Cancel','yoffset' => 1,'id' => $this->_tpl_vars['ROW']['id']), $this);?>

   <?php $this->assign('foo', $this->_tpl_vars['ROW']['level']-1); ?>
   <?php echo actionIcon(array('action' => 'cuttedChapter','newlevel' => $this->_tpl_vars['foo'],'chapter' => $this->_tpl_vars['FIELD'],'origlevel' => $this->_tpl_vars['COPY'],'icon' => "explorer/arrow_up_green.png",'form' => 'edit','title' => 'Paste the selected chapter over this chapter','yoffset' => 1,'article_id' => $this->_tpl_vars['ROW']['id']), $this);?>

   <?php echo actionIcon(array('action' => 'cuttedChapter','newlevel' => $this->_tpl_vars['ROW']['level'],'chapter' => $this->_tpl_vars['FIELD'],'origlevel' => $this->_tpl_vars['COPY'],'icon' => "explorer/arrow_down_green.png",'form' => 'edit','title' => 'Paste the selected chapter under this chapter','yoffset' => 1,'article_id' => $this->_tpl_vars['ROW']['id']), $this);?>

   <?php endif; ?>
   </td>
 </tr>
 <?php if ($this->_tpl_vars['COPY'] == true && $this->_tpl_vars['ROW']['level'] == $this->_tpl_vars['COPY']): ?>
 <tr>
  <td class="left_active"><b><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</b><a name="x<?php echo $this->_tpl_vars['FIELD']; ?>
">&nbsp;</a></td>
  <td class="right_active"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title<?php echo $this->_tpl_vars['FIELD']; ?>
" value="<?php echo $this->_tpl_vars['ROW']['title']; ?>
" size="40" /></td>
 </tr>
 <?php else: ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><b><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title<?php echo $this->_tpl_vars['FIELD']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ROW']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="40" /></b><a name="x<?php echo $this->_tpl_vars['FIELD']; ?>
">&nbsp;</a></td>
 </tr>
 <?php endif; ?>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Subtitle')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_subtitle<?php echo $this->_tpl_vars['FIELD']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ROW']['subtitle'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="40" />
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php if ($this->_tpl_vars['ROW']['layout'] != "bbcode.tpl"):  echo toggle_editor(array('id' => 'maintext','suffix' => $this->_tpl_vars['FIELD']), $this); else:  echo ((is_array($_tmp='HTML editor is not available for this template')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br/><?php endif; ?>
   <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maintext<?php echo $this->_tpl_vars['FIELD']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maintext<?php echo $this->_tpl_vars['FIELD']; ?>
" rows="8" cols="65"><?php echo $this->_tpl_vars['ROW']['maintext']; ?>
</textarea>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Layout')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <a href="#x<?php echo $this->_tpl_vars['FIELD']; ?>
" onclick="document.getElementById('layout<?php echo $this->_tpl_vars['FIELD']; ?>
').value='image_left.tpl';"><img src="/images/icons/ch.iframe.snode.articles/img_left<?php if ($this->_tpl_vars['ROW']['layout'] == 'image_left.tpl'): ?>_o<?php endif; ?>.png" alt="<?php echo ((is_array($_tmp='Image left')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="margin-bottom: 5px;" /></a>
   <a href="#x<?php echo $this->_tpl_vars['FIELD']; ?>
" onclick="document.getElementById('layout<?php echo $this->_tpl_vars['FIELD']; ?>
').value='image_right.tpl';"><img src="/images/icons/ch.iframe.snode.articles/img_right<?php if ($this->_tpl_vars['ROW']['layout'] == 'image_right.tpl'): ?>_o<?php endif; ?>.png" alt="<?php echo ((is_array($_tmp='Image right')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="margin-bottom: 5px;" /></a>
   <a href="#x<?php echo $this->_tpl_vars['FIELD']; ?>
" onclick="document.getElementById('layout<?php echo $this->_tpl_vars['FIELD']; ?>
').value='image_top.tpl';"><img src="/images/icons/ch.iframe.snode.articles/img_top<?php if ($this->_tpl_vars['ROW']['layout'] == 'image_top.tpl'): ?>_o<?php endif; ?>.png" alt="<?php echo ((is_array($_tmp='Image top')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="margin-bottom: 5px;" /></a>
   <a href="#x<?php echo $this->_tpl_vars['FIELD']; ?>
" onclick="document.getElementById('layout<?php echo $this->_tpl_vars['FIELD']; ?>
').value='image_float.tpl';"><img src="/images/icons/ch.iframe.snode.articles/float<?php if ($this->_tpl_vars['ROW']['layout'] == 'image_float.tpl'): ?>_o<?php endif; ?>.gif" alt="<?php echo ((is_array($_tmp='Floating image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="margin-bottom: 5px;" /></a>

   <br />
   <select name="tplselect<?php echo $this->_tpl_vars['FIELD']; ?>
" onchange="document.getElementById('layout<?php echo $this->_tpl_vars['FIELD']; ?>
').value=this.value;">
   <option value=""><?php echo ((is_array($_tmp='Please select')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   <?php $_from = $this->_tpl_vars['USERTPL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['avTPL'] => $this->_tpl_vars['avTPLTheme']):
?>
    <option value="<?php echo $this->_tpl_vars['avTPL']; ?>
"<?php if ($this->_tpl_vars['avTPL'] == $this->_tpl_vars['ROW']['layout']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['avTPL']; ?>
  (<?php echo $this->_tpl_vars['avTPLTheme']; ?>
)</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>


   <br />
   <input id="layout<?php echo $this->_tpl_vars['FIELD']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_layout<?php echo $this->_tpl_vars['FIELD']; ?>
" size="42" value="<?php echo $this->_tpl_vars['ROW']['layout']; ?>
" />
  </td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="image<?php echo $this->_tpl_vars['FIELD']; ?>
" /></td>
  <td class="right"><?php echo actionPopUp(array('icon' => "pick_photo.png",'title' => ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['IMAGE_PICKER_TPL'],'BASEID' => $this->_tpl_vars['IMAGE_PICKER_BASE_ID'],'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => ((is_array($_tmp='image')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['FIELD']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['FIELD'])),'form' => 'edit','name' => 'picker','anker' => ((is_array($_tmp='image')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['FIELD']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['FIELD']))), $this); echo actionIcon(array('action' => 'deleteChapterImage','chapter' => $this->_tpl_vars['FIELD'],'icon' => "delete.png",'form' => 'edit','title' => 'Delete Image','yoffset' => 1,'ask' => 'Are you sure that you want to delete this image relation','article_id' => $this->_tpl_vars['ROW']['id']), $this);?>
<br />
   <?php if ($this->_tpl_vars['ROW']['image'] < 1): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <?php if ($this->_tpl_vars['ROW']['image_type'] == 2): ?>
   <div style="border: 1px solid black; margin-top: 5px; width: 200px;">
   <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['ROW']['width'],'height' => $this->_tpl_vars['ROW']['height']), $this);?>
">
   <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['ROW']['image']; ?>
" />
   <param name="quality" value="high" />
   <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['ROW']['image']; ?>
" quality="high" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['ROW']['width'],'height' => $this->_tpl_vars['ROW']['height']), $this);?>
" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
   </object>
   </div>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['ROW']['image']; ?>
&amp;file_version=1" alt="" class="picked" />
   <?php endif; ?>
   <?php endif; ?>
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
" value="<?php echo $this->_tpl_vars['ROW']['image']; ?>
" />
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
_version" value="<?php echo $this->_tpl_vars['ROW']['image_version']; ?>
" />
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image link')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
_link" <?php if ($this->_tpl_vars['ROW']['image_zoom'] == 1): ?>disabled<?php endif; ?> id="image<?php echo $this->_tpl_vars['FIELD']; ?>
_link" value="<?php echo $this->_tpl_vars['ROW']['image_link']; ?>
" size="42" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image link target')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
_link_target" id="image<?php echo $this->_tpl_vars['FIELD']; ?>
_link_target" <?php if ($this->_tpl_vars['ROW']['image_zoom'] == 1): ?>disabled<?php endif; ?>>
    <option value="_self"   <?php if ($this->_tpl_vars['ROW']['image_link_target'] == '_self'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Same window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_self)</option>
    <option value="_blank"  <?php if ($this->_tpl_vars['ROW']['image_link_target'] == '_blank'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='New window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_blank)</option>
    <option value="_parent" <?php if ($this->_tpl_vars['ROW']['image_link_target'] == '_parent'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Parent window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_parent)</option>
    <option value="_top"    <?php if ($this->_tpl_vars['ROW']['image_link_target'] == '_top'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Top window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_top)</option>
   </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Zoom Popup available?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input onclick="switchLinkType(this,<?php echo $this->_tpl_vars['FIELD']; ?>
);" type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image<?php echo $this->_tpl_vars['FIELD']; ?>
_zoom" value="1" <?php if ($this->_tpl_vars['ROW']['image_zoom'] == 1): ?>checked<?php endif; ?> />
  </td>
 </tr>
 <?php if ($this->_tpl_vars['CUT'] == true): ?>
  <tr><td class="table_header" style="padding: 0px; height: 2px;" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></tr>
  <?php elseif ($this->_tpl_vars['COPY'] == true): ?>
  <tr><td class="left" style="border: 0px;"></td><td class="right" style="border: 0px;">
   <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_action=copyChapter&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_newlevel=<?php echo $this->_tpl_vars['ROW']['level']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_origlevel=<?php echo $this->_tpl_vars['COPY']; ?>
"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/arrow_right_green.png" alt="<?php echo ((is_array($_tmp='Copy here')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" align="middle" title="<?php echo ((is_array($_tmp='Copy the selected file to this position')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />&nbsp;<?php echo ((is_array($_tmp='Copy here')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a>&nbsp;
   <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_action=copyChapter&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_newlevel=0&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_origlevel=<?php echo $this->_tpl_vars['COPY']; ?>
"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/arrow_up_green.png" alt="<?php echo ((is_array($_tmp='Copy as first')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" align="middle" title="<?php echo ((is_array($_tmp='Copy the selected file to the first chapter-position')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />&nbsp;<?php echo ((is_array($_tmp='Copy as first')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a>&nbsp;
   <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_action=copyChapter&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_newlevel=<?php echo $this->_tpl_vars['MAXLEVEL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_origlevel=<?php echo $this->_tpl_vars['COPY']; ?>
"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/arrow_down_green.png" alt="<?php echo ((is_array($_tmp='Copy as last')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" align="middle" title="<?php echo ((is_array($_tmp='Copy the selected file to the last chapter-position')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />&nbsp;<?php echo ((is_array($_tmp='Copy as last')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a>&nbsp;
   <a href="index.php?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_action=editArticle&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_id=<?php echo $this->_tpl_vars['ROW']['id']; ?>
#chapter_<?php echo $this->_tpl_vars['ROW']['level']; ?>
"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/delete.png" alt="<?php echo ((is_array($_tmp='Cancel Copy')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" align="middle" title="<?php echo ((is_array($_tmp='Cancel the copy-operation')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />&nbsp;<?php echo ((is_array($_tmp='Cancel')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</a>
  </td></tr>
  <tr><td class="table_header" style="padding: 0px; height: 2px;" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></tr>
 <?php endif; ?>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONSDOWN'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT2_BUTTONS'],'withouthidden' => '1','yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php endforeach; endif; unset($_from);  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.articles/admin/time.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (sizeof ( $this->_tpl_vars['LANGS'] ) > 1): ?>
<h2><?php echo ((is_array($_tmp='Languages')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h2>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Copy into')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_copyToLang">
   <?php $_from = $this->_tpl_vars['LANGS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['KEY'] => $this->_tpl_vars['LANG']):
?>
    <?php if ($this->_tpl_vars['KEY'] != $this->_tpl_vars['ACTIVE_LANG']): ?>
    <option value="<?php echo $this->_tpl_vars['KEY']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['name'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?>
   </select>
   <?php echo actionIcon(array('action' => 'copyToLang','form' => 'edit','icon' => "explorer/arrow_right_green.png",'title' => 'Copy to this language'), $this);?>

  </td>
 </tr>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['DISPLAY']['trackback']): ?>
<table cellspacing="0" cellpadding="0" width="100%">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/trackback.tpl", 'smarty_include_vars' => array('url' => "http://".($_SERVER['SERVER_NAME']).($_SERVER['PHP_SELF'])."?TPL=113&x".($this->_tpl_vars['BASEID'])."_id=".($this->_tpl_vars['ARTICLE']['id']),'title' => ($this->_tpl_vars['ARTICLE']['title']),'excerpt' => ($this->_tpl_vars['ARTICLE']['introduction']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<?php endif; ?>

<h2><?php echo ((is_array($_tmp='Versioning')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (<?php echo ((is_array($_tmp='Last')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 10)</h2>
<table cellspacing="0" cellpadding="0" width="100%">

 <?php $_from = $this->_tpl_vars['HISTORY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['H'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['H']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['VERSION']):
        $this->_foreach['H']['iteration']++;
?>
 <tr>
  <td class="left"><?php echo actionIcon(array('icon' => "breakpoint_into.png",'form' => 'edit','title' => 'reuse this revision','action' => 'reuseRevision','reuse_rid' => $this->_tpl_vars['VERSION']['rid']), $this); echo ((is_array($_tmp=$this->_tpl_vars['VERSION']['creation_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I:%S") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I:%S")); ?>
&nbsp;</td>
  <td class="right" width="20"><?php echo $this->_tpl_vars['VERSION']['rid']; ?>
</td>
  <td class="right"><?php echo $this->_tpl_vars['VERSION']['title']; ?>
&nbsp;</td>
  <td class="right" width="80"><?php echo $this->_tpl_vars['VERSION']['creation_user']; ?>
&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['ARTICLE']['image']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['ARTICLE']['image_version']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_article_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_rid" value="<?php echo $this->_tpl_vars['ARTICLE']['rid']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_reuse_rid" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_chapter" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_level" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_newlevel" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_origlevel" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_liveedit" value="<?php echo $this->_tpl_vars['LIVEEDIT']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['ARTICLE']['active']; ?>
" />
<input type="hidden" value="<?php echo $_SERVER['HTTP_REFERER']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_request" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<?php echo yoffset(array(), $this);?>

</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '
<script type="text/javascript"><!--
function switchLinkType(element,id){
    if(id != \'\' || id == 0){
        if(element.checked){
            document.getElementById(\'image\' + id + \'_link\').value=\'\';
            document.getElementById(\'image\' + id + \'_link\').disabled=true;
            document.getElementById(\'image\' + id + \'_link_target\').disabled=true;
        } else {
            document.getElementById(\'image\' + id + \'_link\').disabled=false;
            document.getElementById(\'image\' + id + \'_link_target\').disabled=false;
        }
    } else {
        if(element.checked){
            document.getElementById(\'image_link\').value=\'\';
            document.getElementById(\'image_link\').disabled=true;
            document.getElementById(\'image_link_target\').disabled=true;
        } else {
            document.getElementById(\'image_link\').disabled=false;
            document.getElementById(\'image_link_target\').disabled=false;
        }
    }
}
//-->
</script>
'; ?>