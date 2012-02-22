<?php /* Smarty version 2.6.9, created on 2011-01-24 09:51:36
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default/image_left.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'permcheck', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default/image_left.tpl', 2, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default/image_left.tpl', 14, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default/image_left.tpl', 19, false),)), $this); ?>
<?php if ($this->_tpl_vars['CHAPTER']['title'] != ''): ?>
<h2<?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?> class="xt_liveedit_chaptertitle" id="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
_<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
_<?php echo $this->_tpl_vars['CHAPTER']['level']; ?>
_chaptertitle"<?php endif; ?>><?php echo $this->_tpl_vars['CHAPTER']['title']; ?>
</h2>
<?php endif;  if ($this->_tpl_vars['CHAPTER']['subtitle'] != ''): ?>
<h3<?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?> class="xt_liveedit_chaptersubtitle" id="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
_<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
_<?php echo $this->_tpl_vars['CHAPTER']['level']; ?>
_chaptersubtitle"<?php endif; ?>><?php echo $this->_tpl_vars['CHAPTER']['subtitle']; ?>
</h3>
<?php endif;  if ($this->_tpl_vars['CHAPTER']['image_zoom'] == 1): ?>
<a href="/download.php?file_id=<?php echo $this->_tpl_vars['CHAPTER']['image']; ?>
&amp;file_version=5&amp;lw=is.jpeg" class="thickbox" rel="rel<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
" title="<?php echo $this->_tpl_vars['CHAPTER']['image_description']; ?>
">
<?php elseif ($this->_tpl_vars['CHAPTER']['image_link'] != ''): ?>
<a target="<?php echo $this->_tpl_vars['CHAPTER']['image_link_target']; ?>
" href="<?php echo $this->_tpl_vars['CHAPTER']['image_link']; ?>
">
<?php endif;  if ($this->_tpl_vars['CHAPTER']['image_type'] == 2): ?>
<div class="left">
	<object type="application/x-shockwave-flash" width="200" height="<?php echo smarty_function_math(array('equation' => "200/floor((width/height))",'width' => $this->_tpl_vars['CHAPTER']['width'],'height' => $this->_tpl_vars['CHAPTER']['height']), $this);?>
" data="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['CHAPTER']['image']; ?>
">
		<param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['CHAPTER']['image']; ?>
" />
	</object>
</div>
<?php else: ?>
	<?php echo image(array('id' => $this->_tpl_vars['CHAPTER']['image'],'version' => $this->_tpl_vars['CHAPTER']['image_version'],'title' => $this->_tpl_vars['CHAPTER']['image_description'],'alt' => $this->_tpl_vars['CHAPTER']['image_description'],'class' => 'left'), $this);?>

<?php endif;  if ($this->_tpl_vars['CHAPTER']['image_zoom'] == 1 || $this->_tpl_vars['CHAPTER']['image_link'] != ''): ?></a><?php endif;  if ($this->_tpl_vars['CHAPTER']['maintext'] != ""): ?>
<div id="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
_<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
_<?php echo $this->_tpl_vars['CHAPTER']['level']; ?>
_chaptermaintext" class="paragraph<?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?> xt_liveedit_chaptermaintext<?php endif; ?>">
	<?php echo $this->_tpl_vars['CHAPTER']['maintext']; ?>

</div>
<?php endif; ?>