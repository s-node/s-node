<?php /* Smarty version 2.6.9, created on 2011-01-21 10:53:28
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl', 2, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl', 8, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl', 174, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl', 216, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl', 12, false),array('function', 'actionPopUp', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl', 22, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.events/admin/edit_event.tpl', 31, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="post" name="edit" onSubmit="window.document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;">
<h2><span class="light"><?php echo ((is_array($_tmp='Event')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <?php echo $this->_tpl_vars['EVENT']['title']; ?>
</h2>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_submit.tpl", 'smarty_include_vars' => array('form' => 'edit','action' => 'saveEvent')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="42" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Introduction')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'introduction'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_introduction" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_introduction" rows="4" cols="65"><?php echo $this->_tpl_vars['EVENT']['introduction']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Text')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'maintext'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maintext" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_maintext" rows="8" cols="65"><?php echo $this->_tpl_vars['EVENT']['maintext']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Picture')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="image" /></td>
  <td class="right"><?php echo actionPopUp(array('icon' => "pick_photo.png",'title' => ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['IMAGE_PICKER_TPL'],'BASEID' => $this->_tpl_vars['IMAGE_PICKER_BASE_ID'],'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'image','form' => 'edit','name' => 'picker','anker' => 'image'), $this); echo actionIcon(array('action' => 'saveEvent','delete_image' => '1','icon' => "delete.png",'form' => 'edit','yoffset' => 1,'title' => 'Delete Image','ask' => 'Are you sure that you want to delete this image relation','id' => $this->_tpl_vars['EVENT']['id']), $this);?>
<br />
   <?php if ($this->_tpl_vars['EVENT']['image'] < 1): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['EVENT']['image']; ?>
&amp;file_version=1" alt="" class="picked" />
   <?php endif; ?></td>
 </tr>

 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Data')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>


 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Country')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_country" onchange="document.forms['edit'].x5100_yoffset.value= window.pageYOffset;document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms['edit'].submit();">
   <option value="" <?php if ($this->_tpl_vars['COUNTRY']['country'] == $this->_tpl_vars['EVENT']['country']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp='Select a country')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   <?php $_from = $this->_tpl_vars['COUNTRIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['COUNTRY']):
?>
   <option value="<?php echo $this->_tpl_vars['COUNTRY']['country']; ?>
" <?php if ($this->_tpl_vars['COUNTRY']['country'] == $this->_tpl_vars['EVENT']['country']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['COUNTRY']['name']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Region')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_region_id">
   <option value="0"><?php echo ((is_array($_tmp='None')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   <?php $_from = $this->_tpl_vars['REGIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['REGION']):
?>
   <option value="<?php echo $this->_tpl_vars['REGION']['region']; ?>
" <?php if ($this->_tpl_vars['REGION']['region'] == $this->_tpl_vars['EVENT']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['REGION']['name']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Address')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="addr_picker" /></td>
  <td class="right">
  <input size="40" type="text" readonly="yes" class="disabled" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_address_title" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_address_title" value="<?php if ($this->_tpl_vars['EVENT']['address'] > 0):  echo $this->_tpl_vars['ADDRESS']['title'];  if ($this->_tpl_vars['ADDRESS']['street'] != ""): ?>, <?php echo $this->_tpl_vars['ADDRESS']['street'];  endif;  if ($this->_tpl_vars['ADDRESS']['postalCode'] != ""): ?>, <?php echo $this->_tpl_vars['ADDRESS']['postalCode'];  endif;  if ($this->_tpl_vars['ADDRESS']['city'] != ""): ?>, <?php echo $this->_tpl_vars['ADDRESS']['city'];  endif;  endif; ?>" />
  <?php echo actionPopUp(array('icon' => "breakpoint_add.png",'title' => ((is_array($_tmp='Pick an address')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['ADDR_PICKER_TPL'],'BASEID' => 7400,'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'address','form' => 'edit','name' => 'addr_picker','anker' => 'addr_picker'), $this);?>
<input type="hidden" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_address" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_address" value="<?php echo $this->_tpl_vars['ADDRESS']['id']; ?>
" /></td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Contact Person')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="contact_picker" /></td>
  <td class="right">
  <input size="40" type="text" readonly="yes" class="disabled" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_contact_person_id_title" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_contact_title" value="<?php if ($this->_tpl_vars['EVENT']['contact_person_id'] > 0):  echo $this->_tpl_vars['CONTACT_PERSON']['title'];  if ($this->_tpl_vars['CONTACT_PERSON']['street'] != ""): ?>, <?php echo $this->_tpl_vars['CONTACT_PERSON']['street'];  endif;  if ($this->_tpl_vars['CONTACT_PERSON']['postalCode'] != ""): ?>, <?php echo $this->_tpl_vars['CONTACT_PERSON']['postalCode'];  endif;  if ($this->_tpl_vars['CONTACT_PERSON']['city'] != ""): ?>, <?php echo $this->_tpl_vars['CONTACT_PERSON']['city'];  endif;  endif; ?>" />
  <?php echo actionPopUp(array('icon' => "breakpoint_add.png",'title' => ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['ADDR_PICKER_TPL'],'BASEID' => 7400,'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'contact_person_id','form' => 'edit','name' => 'contact_picker','anker' => 'contact_picker'), $this);?>

<a href="#" onclick="$('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_contact_person_id').val(0); $('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_contact_person_id_title').val(''); return false;">
    <img src="images/icons/delete.png" alt="delete" />
</a>
<input type="hidden" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_contact_person_id" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_contact_person_id" value="<?php echo $this->_tpl_vars['CONTACT_PERSON']['id']; ?>
" /></td>
 </tr>
 
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Speaker')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="speaker_picker" /></td>
  <td class="right">
  <input size="40" type="text" readonly="yes" class="disabled" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_speaker_id_title" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_speaker_title" value="<?php if ($this->_tpl_vars['EVENT']['speaker_id'] > 0):  echo $this->_tpl_vars['SPEAKER']['title'];  if ($this->_tpl_vars['SPEAKER']['street'] != ""): ?>, <?php echo $this->_tpl_vars['SPEAKER']['street'];  endif;  if ($this->_tpl_vars['SPEAKER']['postalCode'] != ""): ?>, <?php echo $this->_tpl_vars['SPEAKER']['postalCode'];  endif;  if ($this->_tpl_vars['SPEAKER']['city'] != ""): ?>, <?php echo $this->_tpl_vars['SPEAKER']['city'];  endif;  endif; ?>" />
  <?php echo actionPopUp(array('icon' => "breakpoint_add.png",'title' => ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['ADDR_PICKER_TPL'],'BASEID' => 7400,'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'speaker_id','form' => 'edit','name' => 'speaker_picker','anker' => 'speaker_picker'), $this);?>

<a href="#" onclick="$('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_speaker_id').val(0); $('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_speaker_id_title').val(''); return false;">
    <img src="images/icons/delete.png" alt="delete" />
</a>
<input type="hidden" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_speaker_id" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_speaker_id" value="<?php echo $this->_tpl_vars['SPEAKER']['id']; ?>
" /></td>
 </tr>
 
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Meeting Place')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="meeting_place_picker" /></td>
  <td class="right">
  <input size="40" type="text" readonly="yes" class="disabled" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_meeting_place_id_title" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_meeting_place_title" value="<?php if ($this->_tpl_vars['EVENT']['meeting_place_id'] > 0):  echo $this->_tpl_vars['MEETINGPLACE']['title'];  if ($this->_tpl_vars['MEETINGPLACE']['street'] != ""): ?>, <?php echo $this->_tpl_vars['MEETINGPLACE']['street'];  endif;  if ($this->_tpl_vars['MEETINGPLACE']['postalCode'] != ""): ?>, <?php echo $this->_tpl_vars['MEETINGPLACE']['postalCode'];  endif;  if ($this->_tpl_vars['MEETINGPLACE']['city'] != ""): ?>, <?php echo $this->_tpl_vars['MEETINGPLACE']['city'];  endif;  endif; ?>" />
  <?php echo actionPopUp(array('icon' => "breakpoint_add.png",'title' => ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['ADDR_PICKER_TPL'],'BASEID' => 7400,'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'meeting_place_id','form' => 'edit','name' => 'meeting_place_picker','anker' => 'meeting_place_picker'), $this);?>

<a href="#" onclick="$('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_meeting_place_id').val(0); $('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_meeting_place_id_title').val(''); return false;">
    <img src="images/icons/delete.png" alt="delete" />
</a>
<input type="hidden" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_meeting_place_id" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_meeting_place_id" value="<?php echo $this->_tpl_vars['MEETINGPLACE']['id']; ?>
" /></td>
 </tr>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="date" /></td>
  <td class="right">
  <select  style="width:50px;" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_day" onchange="document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_day').value=document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_day')[selectedIndex].value;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_day">
  <?php $_from = $this->_tpl_vars['DAYS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['DAY']):
?>
    <option value="<?php echo $this->_tpl_vars['DAY']; ?>
"<?php if ($this->_tpl_vars['DAY'] == $this->_tpl_vars['DAY_SELECTED']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['DAY']; ?>
</option>
  <?php endforeach; endif; unset($_from); ?>
  </select>
  <select  style="width:50px;" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_month" onchange="document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_month').value=document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_month')[selectedIndex].value;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_month">
  <?php $_from = $this->_tpl_vars['MONTHS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MONTH']):
?>
    <option value="<?php echo $this->_tpl_vars['MONTH']; ?>
"<?php if ($this->_tpl_vars['MONTH'] == $this->_tpl_vars['MONTH_SELECTED']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['MONTH']; ?>
</option>
  <?php endforeach; endif; unset($_from); ?>
  </select>
  <select style="width:60px;" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_year" onchange="document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_year').value=document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_year')[selectedIndex].value;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_year">
  <?php $_from = $this->_tpl_vars['YEARS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['YEAR']):
?>
    <option value="<?php echo $this->_tpl_vars['YEAR']; ?>
"<?php if ($this->_tpl_vars['YEAR'] == $this->_tpl_vars['YEAR_SELECTED']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['YEAR']; ?>
</option>
  <?php endforeach; endif; unset($_from); ?>
  </select>
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_day" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_day" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['from_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e") : smarty_modifier_date_format($_tmp, "%e")); ?>
" />
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_month" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_month" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['from_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m") : smarty_modifier_date_format($_tmp, "%m")); ?>
" />
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_year" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['from_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
" />

  </td>
 </tr>

<tr>
    <td class="left">
        <?php echo ((is_array($_tmp='defined starttime')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

    </td>
    <td class="right">
        <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_set_start_date_only" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_set_start_date_only" value="0" <?php if (! $this->_tpl_vars['EVENT']['set_start_date_only']): ?>checked="checked"<?php endif; ?> onchange="document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();" /><?php echo ((is_array($_tmp='yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

        <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_set_start_date_only" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_set_start_date_only" value="1" <?php if ($this->_tpl_vars['EVENT']['set_start_date_only']): ?>checked="checked"<?php endif; ?> onchange="document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();" /><?php echo ((is_array($_tmp='no')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

    </td>
</tr>


<?php if (! $this->_tpl_vars['EVENT']['set_start_date_only']): ?>

         <tr>
      <td class="left"><?php echo ((is_array($_tmp='Time')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      <td class="right">
      <select style="width: 50px;" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_start_hour" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_start_hour" onchange="document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_start_hour').value=document.getElementById('x<?php echo $this->_tpl_vars['BASEID']; ?>
_select_start_hour')[selectedIndex].value;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();">
      <?php $_from = $this->_tpl_vars['HOURS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['HOUR']):
?>
        <option value="<?php echo $this->_tpl_vars['HOUR']; ?>
"<?php if ($this->_tpl_vars['HOUR'] == $this->_tpl_vars['HOUR_SELECTED']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['HOUR']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
    
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_start_hour" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['from_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H") : smarty_modifier_date_format($_tmp, "%H")); ?>
" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_start_hour" maxlength="2" />&nbsp;:&nbsp;<input type="text" style="width: 50px;" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_start_min" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['from_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%M") : smarty_modifier_date_format($_tmp, "%M")); ?>
" id="start_min" maxlength="2" /></td>
     </tr>
    
    
<?php endif; ?>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Duration')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_duration" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['EVENT']['duration'])) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)); ?>
" />&nbsp;
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_duration_type">
    <option value="week"<?php if ($this->_tpl_vars['EVENT']['duration_type'] == 'week'): ?> selected<?php endif; ?>><?php echo ((is_array($_tmp="Week(s)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="day"<?php if ($this->_tpl_vars['EVENT']['duration_type'] == 'day'): ?> selected<?php endif; ?>><?php echo ((is_array($_tmp="Day(s)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="hours"<?php if ($this->_tpl_vars['EVENT']['duration_type'] == 'hours'): ?> selected<?php endif; ?>><?php echo ((is_array($_tmp="Hour(s)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="minutes"<?php if ($this->_tpl_vars['EVENT']['duration_type'] == 'minutes'): ?> selected<?php endif; ?>><?php echo ((is_array($_tmp="Minute(s)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  </select>

  &nbsp;(<?php echo ((is_array($_tmp=$this->_tpl_vars['EVENT']['end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
)
  </td>
 </tr>


 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
<?php if ($this->_tpl_vars['DISPLAY']['relations']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['EVENT']['id'],'ctitle' => $this->_tpl_vars['EVENT']['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if ($this->_tpl_vars['DISPLAY']['properties']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['EVENT']['id'],'content_type' => $this->_tpl_vars['BASEID'],'formname' => 'edit','universal' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>





 <tr>
    <td class="left"><?php echo ((is_array($_tmp='Visitors')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
    <td class="right"><input type="text" value="<?php echo $this->_tpl_vars['EVENT']['max_visitors']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_max_visitors" size="10" />&nbsp;<?php echo ((is_array($_tmp='Reg')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
=<?php echo $this->_tpl_vars['EVENT']['reg_visitors']; ?>
 / <?php echo ((is_array($_tmp='Free')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
=<?php echo $this->_tpl_vars['EVENT']['free_places']; ?>

  </td>
 </tr>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='costs')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'costs'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_costs" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_costs" rows="3" cols="65"><?php echo $this->_tpl_vars['EVENT']['costs']; ?>
</textarea></td>
 </tr>
 <tr>
    <td class="left"><?php echo ((is_array($_tmp='Link')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
    <td class="right"><input onclick="showhideCheckbox('x<?php echo $this->_tpl_vars['BASEID']; ?>
_haslink', 'x<?php echo $this->_tpl_vars['BASEID']; ?>
_linktr');" type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_haslink" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_haslink"<?php if ($this->_tpl_vars['EVENT']['link'] != ""): ?> checked<?php endif; ?> /></td>
 </tr>
 <tr id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_linktr" style="display:<?php if ($this->_tpl_vars['EVENT']['link'] != ''): ?> table-row<?php else: ?> none<?php endif; ?>;">
    <td class="left"><?php echo ((is_array($_tmp='URL')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
    <td class="right"><input type="text" value="<?php echo $this->_tpl_vars['EVENT']['link']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_link" size="40" />&nbsp;
    <input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_link_external"<?php if ($this->_tpl_vars['EVENT']['link_external'] == 1): ?> checked<?php endif; ?> />&nbsp;<?php echo ((is_array($_tmp='New window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 
<tr>
    <td class="left">
        <?php echo ((is_array($_tmp='Allow registration')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

    </td>
    <td class="right">
        <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_allow_registration" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_allow_registration" value="0" <?php if ($this->_tpl_vars['EVENT']['registertpl'] != ""): ?>checked="checked"<?php endif; ?> onchange="$('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_registertplwrapper').css('display', 'table-row'); $('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_registertpl').val('default.tpl');" /><?php echo ((is_array($_tmp='yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

        <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_allow_registration" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_allow_registration" value="1" <?php if ($this->_tpl_vars['EVENT']['registertpl'] == ""): ?>checked="checked"<?php endif; ?> onchange="$('#x<?php echo $this->_tpl_vars['BASEID']; ?>
_registertpl').val(''); document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();" /><?php echo ((is_array($_tmp='no')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

    </td>
</tr>

<tr id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_registertplwrapper" style="display:<?php if ($this->_tpl_vars['EVENT']['registertpl'] != ""): ?>table-row<?php else: ?> none<?php endif; ?>;">
    <td class="left">
        <?php echo ((is_array($_tmp='Registertemplate')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

    </td>
    <td class="right">
        <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_registertpl" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_registertpl" onchange="document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveEvent';document.forms[0].submit();">
            <option value=""></option>
            <?php $_from = $this->_tpl_vars['REGISTERTPLS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['THEME'] => $this->_tpl_vars['TPLS']):
?>
                <?php $_from = $this->_tpl_vars['TPLS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TPL']):
?>
                    <option value="<?php echo $this->_tpl_vars['TPL']; ?>
" <?php if ($this->_tpl_vars['EVENT']['registertpl'] == $this->_tpl_vars['TPL']): ?>selected="selected"<?php endif; ?> <?php if ($this->_tpl_vars['THEME'] != 'default'): ?>style="background-color: rgb(56, 255, 24);"<?php endif; ?>>
                        <?php echo $this->_tpl_vars['TPL']; ?>
 <?php if ($this->_tpl_vars['THEME'] != 'default'): ?>(<?php echo $this->_tpl_vars['THEME']; ?>
)<?php endif; ?>
                    </option>
                <?php endforeach; endif; unset($_from); ?>
            <?php endforeach; endif; unset($_from); ?>
        </select>
    </td>
</tr>

</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/timed.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_delete_image" value="" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.events/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>