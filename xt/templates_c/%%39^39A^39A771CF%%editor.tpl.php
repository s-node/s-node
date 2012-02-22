<?php /* Smarty version 2.6.9, created on 2011-01-21 10:27:09
         compiled from includes/editor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'includes/editor.tpl', 19, false),)), $this); ?>
<?php echo '
<!-- tinyMCE -->
<script language="javascript" type="text/javascript" src="';  echo $this->_tpl_vars['XT_SCRIPTS'];  echo 'tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
	var tinyMCEmode = new Array();
	function toggleEditorMode(sEditorID) {
		if (!tinyMCE.getInstanceById(sEditorID)) {
			tinyMCE.execCommand(\'mceAddControl\', false, sEditorID);
		}
		else {
			tinyMCE.execCommand(\'mceRemoveControl\', false, sEditorID);
		}
	}

	tinyMCE.init({
		mode : "exact",
		theme : "advanced",
		plugins : "fullscreen,safari",
		language : "';  echo ((is_array($_tmp=@$this->_tpl_vars['SYSTEM_LANG'])) ? $this->_run_mod_handler('default', true, $_tmp, 'en') : smarty_modifier_default($_tmp, 'en'));  echo '",
		theme_advanced_buttons1 : "bold,italic,underline,separator,justifyleft,justifyright,justifyfull,separator,bullist,numlist,separator,undo,link,code,separator,fullscreen",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		content_css : "';  echo $this->_tpl_vars['XT_STYLES']; ?>
live/<?php echo $this->_tpl_vars['XT_THEME']; ?>
/<?php echo $this->_tpl_vars['XT_THEME']; ?>
_editor.css<?php echo '",
		force_br_newlines : true,
		forced_root_block : \'\',
		force_p_newlines : false,
		cleanup : true,
		visual : true,
		strict_loading_mode : true,
		convert_urls: false,
		fullscreen_new_window : false,
		fullscreen_settings : {
			plugins : \'fullscreen, advhr, searchreplace, table, paste, safari\',
			table_color_fields : \'true\',
			theme_advanced_buttons1 : \'fullscreen,bold,italic,underline,strikethrough,separator,sub,sup,separator,justifyleft,justifyright,justifycenter,justifyfull,separator,bullist,numlist,separator,outdent,indent,separator,advhr,separator,undo,redo,separator,link,unlink,anchor,image,separator,code\',
			theme_advanced_buttons2 : \'tablecontrols, separator,forecolor,backcolor,separator,fontsizeselect,separator,fontselect,styleselect\',
			theme_advanced_buttons3 : \'selectall,cut,paste,pastetext,pasteword,separator,search,replace,separator,removeformat,visualaid,separator,charmap\'
		}
	});
</script>
<!-- /tinyMCE -->
'; ?>