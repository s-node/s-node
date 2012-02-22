<?php /* Smarty version 2.6.9, created on 2011-01-24 09:53:19
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'subplugin', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl', 4, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl', 28, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl', 126, false),array('function', 'get_config', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl', 166, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl', 92, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl', 109, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/picker/default.tpl', 122, false),)), $this); ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td colspan="3" class="toolbar" style="padding: 5px; height: 1px;">
  <?php echo load_subplugin(array('package' => "ch.iframe.snode.filemanager",'module' => 'upload'), $this);?>

  </td>
 </tr>
</table>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td width="200" style="padding: 5px;" valign="top">
  <form method="POST" name="picker">
   <table cellspacing="0" cellpadding="0" width="100%" style="background-color: #FFFFFF; border: 1px solid #7F9DB9;">
    <tr>
     <td valign="top">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <table cellspacing="0" cellpadding="0" width="100%">
      <?php $_from = $this->_tpl_vars['NODES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NODE']):
?>
      <tr>
       <td>
        <table cellspacing="0" cellpadding="0" width="100%">
         <tr>
          <td class="row" style="padding-left: <?php echo $this->_tpl_vars['NODE']['level']*20-32; ?>
px; width: 1px;"><?php if ($this->_tpl_vars['NODE']['subs'] > 0):  if ($this->_tpl_vars['NODE']['itw']): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /><?php endif;  else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="9" /><?php endif; ?></td>
          <td class="row" style="padding: 5px; padding-left: 0px; padding-right: 0px;width: 16px">
           <a href="javascript:document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms[1].submit();"><?php if ($this->_tpl_vars['NODE']['itw']):  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif;  else:  if ($this->_tpl_vars['NODE']['subs'] > 0): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php endif;  endif; ?></a><br />
          </td>
          <td class="row"><a href="javascript:document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms[1].submit();"><?php if ($this->_tpl_vars['NODE']['itw']): ?><span style="color: black;"><?php if ($this->_tpl_vars['NODE']['selected']): ?><b><?php echo $this->_tpl_vars['NODE']['title']; ?>
</b><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?></span><?php else:  echo $this->_tpl_vars['NODE']['title'];  endif; ?>&nbsp;</a></td>
         <?php if ($this->_tpl_vars['CTRL']): ?><td class="row" align="right">
         <?php if ($this->_tpl_vars['NODE']['id'] != 1):  echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_down_green.png",'form' => 'picker','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'after','title' => 'Insert after this folder'), $this);?>

                <?php echo actionIcon(array('action' => 'insertNode','icon' => "explorer/arrow_up_green.png",'form' => 'picker','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'before','title' => 'Insert before this folder'), $this);?>

                <?php endif; ?>
                <?php echo actionIcon(array('action' => 'insertNode','icon' => "explorer/folder_into.png",'form' => 'picker','node_perm' => 'addFiles','node_pid' => $this->_tpl_vars['NODE']['pid'],'node_id' => $this->_tpl_vars['NODE']['id'],'position' => 'into','title' => 'Insert into this node'), $this);?>

         
         </td><?php else: ?>
         <td class="row" align="right">
          <a href="javascript:document.forms['picker'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';document.forms['picker'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['NODE']['id']; ?>
;document.forms['picker'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pencil.png" alt="" /></a>
         </td><?php endif; ?>
         </tr>
        </table>
       </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?>
      </table>
      <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_filename" value="<?php echo $this->_tpl_vars['SELECTED']['filename']; ?>
"/>
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by" value="<?php echo $this->_tpl_vars['ORDER_BY']; ?>
" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir" value="<?php echo $this->_tpl_vars['ORDER_BY_DIR']; ?>
"/>
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['ANODE']['active']; ?>
" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['ANODE']['image']; ?>
" />
		<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['ANODE']['image_version']; ?>
" />
      </form>
      
     <img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="200" height="10" />
     </td>
    </tr>
   </table>
  </td>
  <td width="340" style="padding: 5px; padding-left: 0px;" valign="top">
   <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%; background-color: #FFFFFF; border: 1px solid #DDDDDD;">
    <tr>
     <td valign="top" valign="top">
     <div style="background-image: url(<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/gfx/table_header.gif); height:20px;">
	<?php echo ((is_array($_tmp='Sort by')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
		<select onchange="document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value=this.options[this.selectedIndex].value;document.forms[1].submit();">
			<option value="det.title" <?php if ($this->_tpl_vars['ORDER_BY'] == "det.title"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
			<option value="b.filesize" <?php if ($this->_tpl_vars['ORDER_BY'] == "b.filesize"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Size')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
			<option value="b.upload_date" <?php if ($this->_tpl_vars['ORDER_BY'] == "b.upload_date"): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
		</select>
		&nbsp;
		<select onchange="document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value=this.options[this.selectedIndex].value;document.forms[1].submit();">
			<option value="asc" <?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'asc'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='asc')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
			<option value="desc" <?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'desc'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='desc')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
		</select>
	</div>
      <?php $_from = $this->_tpl_vars['FILES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['F'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['F']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['FILE']):
        $this->_foreach['F']['iteration']++;
?>
      <div style="padding: 3px;cursor: hand; cursor: pointer; background-image: url(<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/filetypes/image_big.png); margin: 2px; float: left; border: 1px solid #DDDDDD;" onClick="document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id.value='<?php echo $this->_tpl_vars['FILE']['id']; ?>
';document.forms[1].submit();"><?php if ($this->_tpl_vars['FILE']['type'] == 1): ?><img src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
&file_name=<?php echo $this->_tpl_vars['FILE']['title']; ?>
&file_version=cube" alt="<?php echo $this->_tpl_vars['FILE']['title']; ?>
" title="<?php echo $this->_tpl_vars['FILE']['title']; ?>
" width="80" height="80" /><?php endif;  if ($this->_tpl_vars['FILE']['type'] == 2): ?><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="80" height="80">
       <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
" />
       <param name="quality" value="high" />
       <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
" quality="high" width="80" height="80" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
      </object><?php endif; ?><div style="color: #999999; padding-left: 3px;"><?php if ($this->_tpl_vars['FILE']['title'] != ""):  echo ((is_array($_tmp=$this->_tpl_vars['FILE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14, "...", true) : smarty_modifier_truncate($_tmp, 14, "...", true));  else:  echo ((is_array($_tmp=$this->_tpl_vars['FILE']['filename'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 14, "...", true) : smarty_modifier_truncate($_tmp, 14, "...", true));  endif; ?></div>
        </div>
      <?php endforeach; endif; unset($_from); ?>
     </td>
    </tr>
   </table>
   <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%; background-color: #FFFFFF; border: 1px solid #DDDDDD;margin-top: 5px;">
   	<tr>
    	<td valign="top" valign="top">
    	<form method="POST" name="picker_rf">
			<table cellspacing="0" cellpadding="0" width="100%">
			  <tr>
			   <td class="left"><?php echo ((is_array($_tmp='name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
			   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ANODE']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="35"></td>
			  </tr>
			  <tr>
			   <td class="left"><?php echo ((is_array($_tmp='description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
			   <td class="right"><?php echo toggle_editor(array('id' => 'description'), $this);?>

			   <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" cols="35" rows="4"><?php echo $this->_tpl_vars['ANODE']['description']; ?>
</textarea></td>
			  </tr>
			  <tr>
			   <td class="left">&nbsp;</td>
			   <td class="right"><input type="button" name="xyz" value="<?php echo ((is_array($_tmp='rename')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" onclick="document.forms['picker_rf'].submit();"></td>
			  </tr>
			</table>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="renameFolder" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_filename" value="<?php echo $this->_tpl_vars['SELECTED']['filename']; ?>
"/>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="<?php echo $this->_tpl_vars['ANODE']['node_id']; ?>
"/>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by" value="<?php echo $this->_tpl_vars['ORDER_BY']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir" value="<?php echo $this->_tpl_vars['ORDER_BY_DIR']; ?>
"/>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['ANODE']['active']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['ANODE']['image']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['ANODE']['image_version']; ?>
" />
</form>
		</td>
     </tr>
   </table>
  </td>
  <td style="padding: 5px; padding-left: 0px;" valign="top">
  <?php if ($this->_tpl_vars['SELECTED']): ?>

      <?php if ($this->_tpl_vars['SELECTED']['type'] == 1): ?>
        <div style="border: 1px solid #DDDDDD; padding: 3px;"><img src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
&file_name=<?php echo $this->_tpl_vars['SELECTED']['title']; ?>
&file_version=3" alt="Loading... <?php echo $this->_tpl_vars['SELECTED']['title']; ?>
" /><br /><br />
            
            <?php if ($_REQUEST['tinymce'] == 1): ?>
                <a href="javascript:window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].width.value='';window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].height.value='';window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].src.value='<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
&file_version=<?php echo $this->_tpl_vars['DEFAULT_IMAGE_VERSION']; ?>
';window.opener.getImageData();window.close();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/check.png" title="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
                <?php else: ?>
                <a href="javascript:window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
.value=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
;window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
_version.value=<?php echo $this->_tpl_vars['DEFAULT_IMAGE_VERSION']; ?>
;window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
_view.src='<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
&file_version=<?php echo $this->_tpl_vars['DEFAULT_IMAGE_VERSION']; ?>
';window.close();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/check.png" title="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
                <?php endif; ?>
        </div>
        <?php echo get_config(array('assign' => 'imageVersions','name' => 'imageversions'), $this);?>


        <div style="display:block; width:100%; margin-top: 5px;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #FFFFFF; border: 1px solid #DDDDDD;">
        <?php $_from = $this->_tpl_vars['imageVersions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['versionID'] => $this->_tpl_vars['versionName']):
?>
            <tr>
                <td style="padding: 5px; border-bottom: 1px solid #DDDDDD; width: 16px;">
                <?php if ($_REQUEST['tinymce'] == 1): ?>
                <a href="javascript:window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].width.value='';window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].height.value='';window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].src.value='<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
&file_version=<?php echo $this->_tpl_vars['versionID']; ?>
';window.opener.getImageData();window.close();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/check.png" title="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
                <?php else: ?>
                <a href="javascript:window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
.value=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
;window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
_version.value=<?php echo $this->_tpl_vars['versionID']; ?>
;window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
_view.src='<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
&file_version=<?php echo $this->_tpl_vars['versionID']; ?>
';window.close();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/check.png" title="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
                <?php endif; ?>
                </td>
                <td style="padding: 5px; border-bottom: 1px solid #DDDDDD;"><?php echo $this->_tpl_vars['versionName']; ?>
</td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        </table>
        </div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['SELECTED']['type'] == 2): ?>
        <div style="border: 1px solid #DDDDDD; padding: 3px; float:left;">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="120">
            <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
" />
            <param name="quality" value="high" />
            <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
" quality="high" width="160" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
        </object></div>
        <br />
        <?php if ($_REQUEST['tinymce'] != 1): ?>
        <a href="javascript:window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
.value=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
;window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
_version.value='embed';window.opener.document.forms['<?php echo $this->_tpl_vars['PICKER_FORM']; ?>
'].<?php echo $this->_tpl_vars['PICKER_FIELD']; ?>
_view.src='<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
&file_version=embed';window.close();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/check.png" title="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp='Pick this image')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a>
      	<?php endif; ?>
     <?php endif; ?>
   <table cellspacing="0" cellpadding="0" width="100%" style="height: 100%; background-color: #FFFFFF; border: 1px solid #DDDDDD;margin-top: 5px;">
   	<tr>
    	<td valign="top" valign="top">
    		<form method="POST" name="picker_edit">
			<table cellspacing="0" cellpadding="0" width="100%">
			  <tr>
			   <td class="left"><?php echo ((is_array($_tmp='name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
			   <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_Ftitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['SELECTED']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
" size="20"></td>
			  </tr>
			  <tr>
			   <td class="left"><?php echo ((is_array($_tmp='description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
			   <td class="right"><?php echo toggle_editor(array('id' => 'Fdescription'), $this);?>

			   <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_Fdescription" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_Fdescription" cols="20" rows="4"><?php echo $this->_tpl_vars['SELECTED']['description']; ?>
</textarea></td>
			  </tr>
			  <tr>
			   <td class="left"><?php echo ((is_array($_tmp='Keywords')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
			   <td class="right">
			   <textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_Fkeywords" cols="20" rows="2"><?php echo $this->_tpl_vars['SELECTED']['keywords']; ?>
</textarea></td>
			  </tr>
			  <tr>
			   <td class="left">&nbsp;</td>
			   <td class="right"><input type="button" name="xyz" value="<?php echo ((is_array($_tmp='Save')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" onclick="document.forms['picker_edit'].submit();"></td>
			  </tr>
			</table>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="saveFilePicker" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id" value="<?php echo $this->_tpl_vars['SELECTED']['id']; ?>
"/>
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_filename" value="<?php echo $this->_tpl_vars['SELECTED']['filename']; ?>
"/>
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by" value="<?php echo $this->_tpl_vars['ORDER_BY']; ?>
" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir" value="<?php echo $this->_tpl_vars['ORDER_BY_DIR']; ?>
"/>
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_active" value="<?php echo $this->_tpl_vars['ANODE']['active']; ?>
" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image" value="<?php echo $this->_tpl_vars['ANODE']['image']; ?>
" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_image_version" value="<?php echo $this->_tpl_vars['ANODE']['image_version']; ?>
" />
			</form>
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_Fimage" value="<?php echo $this->_tpl_vars['SELECTED']['image']; ?>
" />
			<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_Ftype" value="<?php echo $this->_tpl_vars['SELECTED']['type']; ?>
" />
		</td>
     </tr>
   </table>
  <?php endif; ?>
     </td>
    </tr>
   </table>
  </td>
 </tr>
</table>
