<?php /* Smarty version 2.6.9, created on 2011-01-24 10:45:12
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/edit.tpl', 25, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/edit.tpl', 26, false),array('modifier', 'htmlentities', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/edit.tpl', 67, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/edit.tpl', 308, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/edit.tpl', 60, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/edit.tpl', 349, false),)), $this); ?>
<script language="JavaScript" type="text/javascript"><!--
window.parent.frames['master'].document.forms[1].module.value='oa';
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
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_module=e" method="post" name="edit" onSubmit="window.document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
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
" style="font-weight: bold;" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Pagetitle')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_pagetitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['pagetitle'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" style="font-weight: bold;" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='ID')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="10" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_new_id" value="<?php echo $this->_tpl_vars['DATA']['node_id']; ?>
" disabled /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Template')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <?php if (sizeof ( $this->_tpl_vars['LANGS'] ) > 1): ?>
  <input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_join" <?php if ($this->_tpl_vars['DATA']['tpl_join']): ?>checked="checked"<?php endif; ?> id="joined" onchange="switchjoin();" /> <label for="joined"><?php echo ((is_array($_tmp='Joined')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 </label> 
  
  <script>
  var id = <?php echo $this->_tpl_vars['DATA']['node_id']; ?>
;
  
  var lang = '<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
';
  
  <?php echo '
  function switchjoin(){
  	if($(\'#joined\').attr(\'checked\')){
  		$(\'#tplfile\').val(\'_pages/\' + id + \'.tpl\');
  	}else{
  		$(\'#tplfile\').val(\'_pages/\' + id + \'_\' + lang + \'.tpl\');
  		
  	}
  }
  </script>
  '; ?>

  <br />
  <?php endif; ?>
  <input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_file" id="tplfile" value="<?php echo $this->_tpl_vars['DATA']['tpl_file']; ?>
" />&nbsp;&nbsp;<?php echo actionIcon(array('action' => 'editTemplate','icon' => "edit_small.png",'form' => 'edit','title' => 'Edit this template'), $this);?>
</td>
 </tr>
<?php if ($this->_tpl_vars['DISPLAY']['relations']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/relations.tpl", 'smarty_include_vars' => array('cid' => $this->_tpl_vars['DATA']['node_id'],'ctitle' => ((is_array($_tmp=$this->_tpl_vars['DATA']['title'])) ? $this->_run_mod_handler('htmlentities', true, $_tmp) : htmlentities($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if ($this->_tpl_vars['DISPLAY']['properties']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/properties.tpl", 'smarty_include_vars' => array('content_id' => $this->_tpl_vars['DATA']['node_id'],'content_type' => $this->_tpl_vars['BASEID'],'formname' => 'edit','universal' => true,'lang' => $this->_tpl_vars['ACTIVE_LANG'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Target')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target">
    <option value="_self"   <?php if ($this->_tpl_vars['DATA']['target'] == '_self'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Same window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_self)</option>
    <option value="_blank"  <?php if ($this->_tpl_vars['DATA']['target'] == '_blank'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='New window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_blank)</option>
    <option value="_parent" <?php if ($this->_tpl_vars['DATA']['target'] == '_parent'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Parent window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_parent)</option>
    <option value="_top"    <?php if ($this->_tpl_vars['DATA']['target'] == '_top'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Top window')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (_top)</option>
   </select>
  </td>
 </tr>
 <!--
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Half decay period')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <input type="text" size="4" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_halflife" value="<?php echo $this->_tpl_vars['DATA']['halflife']; ?>
">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_halflife_mode">
    <option value="31536000" <?php if ($this->_tpl_vars['DATA']['halflife_mode'] == 31536000): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Years')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="2592000" <?php if ($this->_tpl_vars['DATA']['halflife_mode'] == 2592000): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Month')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="86400" <?php if ($this->_tpl_vars['DATA']['halflife_mode'] == 86400): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Days')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="3600" <?php if ($this->_tpl_vars['DATA']['halflife_mode'] == 3600): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Hours')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   </select>
  </td>
 </tr>
 -->
</table>

<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="3">
   <span class="title"><?php echo ((is_array($_tmp='Visibility')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="3"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Is this page public?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right" width="40"><input onchange="switchImage(this, 'lock','lock_open.png','lock.png');" type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_public" value="1" <?php if ($this->_tpl_vars['DATA']['public'] == 1): ?>checked<?php endif; ?>  />
   <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/lock<?php if ($this->_tpl_vars['DATA']['public'] == 1): ?>_open<?php endif; ?>.png" alt="" id="lock" />
  </td>
  <td class="right">
   <input type="button" onclick="document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='applyVisibility';document.forms['edit'].submit();" value="<?php echo ((is_array($_tmp='Apply for all subnodes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Is this page visible?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_visible" value="1" <?php if ($this->_tpl_vars['DATA']['visible'] == 1): ?>checked<?php endif; ?> />
  </td>
  <td class="right">
   <input type="button" onclick="document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='applyVisible';document.forms['edit'].submit();" value="<?php echo ((is_array($_tmp='Apply for all subnodes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
  </td>
</tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Show in overview?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_show_in_overview" value="1" <?php if ($this->_tpl_vars['DATA']['show_in_overview'] == 1): ?>checked<?php endif; ?> />
  </td>
  <td class="right">
   <input type="button" onclick="document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='applyVisibleOverview';document.forms['edit'].submit();" value="<?php echo ((is_array($_tmp='Apply for all subnodes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
  </td>
 </tr>
</table>


<!-- Begin Style -->
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Style')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Header')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">

  <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_header">
   <?php $_from = $this->_tpl_vars['USERTPL']['HEADERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['avTPL'] => $this->_tpl_vars['avTPLTheme']):
?>
    <option <?php if ($this->_tpl_vars['avTPLTheme'] != 'system'): ?>style="background-color:#99FF99;"<?php endif; ?> value="<?php echo $this->_tpl_vars['avTPL']; ?>
"<?php if ($this->_tpl_vars['avTPL'] == $this->_tpl_vars['DATA']['header']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['avTPL']; ?>
  (<?php echo $this->_tpl_vars['avTPLTheme']; ?>
)</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>

  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Footer')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
    <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_footer">
   <?php $_from = $this->_tpl_vars['USERTPL']['FOOTERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['avTPL'] => $this->_tpl_vars['avTPLTheme']):
?>
    <option <?php if ($this->_tpl_vars['avTPLTheme'] != 'system'): ?>style="background-color:#99FF99;"<?php endif; ?> value="<?php echo $this->_tpl_vars['avTPL']; ?>
"<?php if ($this->_tpl_vars['avTPL'] == $this->_tpl_vars['DATA']['footer']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['avTPL']; ?>
  (<?php echo $this->_tpl_vars['avTPLTheme']; ?>
)</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
   </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='CSS')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_css" value="<?php echo $this->_tpl_vars['DATA']['css']; ?>
" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Apply style informations for all subsites.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <input type="button" onclick="document.forms['edit'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='applyStyle';document.forms['edit'].submit();" value="<?php echo ((is_array($_tmp='Apply for all subnodes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" />
  </td>
 </tr>
</table>
<!-- End Style -->



<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Meta information')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><textarea cols="50" rows="3" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description"><?php echo $this->_tpl_vars['DATA']['description']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Keywords')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><textarea cols="50" rows="3" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_keywords"><?php echo $this->_tpl_vars['DATA']['keywords']; ?>
</textarea></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Author')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_author" value="<?php echo $this->_tpl_vars['DATA']['author']; ?>
" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Copyright statement')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_copyright" value="<?php echo $this->_tpl_vars['DATA']['copyright']; ?>
" /></td>
 </tr>
  <tr>
  <td class="left"><?php echo ((is_array($_tmp='Revisit after')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_revisit_after" value="<?php echo $this->_tpl_vars['DATA']['revisit_after']; ?>
" /></td>
 </tr>
</table>



<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Apache Rewrite')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
  <tr>
  <td class="left">ApacheModRewrite</td>
  <td class="right"><input type="text" size="42" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_rewrite_name" value="<?php echo $this->_tpl_vars['DATA']['rewrite_name']; ?>
" /></td>
 </tr>
</table>
<!-- Contents designer -->
<table cellpadding="0" cellspacing="0" border="0" width="100%">
  <tr>
  <td class="view_header" colspan="3">
   <span class="title"><?php echo ((is_array($_tmp='Contents')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="3"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['CONTENTS_BUTTONS'],'withouthidden' => '1','yoffset' => 'true')));
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
    <td class="left"><?php if ($this->_tpl_vars['PACKAGE']['active'] == 0):  echo actionIcon(array('action' => 'activateContent','icon' => "inactive.png",'form' => 'edit','title' => 'Activate this content','entry_id' => $this->_tpl_vars['PACKAGE']['id']), $this); else:  echo actionIcon(array('action' => 'deactivateContent','icon' => "active.png",'form' => 'edit','title' => 'Deactivate this content','entry_id' => $this->_tpl_vars['PACKAGE']['id']), $this); endif;  echo actionIcon(array('action' => 'editContent','icon' => "pencil.png",'form' => 'edit','title' => 'Edit this content','entry_id' => $this->_tpl_vars['PACKAGE']['id'],'entry_position' => $this->_tpl_vars['PACKAGE']['position']), $this); echo actionIcon(array('action' => 'deleteContent','icon' => "delete.png",'form' => 'edit','title' => 'Delete this content','ask' => "Do you really want to delete this entry?",'entry_id' => $this->_tpl_vars['PACKAGE']['id']), $this); if (! ($this->_foreach['A']['iteration'] <= 1)):  echo actionIcon(array('action' => 'moveUpContent','icon' => "explorer/arrow_up_green.png",'form' => 'edit','title' => 'Move this content up','entry_id' => $this->_tpl_vars['PACKAGE']['id'],'entry_pos' => $this->_tpl_vars['PACKAGE']['position']), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif;  if (! ($this->_foreach['A']['iteration'] == $this->_foreach['A']['total'])):  echo actionIcon(array('action' => 'moveDownContent','icon' => "explorer/arrow_down_green.png",'form' => 'edit','title' => 'Move this content down','entry_id' => $this->_tpl_vars['PACKAGE']['id'],'entry_pos' => $this->_tpl_vars['PACKAGE']['position']), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?></td>
    <td class="right" width="100"><?php echo $this->_tpl_vars['PACKAGE']['title']; ?>
</td>
    <td class="right" align="right"><?php echo $this->_tpl_vars['PACKAGE']['params']; ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<!-- Contents desigenr -->



<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Site information')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='ID')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo $this->_tpl_vars['DATA']['node_id']; ?>
</td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Author')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo $this->_tpl_vars['DATA']['creation_user']; ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_creation_user" value="<?php echo $this->_tpl_vars['DATA']['c_user']; ?>
" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Creation date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['creation_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I:%S") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I:%S")); ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_creation_date" value="<?php echo $this->_tpl_vars['DATA']['creation_date']; ?>
" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Last Modifier')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo $this->_tpl_vars['DATA']['mod_user']; ?>
</td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Last Modification date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['DATA']['mod_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I:%S") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I:%S")); ?>
</td>
 </tr>
</table>

<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_ext_link" value="<?php echo $this->_tpl_vars['DATA']['ext_link']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_blank" value="<?php echo $this->_tpl_vars['DATA']['blank']; ?>
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
_entry_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_pos" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_field" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_based_on_tpl" value="<?php echo $this->_tpl_vars['DATA']['based_on_tpl']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target_module" value="" />
<input type="hidden" name="TPL" value="<?php echo $this->_tpl_vars['TPL']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<?php echo yoffset(array(), $this);?>

</form>