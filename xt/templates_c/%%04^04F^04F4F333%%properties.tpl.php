<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:07
         compiled from ch.iframe.snode.catalog/admin/edit_articles/properties.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'ch.iframe.snode.catalog/admin/edit_articles/properties.tpl', 3, false),array('modifier', 'alttag', 'ch.iframe.snode.catalog/admin/edit_articles/properties.tpl', 155, false),array('modifier', 'default', 'ch.iframe.snode.catalog/admin/edit_articles/properties.tpl', 156, false),array('modifier', 'cat', 'ch.iframe.snode.catalog/admin/edit_articles/properties.tpl', 166, false),array('function', 'html_options', 'ch.iframe.snode.catalog/admin/edit_articles/properties.tpl', 16, false),array('function', 'toggle_editor', 'ch.iframe.snode.catalog/admin/edit_articles/properties.tpl', 141, false),array('function', 'image', 'ch.iframe.snode.catalog/admin/edit_articles/properties.tpl', 166, false),)), $this); ?>
<tr>
  <td class="view_header" colspan="2">
   <span class="title"> <?php echo ((is_array($_tmp='Properties')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="additionalProperties">&nbsp;</a><input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_id" value=""></span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>

<?php if ($this->_tpl_vars['DISPLAY']['single_property'] == 1):  if ($this->_tpl_vars['FIELDNAMES'] > 0): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='add properties')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name=x<?php echo $this->_tpl_vars['BASEID']; ?>
_property_id>
    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['FIELDNAMES']), $this);?>

  </select>
  <a href="javascript:document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='addPropertiesToArticle'; document.forms['editArticle'].submit();">
   <img src="images/icons/breakpoint_add.png" alt="<?php echo ((is_array($_tmp='add property')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='add property')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
  </a>
  </td>
 </tr>
 <?php endif; ?>
 <?php endif;  if ($this->_tpl_vars['DISPLAY']['property_group'] == 1): ?>
 <?php if (sizeof ( $this->_tpl_vars['GROUPS'] ) > 0): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='from group')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name=x<?php echo $this->_tpl_vars['BASEID']; ?>
_fieldgroup_id>
   <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['GROUPS']), $this);?>

   </select>
   <a href="javascript:document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='addGroupToArticle'; document.forms['editArticle'].submit();">
   <img src="images/icons/breakpoint_add.png" alt="<?php echo ((is_array($_tmp='add group')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='add group')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
   </a>
  </td>
 </tr>
 <?php endif; ?>
 <?php endif; ?>


 <?php $_from = $this->_tpl_vars['ARTICLEFIELDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FIELD']):
?>

 <tr>
  <td class="left">
  <a href="javascript:
  if(confirm('<?php echo ((is_array($_tmp='q_delete_property')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
'))
   document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_id.value=<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
;
   document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='deletePropertyFromArticle';
   document.forms['editArticle'].submit();">
  <img src="images/icons/delete.png" align="right" alt="<?php echo ((is_array($_tmp='delete property')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='delete property')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>

  <?php if ($this->_tpl_vars['FIELD']['description'] == ""): ?>
  <?php echo $this->_tpl_vars['FIELD']['label']; ?>

  <?php else: ?>
  <b><?php echo $this->_tpl_vars['FIELD']['label']; ?>
</b><br />
  <?php echo $this->_tpl_vars['FIELD']['description']; ?>

  <?php endif; ?>
  </td>
  <td class="right">
  <?php if ($this->_tpl_vars['FIELD']['type'] == 1): ?>
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="1">
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][0]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['0']; ?>
">
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][1]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['1']; ?>
">

      <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
      <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][boolean]" value="<?php echo $this->_tpl_vars['key']; ?>
" <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['FIELD']['value']): ?>checked="checked"<?php endif; ?>><?php echo $this->_tpl_vars['VAL']; ?>

      <?php endforeach; endif; unset($_from); ?>

  <?php endif; ?>
  <?php if ($this->_tpl_vars['FIELD']['type'] == 2): ?>
     <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][min]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['min']; ?>
">
     <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][max]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['max']; ?>
">
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="2">
      <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][decimal1]" value="<?php echo $this->_tpl_vars['FIELD']['value']; ?>
">
  <?php endif; ?>
  <?php if ($this->_tpl_vars['FIELD']['type'] == 5): ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="5">
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][l][min]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['l']['min']; ?>
">
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][l][max]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['l']['max']; ?>
">
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][r][min]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['r']['min']; ?>
">
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][r][max]" value="<?php echo $this->_tpl_vars['FIELD']['preptypevalue']['r']['max']; ?>
">

  <?php echo ((is_array($_tmp='from')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br /> <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][decimal1]" value="<?php echo $this->_tpl_vars['FIELD']['decimal1']; ?>
">
  <br /><?php echo ((is_array($_tmp='to')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<br /><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][decimal2]" value="<?php echo $this->_tpl_vars['FIELD']['decimal2']; ?>
">
  <?php endif; ?>

  <?php if ($this->_tpl_vars['FIELD']['type'] == 3): ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="3">
  <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][label][<?php echo $this->_tpl_vars['VAL']['value']; ?>
]" value="<?php echo $this->_tpl_vars['VAL']['label']; ?>
">
  <?php endforeach; endif; unset($_from); ?>
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][dropdown]" style="width:360px;">
      <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
      <option label="<?php echo $this->_tpl_vars['VAL']['label']; ?>
" value="<?php echo $this->_tpl_vars['VAL']['value']; ?>
" <?php if ($this->_tpl_vars['VAL']['value'] == $this->_tpl_vars['FIELD']['value']): ?>selected="selected"<?php endif;  if ($this->_tpl_vars['FIELD']['value'] == "" && $this->_tpl_vars['VAL']['default'] != ""): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['VAL']['label']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
  <?php endif; ?>


    <?php if ($this->_tpl_vars['FIELD']['type'] == 9): ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="9">
  <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][label][<?php echo $this->_tpl_vars['VAL']['value']; ?>
]" value="<?php echo $this->_tpl_vars['VAL']['label']; ?>
">
  <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
      <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][dropdown]" label="<?php echo $this->_tpl_vars['VAL']['label']; ?>
" value="<?php echo $this->_tpl_vars['VAL']['value']; ?>
" <?php if ($this->_tpl_vars['VAL']['value'] == $this->_tpl_vars['FIELD']['value']): ?>checked="checked"<?php endif;  if ($this->_tpl_vars['FIELD']['value'] == "" && $this->_tpl_vars['VAL']['default'] != ""): ?>checked="checked"<?php endif; ?> /><?php echo $this->_tpl_vars['VAL']['label']; ?>

      <?php endforeach; endif; unset($_from); ?>

  <?php endif; ?>

  <?php if ($this->_tpl_vars['FIELD']['type'] == 4): ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="4">
  <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][label][<?php echo $this->_tpl_vars['VAL']['value']; ?>
]" value="<?php echo $this->_tpl_vars['VAL']['label']; ?>
">
  <?php endforeach; endif; unset($_from); ?>
      <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][multi][]" size="5" multiple style="width:360px;">
      <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
            <option label="<?php echo $this->_tpl_vars['VAL']['label']; ?>
" value="<?php echo $this->_tpl_vars['VAL']['value']; ?>
" <?php if ($this->_tpl_vars['VAL']['default'] == 1): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['VAL']['label']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['FIELD']['type'] == 10): ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="10">
  <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][label][<?php echo $this->_tpl_vars['VAL']['value']; ?>
]" value="<?php echo $this->_tpl_vars['VAL']['label']; ?>
">
  <?php endforeach; endif; unset($_from); ?>

      <?php $_from = $this->_tpl_vars['FIELD']['preptypevalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VAL']):
?>

      <input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][multi][]"
      label="<?php echo $this->_tpl_vars['VAL']['label']; ?>
" value="<?php echo $this->_tpl_vars['VAL']['value']; ?>
"
      <?php if ($this->_tpl_vars['VAL']['default'] == 1): ?>checked="checked"<?php endif; ?> /><?php echo $this->_tpl_vars['VAL']['label']; ?>
<br />
      <?php endforeach; endif; unset($_from); ?>
      </select>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['FIELD']['type'] == 0): ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="0">
      <?php echo toggle_editor(array('id' => 'field_','suffix' => $this->_tpl_vars['FIELD']['field_id'],'nobaseid' => '1'), $this);?>

      <textarea id="field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][text]" rows="4" cols="65"><?php echo $this->_tpl_vars['FIELD']['value']; ?>
</textarea>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['FIELD']['type'] == 8): ?>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="0">
      <input type="text" id="field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][text]" size="65" value="<?php echo $this->_tpl_vars['FIELD']['value']; ?>
">
  <?php endif;  if ($this->_tpl_vars['FIELD']['type'] == 6 || $this->_tpl_vars['FIELD']['type'] == 7): ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][type]" value="<?php echo $this->_tpl_vars['FIELD']['type']; ?>
" />
<?php $_from = $this->_tpl_vars['FIELD']['relations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FKEY'] => $this->_tpl_vars['REL']):
?><br />
    <?php if ($this->_tpl_vars['FIELD']['type'] == 7): ?><a href="javascript:document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_<?php echo $this->_tpl_vars['FKEY']; ?>
_target_content_id.value='delete';document.forms['editArticle'].x1200_action.value='saveArticle';document.forms['editArticle'].submit();document.forms['editArticle'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=document.forms['editArticle'].pageYOffset;"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/delete.png" alt="<?php echo ((is_array($_tmp='delete')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php endif; ?>

    <?php if ($this->_tpl_vars['FIELD']['picker'] != ""): ?>
            <a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['FIELD']['picker']; ?>
&field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_<?php echo $this->_tpl_vars['FKEY']; ?>
_target_content_id&form=editArticle',960,500);">
            <img src="images/icons/breakpoint_add.png" <?php echo ((is_array($_tmp='please select an item')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
></a>
            <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_<?php echo $this->_tpl_vars['FKEY']; ?>
_target_content_id_title" size="60" class="disabled" readonly value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['REL']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['REL']['content_id']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['REL']['content_id'])); ?>
">
            <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_<?php echo $this->_tpl_vars['FKEY']; ?>
_target_content_id" value="<?php echo $this->_tpl_vars['REL']['content_id']; ?>
">
            <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_<?php echo $this->_tpl_vars['FKEY']; ?>
_target_content_id_version" value="<?php echo $this->_tpl_vars['REL']['content_id']; ?>
">
            <?php else: ?>
            <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_<?php echo $this->_tpl_vars['FKEY']; ?>
_target_content_id" value="<?php echo $this->_tpl_vars['REL']['content_id']; ?>
"> (<?php echo $this->_tpl_vars['REL']['title']; ?>
)
    <?php endif; ?>

    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][elements][<?php echo $this->_tpl_vars['FKEY']; ?>
][count]" value="<?php echo $this->_tpl_vars['FKEY']; ?>
">
   <?php if ($this->_tpl_vars['REL']['image'] > 0): ?>
   <br /><br />
  <?php echo image(array('id' => $this->_tpl_vars['REL']['image'],'version' => 0,'name' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='x')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['BASEID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['BASEID'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_field_') : smarty_modifier_cat($_tmp, '_field_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['FIELD']['field_id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['FIELD']['field_id'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['FKEY']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['FKEY'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_target_content_id_view') : smarty_modifier_cat($_tmp, '_target_content_id_view'))), $this);?>

  <br />
 <?php else: ?>
 <br />
 <img src="/images/spacer.gif" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_<?php echo $this->_tpl_vars['FKEY']; ?>
_target_content_id_view" alt=""/>
  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
 <?php if ($this->_tpl_vars['FIELD']['type'] == 7): ?>
     <?php if ($this->_tpl_vars['FIELD']['picker'] != ""): ?><br />
            <a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['FIELD']['picker']; ?>
&field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_99_target_content_id&form=editArticle',960,500);">
            <img src="images/icons/breakpoint_add.png" <?php echo ((is_array($_tmp='please select an item')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
></a>
            <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_99_target_content_id_title" class="disabled" readonly value="<?php echo ((is_array($_tmp='please select an item')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" size="45">
            <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_99_target_content_id" value="">
            <?php else: ?>
            <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field_<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
_99_target_content_id" value="<?php echo $this->_tpl_vars['REL']['content_id']; ?>
"> (<?php echo $this->_tpl_vars['REL']['title']; ?>
)
    <?php endif; ?>
    <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field[<?php echo $this->_tpl_vars['FIELD']['field_id']; ?>
][elements][99][count]" value="99" size="45">
 <?php endif; ?>
 <?php endif; ?>
  </td>
 </tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>