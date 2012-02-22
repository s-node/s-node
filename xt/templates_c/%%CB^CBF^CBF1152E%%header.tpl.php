<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from ch.iframe.snode.toolbox/viewer/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'XT_load_css', 'ch.iframe.snode.toolbox/viewer/header.tpl', 1, false),array('modifier', 'translate', 'ch.iframe.snode.toolbox/viewer/header.tpl', 8, false),array('modifier', 'alttag', 'ch.iframe.snode.toolbox/viewer/header.tpl', 72, false),)), $this); ?>
<?php echo XT_load_css(array('file' => "toolbox.css"), $this);?>

<?php echo XT_load_css(array('file' => "livetranslate.css"), $this);?>

<!-- header toolbox-->
<div id="toolboxswitcher2">
	<img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="10" height="5" alt=""/><br />
	<div class="toolboxswitcherlogo2" onclick="javascript: location.href='http://www.s-node.com';">&nbsp;</div>
	<img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="10" height="10" alt=""/><br />
	<div class="toolboxswitcherbuttons2" onclick="location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=102&amp;adminmode=1';" onmouseover="this.style.backgroundImage='url(images/admin/button_over.gif);';" onmouseout="this.style.backgroundImage='url(images/admin/button.gif);';"><?php echo ((is_array($_tmp='Struktur')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
	<div class="toolboxswitcherbuttons2" onclick="location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=120&amp;adminmode=1';" onmouseover="this.style.backgroundImage='url(images/admin/button_over.gif);';" onmouseout="this.style.backgroundImage='url(images/admin/button.gif);';"><?php echo ((is_array($_tmp='Dateien')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
	<div class="toolboxswitcherbuttons2" onclick="location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=119&amp;adminmode=1';" onmouseover="this.style.backgroundImage='url(images/admin/button_over.gif);';" onmouseout="this.style.backgroundImage='url(images/admin/button.gif);';"><?php echo ((is_array($_tmp='Artikel')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
	<div class="toolboxswitcherbuttons2" onclick="location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=118&amp;adminmode=1';" onmouseover="this.style.backgroundImage='url(images/admin/button_over.gif);';" onmouseout="this.style.backgroundImage='url(images/admin/button.gif);';"><?php echo ((is_array($_tmp='Formulare')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
	<?php echo '
	<script type="text/javascript">
		// handler for the toolbar
		function toolbarhandler() {
			if(document.getElementById(\'toolbox2\').style.display==\'inline\'){
				document.getElementById(\'toolbox2\').style.display=\'none\';
				eraseCookie(\'toolbox\');
				createCookie(\'toolbox\',\'closed\');
			}else{
				document.getElementById(\'toolbox2\').style.display=\'inline\';
				eraseCookie(\'toolbox\');
				createCookie(\'toolbox\',\'open\');
			}
		}
		function gettoolbarstate() {
			var status;
			status =  readCookie(\'toolbox\');
			if (status == null || status == \'closed\') {
				document.getElementById(\'toolbox2\').style.display=\'none\';
			} else {
				document.getElementById(\'toolbox2\').style.display=\'inline\';
			}
		}
		function livetranslatehandler() {
			if(readCookie(\'livetranslate\') == \'active\'){
				document.getElementById(\'lt\').src=\'images/icons/text.png\'
				eraseCookie(\'livetranslate\');
				createCookie(\'livetranslate\',\'inactive\');

			}else{
				document.getElementById(\'lt\').src=\'images/icons/text_marked.png\'
				eraseCookie(\'livetranslate\');
				createCookie(\'livetranslate\',\'active\');
			}
			document.toolbox.submit();
		}
		function getlivetranslatestate() {
			var status;
			status =  readCookie(\'livetranslate\');
			if (status == null || status == \'inactive\') {
				document.getElementById(\'lt\').src=\'images/icons/text.png\';
			} else {
				document.getElementById(\'lt\').src=\'images/icons/text_marked.png\';
			}
		}
	</script>
	'; ?>

	<div class="toolboxswitcherbuttons2_live" onclick="toolbarhandler();" onmouseover="this.style.backgroundImage='url(images/admin/live_edit_over.gif);';" onmouseout="this.style.backgroundImage='url(images/admin/live_edit.gif);';"><?php echo ((is_array($_tmp='Toolbox')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
	<img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" width="10" height="220" alt=""/><br />
	<div class="toolboxswitcherbuttons2" onclick="location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=126&amp;adminmode=1';" onmouseover="this.style.backgroundImage='url(images/admin/button_over.gif);';" onmouseout="this.style.backgroundImage='url(images/admin/button.gif);';"><?php echo ((is_array($_tmp='System')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
	<div class="toolboxswitcherbuttons2" onclick="location.href='<?php echo $_SERVER['PHP_SELF']; ?>
?logout=1'" onmouseover="this.style.backgroundImage='url(images/admin/button_over.gif);';" onmouseout="this.style.backgroundImage='url(images/admin/button.gif);';" ><?php echo ((is_array($_tmp='Logout')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</div>
</div>
<div id="toolboxswitcher2_end"><img src="images/admin/end.gif" alt="end"/></div>
<div id="toolbox2">
	<script type="text/javascript">gettoolbarstate();</script>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="post" name="toolbox">
	<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tab" value="" />
	<table cellspacing="0" cellpadding="0" width="100%" style="background-color: white;" summary="">
	 <tr>
	 <td class="top_head"><?php echo $this->_tpl_vars['TPL_REAL_TITLE']; ?>
</td>
	 <td class="top_head" align="right" style="padding:0px;"><a href="javascript:toolbarhandler();"><img <?php echo ((is_array($_tmp='Close')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
 src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/close.gif"/></a></td>
	 </tr>
	 <tr>
	  <td class="tab_container" style="padding: 0px; height: 22px;" valign="top" colspan="2">
	   <table cellspacing="0" cellpadding="0" align="left" summary="">
	    <tr>
	     <?php $_from = $this->_tpl_vars['TABS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['TABLOOP'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['TABLOOP']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['KEY'] => $this->_tpl_vars['TAB']):
        $this->_foreach['TABLOOP']['iteration']++;
?>
	      <?php if ($this->_tpl_vars['TAB']['visible']): ?>
	       <?php if ($this->_tpl_vars['KEY'] == $this->_tpl_vars['ACTIVE_TAB']): ?>
	       <td class="tab_active" onclick=";document.forms['toolbox'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_tab.value='<?php echo $this->_tpl_vars['KEY']; ?>
';document.forms['toolbox'].submit();"><?php echo $this->_tpl_vars['TAB']; ?>
</td>
	       <?php else: ?>
	        <td class="tab" onclick=";document.forms['toolbox'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_tab.value='<?php echo $this->_tpl_vars['KEY']; ?>
';document.forms['toolbox'].submit();"><?php echo $this->_tpl_vars['TAB']; ?>
</td>
	       <?php endif; ?>
	      <?php endif; ?>
	     <?php endforeach; endif; unset($_from); ?>
	    </tr>
	   </table>
	  </td>
	 </tr>
	</table>
	</form>
	<!-- /header toolbox-->