<?php /* Smarty version 2.6.9, created on 2011-01-21 10:31:07
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 12, false),array('modifier', 'htmlspecialchars', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 23, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 77, false),array('function', 'toggle_editor', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 27, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 52, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 54, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 77, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 85, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.banner/admin/editZone.tpl', 91, false),)), $this); ?>
<?php echo '
<script language="JavaScript"><!--
window.parent.frames[\'master\'].document.forms[1].submit();
//-->
</script>
'; ?>


<form method="POST">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Zone')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span> <span class="title"><?php echo $this->_tpl_vars['ZONE']['title']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_title" size="42" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['ZONE']['title'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
"></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><?php echo toggle_editor(array('id' => 'description'), $this);?>

  <textarea id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_description" rows="4" cols="65"><?php echo $this->_tpl_vars['ZONE']['description']; ?>
</textarea></td>
 </tr>
</table>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Banner')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS_BANNER'],'withouthidden' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="50"><?php echo ((is_array($_tmp='CTR')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="50"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="50"><?php echo ((is_array($_tmp='Clicks')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>

 </tr>
 <?php $_from = $this->_tpl_vars['BANNERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['BANNER']):
?>
 <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
  <td class="button" valign="top" width="80"><?php if ($this->_tpl_vars['BANNER']['timer'] == 'ready'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_pause.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['BANNER']['timer'] == 'expired'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_stop.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['BANNER']['timer'] == 'running'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/alarmclock_run.png" alt="" width="16" /><?php endif;  if ($this->_tpl_vars['BANNER']['timer'] == 'unused'): ?><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" width="16" /><?php endif; ?>
  <?php if ($this->_tpl_vars['BANNER']['active'] == 0):  echo actionIcon(array('action' => 'activateBannerInZone','icon' => "inactive.png",'title' => 'Activate this banner for this zone','form' => '0','banner_id' => $this->_tpl_vars['BANNER']['id']), $this); else:  echo actionIcon(array('action' => 'deactivateBannerInZone','icon' => "active.png",'title' => 'Deactivate this banner for this zone','form' => '0','banner_id' => $this->_tpl_vars['BANNER']['id']), $this); endif;  echo actionIcon(array('action' => 'editBanner','form' => '0','icon' => "pencil.png",'banner_id' => $this->_tpl_vars['BANNER']['id'],'title' => 'Edit this banner'), $this); echo actionIcon(array('action' => 'deleteBannerFromZone','form' => '0','icon' => "delete.png",'banner_id' => $this->_tpl_vars['BANNER']['id'],'zone_id' => $this->_tpl_vars['ZONE']['id'],'title' => 'Delete banner from this zone','ask' => "Are you sure you want to delete this banner link?"), $this);?>
</td>
  <td class="row" valign="top"><?php echo actionLink(array('action' => 'editBanner','form' => '0','banner_id' => $this->_tpl_vars['BANNER']['id'],'text' => ((is_array($_tmp=$this->_tpl_vars['BANNER']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true))), $this);?>
&nbsp;<br />
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_banner_id=<?php echo $this->_tpl_vars['BANNER']['id']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_action=editBanner">
  <?php if ($this->_tpl_vars['BANNER']['image_type'] == 2): ?>
  <div style="border: 1px solid black; margin-top: 5px; width: 200px;">
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['BANNER']['width'],'height' => $this->_tpl_vars['BANNER']['height']), $this);?>
">
   <param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['BANNER']['image']; ?>
" />
   <param name="quality" value="high" />
   <embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['BANNER']['image']; ?>
" quality="high" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['BANNER']['width'],'height' => $this->_tpl_vars['BANNER']['height']), $this);?>
" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
  </object>
  </div>
  <?php else:  echo image(array('id' => $this->_tpl_vars['BANNER']['image'],'version' => 0,'title' => $this->_tpl_vars['BANNER']['title'],'alt' => $this->_tpl_vars['BANNER']['title'],'style' => "border: 1px solid black; margin-top: 5px;"), $this); endif; ?>
  </a></td>
  <td class="row" valign="top"><?php echo $this->_tpl_vars['BANNER']['ctr']; ?>
&nbsp;%&nbsp;</td>
  <td class="row" valign="top"><?php echo $this->_tpl_vars['BANNER']['views']; ?>
&nbsp;</td>
  <td class="row" valign="top"><?php echo $this->_tpl_vars['BANNER']['clicks']; ?>
&nbsp;</td>

 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Banner code')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="4"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Code for external sites')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <textarea  rows="20" cols="65" readonly="readonly" id="BannerCode">
<script language='JavaScript' type='text/javascript'>
<!--
   AdsRandom = new String (Math.random()); AdsRandom = AdsRandom.substring(2,11);
   document.write ("<" + "script language='JavaScript' type='text/javascript' src='");
   document.write ("http://<?php echo $_SERVER['SERVER_NAME']; ?>
/index.php?TPL=302&amp;random=" + AdsRandom);
   document.write ("&amp;zonename=<?php echo $this->_tpl_vars['ZONE']['title']; ?>
");
   document.write ("'><" + "/script>");
//-->
</script>
 </textarea></td>
 </tr>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_zone_id" value="<?php echo $this->_tpl_vars['ZONE']['id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_banner_id" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/editor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>