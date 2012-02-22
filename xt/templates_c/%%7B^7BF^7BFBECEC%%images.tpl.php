<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:07
         compiled from ch.iframe.snode.catalog/admin/edit_articles/images.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'ch.iframe.snode.catalog/admin/edit_articles/images.tpl', 4, false),array('function', 'inline_navigator_top', 'ch.iframe.snode.catalog/admin/edit_articles/images.tpl', 4, false),array('function', 'actionIcon', 'ch.iframe.snode.catalog/admin/edit_articles/images.tpl', 49, false),)), $this); ?>
 <!-- images -->
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"> <?php echo ((is_array($_tmp='Images')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php echo inline_navigator_top(array('anchor' => 'articleImages'), $this);?>

     <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_delete_image_id" value="">
     <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_main_image_id" value="">
     <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_move_image_id" value="">
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
</tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='add image folder')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br />

  </td>
  <td class="right">
  <a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_CATEGORY_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_imagefolder&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=editArticle&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_actionField=x<?php echo $this->_tpl_vars['BASEID']; ?>
_action',770,470,'picker');"><img style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='pick_folder')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='pick_folder')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_imagefolder" value="" />
   </td>
</tr>


<?php $_from = $this->_tpl_vars['IMAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['IMAGE']):
?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="articleImages_<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
">&nbsp;</a><br />
  <?php if ($this->_tpl_vars['IMAGE']['main'] == 1): ?>
  <img src="images/icons/photo_scenery.png" alt="<?php echo ((is_array($_tmp='this is the main image of the article')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='this is the main image of the article')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="cursor: hand; cursor: pointer;" />
  <?php endif; ?>
  </td>
  <td class="right">
   <img id="image_<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['IMAGE_PICKER_TPL']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
&x<?php echo $this->_tpl_vars['IMAGE_PICKER_BASE_ID']; ?>
_form=editArticle',770,470,'picker');" style="cursor: hand; cursor: pointer;" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pick_photo.png" title="<?php echo ((is_array($_tmp='pick_image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='pick_image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
   <?php if ($this->_tpl_vars['IMAGE']['image'] != 0): ?><a href="javascript:
   document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_move_image_id.value=<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
;
   document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='moveImageDown';

   document.forms['editArticle'].submit();">
     <img src="images/icons/explorer/arrow_down_green.png" alt="<?php echo ((is_array($_tmp='move_down_image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='move_down_image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="cursor: hand; cursor: pointer;" /></a>
   <a href="javascript:
   document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_move_image_id.value=<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
;
   document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='moveImageUp';
   document.forms['editArticle'].submit();">
     <img src="images/icons/explorer/arrow_up_green.png" alt="<?php echo ((is_array($_tmp='move_up_image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='move_up_image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" style="cursor: hand; cursor: pointer;" /></a>
     <?php if ($this->_tpl_vars['IMAGE']['main'] == 0): ?>
     <a href="javascript:document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='setMainImage';document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_main_image_id.value=<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
;document.forms['editArticle'].submit();"><img
        src="images/icons/photo_small.png" alt="<?php echo ((is_array($_tmp='make this image to main image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='make this image to main image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
     <?php endif; ?>
   <?php endif; ?>
   <?php echo actionIcon(array('action' => 'deleteImageFromArticle','icon' => "delete.png",'form' => 'editArticle','title' => 'delete image','ask' => "delete this image?",'yoffset' => '1','delete_image_id' => $this->_tpl_vars['IMAGE']['position']), $this);?>

   <br />

   <?php if ($this->_tpl_vars['IMAGE']['image'] == ''): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <<?php if ($this->_tpl_vars['IMAGE']['version'] == 'embed'): ?>embed<?php else: ?>img<?php endif; ?> name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['IMAGE']['image']; ?>
&file_version=<?php echo $this->_tpl_vars['IMAGE']['version']; ?>
" <?php if ($this->_tpl_vars['IMAGE']['version'] != 'embed'): ?>alt=""<?php else: ?>width="100%"<?php endif; ?> class="picked">
   <?php endif; ?>
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
" value="<?php echo $this->_tpl_vars['IMAGE']['image']; ?>
">
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
_version" value="<?php echo $this->_tpl_vars['IMAGE']['version']; ?>
">
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_versions[<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
]" value="<?php echo $this->_tpl_vars['IMAGE']['position']; ?>
">
  </td>
 </tr>
<?php endforeach; endif; unset($_from); ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='add image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><a
  href="javascript:document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='addImageToArticle'; document.forms['editArticle'].submit();"
  ><img
  style="cursor: hand; cursor: pointer; margin-bottom: 5px;"
  src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/breakpoint_add.png"
  title="<?php echo ((is_array($_tmp='add image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"
  alt="<?php echo ((is_array($_tmp='add image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
  </td>
 </tr>