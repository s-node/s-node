<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/overview.tpl', 6, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/overview.tpl', 67, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/overview.tpl', 19, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.thememanager/admin/overview.tpl', 43, false),)), $this); ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" name="themes">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header">
   <span class="title_light"><?php echo ((is_array($_tmp='Theme')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>: <span class="title"><?php echo $_SESSION['theme']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="16">&nbsp;</td>
   <td class="table_header" colspan="2"><?php echo ((is_array($_tmp='Name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['INSTALLED']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PACKAGE']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td class="row"><a href="javascript:document.forms['themes'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value='<?php echo $this->_tpl_vars['PACKAGE']['id']; ?>
';document.forms['themes'].submit();"><?php if ($this->_tpl_vars['OPEN'] == $this->_tpl_vars['PACKAGE']['id']): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/minus.gif" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/plus.gif" alt="" /><?php endif; ?></a></td>
   <td class="button" width="20"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/box_software.png" alt="" /></td>
   <td class="row" style="padding-left: 0px;"><a href="javascript:document.forms['themes'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open.value='<?php echo $this->_tpl_vars['PACKAGE']['id']; ?>
';document.forms['themes'].submit();"><span title="<?php echo $this->_tpl_vars['PACKAGE']['package']; ?>
"><?php echo $this->_tpl_vars['PACKAGE']['package']; ?>
 <i><?php echo $this->_tpl_vars['PACKAGE']['title']; ?>
</i>&nbsp;</span></a></td>
  </tr>
  <?php $_from = $this->_tpl_vars['MODULES'][$this->_tpl_vars['PACKAGE']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MODULE']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td colspan="3">
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="row" width="10" style="padding-left: 30px;"><a href="javascript:document.forms['themes'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open_module.value='<?php echo $this->_tpl_vars['MODULE']['module']; ?>
';document.forms['themes'].submit();"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" width="9"/></a></td>
      <td class="button" width="20"><?php if ($this->_tpl_vars['OPEN_MODULE'] == $this->_tpl_vars['MODULE']['module']): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder_closed.png" alt="" /><?php endif; ?></td>
      <td class="row" style="padding-left: 0px;"><a href="javascript:document.forms['themes'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_open_module.value='<?php echo $this->_tpl_vars['MODULE']['module']; ?>
';document.forms['themes'].submit();"><span title="<?php echo $this->_tpl_vars['MODULE']['module']; ?>
"> <b><?php echo $this->_tpl_vars['MODULE']['module']; ?>
</b> <i><?php echo $this->_tpl_vars['MODULE']['title']; ?>
</i>&nbsp;</span></a></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php $_from = $this->_tpl_vars['THEMED_TEMPLATES'][$this->_tpl_vars['MODULE']['module']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TEMPLATE']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td colspan="3">
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="button" width="20" style="padding-left: <?php echo $this->_tpl_vars['TEMPLATE']['level']*25+50; ?>
px"><?php if ($this->_tpl_vars['TEMPLATE']['isFolder'] != 1): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pens.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif; ?></td>
      <td class="row" style="padding-left: 0px;"><span title="<?php echo $this->_tpl_vars['MODULE']['module']; ?>
"><?php echo $this->_tpl_vars['TEMPLATE']['title']; ?>
&nbsp;</span><span style="color: #999999;">(themed)</span></td>
      <td class="button" width="60" align="right"><?php if ($this->_tpl_vars['TEMPLATE']['isFolder'] != 1):  echo actionIcon(array('action' => 'deleteTemplate','icon' => "delete.png",'form' => 'themes','path' => $this->_tpl_vars['TEMPLATE']['path'],'title' => 'Delete template','ask' => "Are you sure, you want to delete this Template?"), $this); echo actionIcon(array('action' => 'editThemedTemplate','icon' => "pencil.png",'form' => 0,'path' => $this->_tpl_vars['TEMPLATE']['path'],'title' => 'Edit template','target' => 'slave1'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php $_from = $this->_tpl_vars['DEFAULT_TEMPLATES'][$this->_tpl_vars['MODULE']['module']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TEMPLATE']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
   <td colspan="3">
    <table cellspacing="0" cellpadding="0" width="100%">
     <tr>
      <td class="button" width="20" style="padding-left: <?php echo $this->_tpl_vars['TEMPLATE']['level']*25+50; ?>
px"><?php if ($this->_tpl_vars['TEMPLATE']['isFolder'] != 1): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/pens.png" alt="" /><?php else: ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/explorer/folder.png" alt="" /><?php endif; ?></td>
      <td class="row" style="padding-left: 0px;"><span title="<?php echo $this->_tpl_vars['MODULE']['module']; ?>
"><span style="color: #999999;"><?php echo ((is_array($_tmp='Default')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <?php echo ((is_array($_tmp=$this->_tpl_vars['TEMPLATE']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 26, "...", true) : smarty_modifier_truncate($_tmp, 26, "...", true)); ?>
&nbsp;</span></td>
      <td class="button" width="60" align="right"><?php if ($this->_tpl_vars['TEMPLATE']['isFolder'] != 1):  echo actionIcon(array('action' => 'editDefaultTemplate','icon' => "pencil.png",'form' => 0,'path' => $this->_tpl_vars['TEMPLATE']['path'],'title' => 'Edit template','target' => 'slave1'), $this); else:  echo $this->_tpl_vars['ICONSPACER'];  endif; ?></td>
     </tr>
    </table>
   </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>
</table>
<br />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_path" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_open_module" />
</form>