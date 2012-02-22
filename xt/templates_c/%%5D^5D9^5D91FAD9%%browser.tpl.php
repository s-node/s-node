<?php /* Smarty version 2.6.9, created on 2011-01-21 10:13:41
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'node_perm', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 2, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 17, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 32, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 52, false),array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 11, false),array('modifier', 'icon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 30, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 31, false),array('modifier', 'format_filesize', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 46, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.filemanager/admin/browser.tpl', 49, false),)), $this); ?>
<form method="post" name="browser" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
<?php echo node_perm(array('perm' => 'addFiles','node_id' => $this->_tpl_vars['OPEN'],'node_pid' => $this->_tpl_vars['OPEN_PID'],'assign' => 'ADDPERM'), $this);?>

<?php if ($this->_tpl_vars['ADDPERM']):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BROWSER_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else: ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" />
<?php endif; ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
   <td class="table_header" style="width: 16px;">&nbsp;</td>
   <td class="table_header" onclick="document.forms['browser'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='det.title';document.forms['browser'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'ASC' && $this->_tpl_vars['ORDER_BY'] == 'det.title'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['browser'].submit();"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <?php if ($this->_tpl_vars['ORDER_BY'] == 'det.title'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
   <td class="table_header" onclick="document.forms['browser'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='b.filesize';document.forms['browser'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'ASC' && $this->_tpl_vars['ORDER_BY'] == 'b.filesize'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['browser'].submit();"><?php echo ((is_array($_tmp='Size')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <?php if ($this->_tpl_vars['ORDER_BY'] == 'b.filesize'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
   <td class="table_header" onclick="document.forms['browser'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by.value='b.upload_date';document.forms['browser'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir.value='<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'ASC' && $this->_tpl_vars['ORDER_BY'] == 'b.upload_date'): ?>DESC<?php else: ?>ASC<?php endif; ?>';document.forms['browser'].submit();"><?php echo ((is_array($_tmp='Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <?php if ($this->_tpl_vars['ORDER_BY'] == 'b.upload_date'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/header_arrow_<?php if ($this->_tpl_vars['ORDER_BY_DIR'] == 'DESC'): ?>down<?php else: ?>up<?php endif; ?>.gif" alt=""/><?php endif; ?></td>
   <td class="table_header" >&nbsp;</td>
  </tr>
 <?php if ($this->_tpl_vars['OPEN_PID'] > 0): ?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button" style="width: 16px;"><a href="javascript:document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['OPEN_PID']; ?>
;document.forms[0].submit();window.parent.frames['master'].document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['OPEN_PID']; ?>
;window.parent.frames['master'].document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_up.png" alt="" /></a></td>
  <td class="row" colspan="4"><a href="javascript:document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['OPEN_PID']; ?>
;document.forms[0].submit();window.parent.frames['master'].document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['OPEN_PID']; ?>
;window.parent.frames['master'].document.forms['o'].submit();">../</a>&nbsp;</td>
 </tr>
 <?php endif; ?>
 <?php $_from = $this->_tpl_vars['FOLDERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FOLDER']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button" style="width: 16px;"><a href="javascript:document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_pid.value=<?php echo $this->_tpl_vars['FOLDER']['pid']; ?>
;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['FOLDER']['id']; ?>
;document.forms[0].submit();window.parent.frames['master'].document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['FOLDER']['id']; ?>
;window.parent.frames['master'].document.forms['o'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /></a></td>
  <td class="row" colspan="4"><a href="javascript:document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_pid.value=<?php echo $this->_tpl_vars['FOLDER']['pid']; ?>
;document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['FOLDER']['id']; ?>
;document.forms[0].submit();window.parent.frames['master'].document.forms['o'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value=<?php echo $this->_tpl_vars['FOLDER']['id']; ?>
;window.parent.frames['master'].document.forms['o'].submit();"><?php echo $this->_tpl_vars['FOLDER']['title']; ?>
</a>&nbsp;</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
 <?php $_from = $this->_tpl_vars['FILES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FILE']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button" style="width: 16px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['FILE']['filename'])) ? $this->_run_mod_handler('icon', true, $_tmp) : icon($_tmp)); ?>
</td>
  <td class="row"><a href="javascript:window.parent.frames['slave1'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='editFile';window.parent.frames['slave1'].document.forms[0].x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id.value=<?php echo $this->_tpl_vars['FILE']['id']; ?>
;window.parent.frames['slave1'].document.forms[0].submit();"><?php echo ((is_array($_tmp=@$this->_tpl_vars['FILE']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['FILE']['filename']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['FILE']['filename'])); ?>
<br />
  <?php if ($this->_tpl_vars['FILE']['type'] == 1):  echo image(array('id' => $this->_tpl_vars['FILE']['id'],'version' => 0,'title' => $this->_tpl_vars['FILE']['title'],'alt' => $this->_tpl_vars['FILE']['title'],'style' => "margin-top: 5px; border: 1px solid black;"), $this); endif; ?>
  <!-- <?php if ($this->_tpl_vars['FILE']['type'] == 2): ?>
  <object style="margin-top: 5px;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" height="80">
   <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
&amp;date=<?php echo $this->_tpl_vars['FILE']['upload_date']; ?>
" />
   <param name="quality" value="high" />
   <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
&amp;date=<?php echo $this->_tpl_vars['FILE']['upload_date']; ?>
" quality="high" height="80" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
  </object>
  <?php endif; ?> --></a></td>
  <td class="row" width="60">
  <?php echo ((is_array($_tmp=$this->_tpl_vars['FILE']['filesize'])) ? $this->_run_mod_handler('format_filesize', true, $_tmp) : format_filesize($_tmp)); ?>

  </td>
  <td class="row" width="60">
  <?php echo ((is_array($_tmp=$this->_tpl_vars['FILE']['upload_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>

  </td>
  <td class="button" align="right" width="60">
 <?php echo actionIcon(array('action' => 'editFile','icon' => "pencil.png",'form' => '0','file_id' => $this->_tpl_vars['FILE']['id'],'node_perm' => 'editFiles','node_id' => $this->_tpl_vars['OPEN'],'node_pid' => $this->_tpl_vars['OPEN_PID'],'title' => 'Edit this file','target' => 'slave1'), $this);?>
<a href="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['FILE']['id']; ?>
&amp;date=<?php echo $this->_tpl_vars['FILE']['upload_date']; ?>
"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/download.png" alt="" class="icon" /></a><?php echo actionIcon(array('action' => 'deleteFile','icon' => "delete.png",'form' => 'browser','file_id' => $this->_tpl_vars['FILE']['id'],'node_perm' => 'deleteFiles','node_id' => $this->_tpl_vars['OPEN'],'node_pid' => $this->_tpl_vars['OPEN_PID'],'title' => 'Delete this file','ask' => "Are you sure you want to delete this file?"), $this); if ($this->_tpl_vars['CTRL'] == false): ?>
  <br /> <?php echo actionIcon(array('action' => 'cutFile','icon' => "cut.png",'form' => 'o','target' => 'master','file_id' => $this->_tpl_vars['FILE']['id'],'node_id' => $this->_tpl_vars['OPEN'],'node_perm' => 'deleteFiles','node_pid' => $this->_tpl_vars['OPEN_PID'],'title' => 'Cut this file'), $this); endif; ?>
  </td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_pid" value="<?php echo $this->_tpl_vars['OPEN_PID']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="<?php echo $this->_tpl_vars['OPEN']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_file_name" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by" value="<?php echo $this->_tpl_vars['ORDER_BY']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_order_by_dir" value="<?php echo $this->_tpl_vars['ORDER_BY_DIR']; ?>
"/>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
</form>