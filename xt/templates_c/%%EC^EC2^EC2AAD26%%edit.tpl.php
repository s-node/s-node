<?php /* Smarty version 2.6.9, created on 2011-01-21 10:38:40
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/edit.tpl', 10, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/edit.tpl', 160, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/edit.tpl', 168, false),array('function', 'actionPopUp', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/edit.tpl', 181, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/edit.tpl', 190, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.addressmanager/admin/edit.tpl', 267, false),)), $this); ?>
<script language="JavaScript"><!--
window.parent.frames['master'].document.forms[1].submit();
//-->
</script>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" name="edit" onSubmit="window.document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value= window.pageYOffset;">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%" summary="">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Address')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <span class="title">
   <?php if ($this->_tpl_vars['DATA']['type'] == 3): ?>
   <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/user.png" alt="<?php echo ((is_array($_tmp='Person')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/> <?php echo $this->_tpl_vars['DATA']['lastName']; ?>
 <?php echo $this->_tpl_vars['DATA']['firstName']; ?>

   <?php endif; ?>
   <?php if ($this->_tpl_vars['DATA']['type'] == 1): ?>
   <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/factory.png" alt="<?php echo ((is_array($_tmp='Company')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/> <?php echo $this->_tpl_vars['DATA']['title']; ?>

   <?php endif; ?>
   <?php if ($this->_tpl_vars['DATA']['type'] == 2): ?>
   <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/member2.png" alt="<?php echo ((is_array($_tmp='Department')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
"/> <?php echo $this->_tpl_vars['DATA']['title']; ?>

   <?php endif; ?>
   </span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Address type')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <?php echo ((is_array($_tmp='Typ')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_type" onchange="document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='save';document.forms['edit'].submit();">
     <?php $_from = $this->_tpl_vars['ADDRESSTYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TYPEKEY'] => $this->_tpl_vars['TYPE']):
?>
           <option value="<?php echo $this->_tpl_vars['TYPEKEY']; ?>
" <?php if ($this->_tpl_vars['DATA']['type'] == $this->_tpl_vars['TYPEKEY'] || ( $this->_tpl_vars['DATA']['type'] == 0 && $this->_tpl_vars['TYPEKEY'] == 3 )): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['TYPE'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
   </select>
   <?php echo ((is_array($_tmp='Status')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_status">
     <?php $_from = $this->_tpl_vars['ADDRESSSTATES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TYPEKEY'] => $this->_tpl_vars['TYPE']):
?>
           <option value="<?php echo $this->_tpl_vars['TYPEKEY']; ?>
" <?php if ($this->_tpl_vars['DATA']['status'] == $this->_tpl_vars['TYPEKEY']): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['TYPE'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <?php endforeach; endif; unset($_from); ?>

    </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Display name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo $this->_tpl_vars['DATA']['title']; ?>
" size="42" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='First name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 / <?php echo ((is_array($_tmp='Last name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_gender">
  <option value="0" <?php if ($this->_tpl_vars['DATA']['gender'] == 0): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='unknown')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  <option value="1" <?php if ($this->_tpl_vars['DATA']['gender'] == 1): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Mr.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  <option value="2" <?php if ($this->_tpl_vars['DATA']['gender'] == 2): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Mrs.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
  </select> <input id="firstName" type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_firstName" value="<?php echo $this->_tpl_vars['DATA']['firstName']; ?>
" size="11"/>&nbsp;<input id="lastName" type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lastName" value="<?php echo $this->_tpl_vars['DATA']['lastName']; ?>
" size="13"/></td>
 </tr>
 <?php if ($this->_tpl_vars['DATA']['type'] != 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Company')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_organization" value="<?php echo $this->_tpl_vars['DATA']['organization']; ?>
"  onchange="document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='save';document.forms['edit'].submit();">
   <option value="0"><?php echo ((is_array($_tmp='None')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   <?php $_from = $this->_tpl_vars['ORGANIZATIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ORGANIZATION']):
?>
   <option value="<?php echo $this->_tpl_vars['ORGANIZATION']['id']; ?>
" <?php if ($this->_tpl_vars['DATA']['organization'] == $this->_tpl_vars['ORGANIZATION']['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['ORGANIZATION']['title']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
  </select>
  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['type'] > 2 && $this->_tpl_vars['DATA']['organization'] > 0): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Department')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_organizationalUnit" value="<?php echo $this->_tpl_vars['DATA']['organizationalUnit']; ?>
" <?php if ($this->_tpl_vars['DATA']['type'] == '1'): ?>disabled<?php endif; ?>>
   <option value="0"><?php echo ((is_array($_tmp='None')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   <?php $_from = $this->_tpl_vars['DEPARTMENTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['DEPARTMENT']):
?>
   <option value="<?php echo $this->_tpl_vars['DEPARTMENT']['id']; ?>
" <?php if ($this->_tpl_vars['DATA']['organizationalUnit'] == $this->_tpl_vars['DEPARTMENT']['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['DEPARTMENT']['title']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
  </select>
  </td>
 </tr>
 <?php endif;  if ($this->_tpl_vars['DATA']['type'] > 2): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Position')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" value="<?php echo $this->_tpl_vars['DATA']['position']; ?>
" size="42" <?php if ($this->_tpl_vars['DATA']['type'] == '1' || $this->_tpl_vars['DATA']['type'] == '2'): ?>disabled<?php endif; ?>/></td>
 </tr>
<?php endif; ?>

 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Street')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_street" value="<?php echo $this->_tpl_vars['DATA']['street']; ?>
" size="42" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Postal code')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 / <?php echo ((is_array($_tmp='City')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_postalCode" value="<?php echo $this->_tpl_vars['DATA']['postalCode']; ?>
" size="8" />
   <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_city" value="<?php echo $this->_tpl_vars['DATA']['city']; ?>
" size="30" />
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Country')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_country" onchange="document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='save';document.forms['edit'].submit();">
   <?php $_from = $this->_tpl_vars['COUNTRIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['COUNTRY']):
?>
   <option value="<?php echo $this->_tpl_vars['COUNTRY']['country']; ?>
" <?php if ($this->_tpl_vars['COUNTRY']['country'] == $this->_tpl_vars['DATA']['country']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['COUNTRY']['name']; ?>
   (<?php echo $this->_tpl_vars['COUNTRY']['country']; ?>
)</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Region')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_state">
   <option value="0"><?php echo ((is_array($_tmp='None')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   <?php $_from = $this->_tpl_vars['REGIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['REGION']):
?>
   <option value="<?php echo $this->_tpl_vars['REGION']['region']; ?>
" <?php if ($this->_tpl_vars['REGION']['region'] == $this->_tpl_vars['DATA']['state']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['REGION']['name']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp='Website')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_website" value="<?php echo $this->_tpl_vars['DATA']['website']; ?>
" size="42" /></td>
  </tr>
   <tr>
   <td class="left"><?php echo ((is_array($_tmp='Skype')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_skype" value="<?php echo $this->_tpl_vars['DATA']['skype']; ?>
" size="42" /></td>
  </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp="E-Mail")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_email" value="<?php echo $this->_tpl_vars['DATA']['email']; ?>
" size="42" /></td>
  </tr>

  <tr>
   <td class="left"><?php echo ((is_array($_tmp='Telephone')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tel" value="<?php echo $this->_tpl_vars['DATA']['tel']; ?>
" size="20" />
   <?php if ($this->_tpl_vars['DATA']['tel'] != ''): ?><a href="callto://<?php echo $this->_tpl_vars['DATA']['tel']; ?>
"><img src="images/icons/telephone.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php else: ?><img src="images/icons/telephone_na.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php endif; ?>
   </td>
  </tr>

  <tr>
   <td class="left"><?php echo ((is_array($_tmp='Mobile')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tel_mobile" value="<?php echo $this->_tpl_vars['DATA']['tel_mobile']; ?>
" size="20" />
   <?php if ($this->_tpl_vars['DATA']['tel_mobile'] != ''): ?><a href="callto://<?php echo $this->_tpl_vars['DATA']['tel_mobile']; ?>
"><img src="images/icons/telephone.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php else: ?><img src="images/icons/telephone_na.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php endif; ?>
   </td>
  </tr>

  <tr>
   <td class="left"><?php echo ((is_array($_tmp='Fax')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_fax" value="<?php echo $this->_tpl_vars['DATA']['fax']; ?>
" size="20" />
   <?php if ($this->_tpl_vars['DATA']['fax'] != ''): ?><a href="callto://<?php echo $this->_tpl_vars['DATA']['fax']; ?>
"><img src="images/icons/telephone.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php else: ?><img src="images/icons/telephone_na.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php endif; ?>
   </td>
  </tr>

<?php if ($this->_tpl_vars['DATA']['type'] > 2): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Birthdate')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_birthdate_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_birthdate_str" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['birthdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
" size="12" />
  <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_birthdate" value="<?php echo $this->_tpl_vars['DATA']['birthdate']; ?>
" />
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'birthdate_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </td>
 </tr>
 <?php endif; ?>
   <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'description'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" rows="4" cols="65"><?php echo $this->_tpl_vars['DATA']['description']; ?>
</textarea></td>
 </tr>

  <tr>
   <td class="left"><?php echo ((is_array($_tmp="Public (indexed)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"> <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_public" value="0" <?php if ($this->_tpl_vars['DATA']['public'] == 0): ?>checked="checked<?php endif; ?>" /><?php echo ((is_array($_tmp='no')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_public" value="1" <?php if ($this->_tpl_vars['DATA']['public'] == 1): ?>checked="checked"<?php endif; ?> /><?php echo ((is_array($_tmp='yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

   </td>
  </tr>

  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
<a name="image" /></td>
  <td class="right"><?php echo actionPopUp(array('icon' => "pick_photo.png",'title' => ((is_array($_tmp='Pick an image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)),'TPL' => $this->_tpl_vars['IMAGE_PICKER_TPL'],'BASEID' => $this->_tpl_vars['IMAGE_PICKER_BASE_ID'],'fieldBaseId' => $this->_tpl_vars['BASEID'],'fieldName' => 'image','form' => 'edit','name' => 'picker','anker' => 'image'), $this); echo actionIcon(array('action' => 'deleteImage','icon' => "delete.png",'form' => 'edit','title' => 'Delete Image','ask' => 'Are you sure that you want to delete this image','id' => $this->_tpl_vars['DATA']['id']), $this);?>
<br />
   <?php if ($this->_tpl_vars['DATA']['image'] < 1): ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" />
   <?php else: ?>
   <img name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_view" src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['DATA']['image']; ?>
&amp;file_version=1" alt="" class="picked" />
   <?php endif; ?>
  </td>
 </tr>

<?php if ($this->_tpl_vars['DISPLAY']['relations']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['DATA']['id'],'ctitle' => $this->_tpl_vars['DATA']['title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>




 
 <?php if ($this->_tpl_vars['DATA']['type'] > 2): ?>
 <tr>
  <td class="view_header" colspan="2"><span class="title_light"><?php echo ((is_array($_tmp='Private Adressangaben')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span></td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp="E-Mail (Private)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_email_private" value="<?php echo $this->_tpl_vars['DATA']['email_private']; ?>
" size="42" /></td>
  </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp="Telephone (Private)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tel_private" value="<?php echo $this->_tpl_vars['DATA']['tel_private']; ?>
" size="20" />
   <?php if ($this->_tpl_vars['DATA']['tel_private'] != ''): ?><a href="callto://<?php echo $this->_tpl_vars['DATA']['tel_private']; ?>
"><img src="images/icons/telephone.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php else: ?><img src="images/icons/telephone_na.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php endif; ?>
   </td>
  </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp="Mobile (Private)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tel_mobile_private" value="<?php echo $this->_tpl_vars['DATA']['tel_mobile_private']; ?>
" size="20" />
   <?php if ($this->_tpl_vars['DATA']['tel_mobile_private'] != ''): ?><a href="callto://<?php echo $this->_tpl_vars['DATA']['tel_mobile_private']; ?>
"><img src="images/icons/telephone.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php else: ?><img src="images/icons/telephone_na.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php endif; ?>
   </td>
  </tr>
   <tr>
   <td class="left"><?php echo ((is_array($_tmp="Fax (Private)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_fax_private" value="<?php echo $this->_tpl_vars['DATA']['fax_private']; ?>
" size="20" />
   <?php if ($this->_tpl_vars['DATA']['fax_private'] != ''): ?><a href="callto://<?php echo $this->_tpl_vars['DATA']['fax_private']; ?>
"><img src="images/icons/telephone.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a><?php else: ?><img src="images/icons/telephone_na.png" style="padding-left: 5px; vertical-align: middle;" alt="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /><?php endif; ?>
   </td>
  </tr>
  <?php endif; ?>




<?php if ($this->_tpl_vars['DISPLAY']['properties']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['DATA']['id'],'content_type' => $this->_tpl_vars['BASEID'],'formname' => 'edit','universal' => $this->_tpl_vars['DISPLAY']['properties_universal'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </table>


<?php if ($this->_tpl_vars['DISPLAY']['time']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/timed.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>



<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['DATA']['image']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['DATA']['image_version']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="<?php echo $this->_tpl_vars['DATA']['id']; ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'],'withouthidden' => true,'yoffset' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo yoffset(array(), $this);?>

</form>