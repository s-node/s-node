<?php /* Smarty version 2.6.9, created on 2011-01-24 09:51:36
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'permcheck', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default.tpl', 1, false),array('function', 'XT_load_js', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default.tpl', 2, false),array('function', 'XT_load_css', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.articles/viewer/default.tpl', 5, false),)), $this); ?>
<?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?>
	<?php echo XT_load_js(array('file' => "tiny_mce/tiny_mce.js"), $this);?>

	<?php echo XT_load_js(array('file' => "jquery-plugins/jquery.jeditable.js"), $this);?>

	<?php echo XT_load_js(array('file' => "ch.iframe.snode.liveedit/liveedit.js"), $this);?>

	<?php echo XT_load_css(array('file' => "ch.iframe.snode.liveedit.css"), $this);?>

<?php endif;  if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?>
<a class="article_edit" href="javascript:popup('/index.php?TPL=119&amp;x270_id=<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
&amp;x270_action=editArticle&amp;x270_liveedit=true',800,600,'editarticle')"><img src="/images/icons/edit_small.png" alt="" /></a>
<?php endif;  if (! $this->_tpl_vars['ARTICLE']['hide_title']): ?>
<h1<?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?> class="xt_liveedit_articletitle"<?php endif; ?> id="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
_<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
_articletitle"><?php echo $this->_tpl_vars['ARTICLE']['title'];  if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))):  endif; ?></h1>
<?php endif;  if ($this->_tpl_vars['ARTICLE']['subtitle'] != ''): ?>
<h2<?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?> class="xt_liveedit_articlesubtitle"<?php endif; ?> id="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
_<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
_articlesubtitle"><?php echo $this->_tpl_vars['ARTICLE']['subtitle']; ?>
</h2>
<?php endif;  if ($this->_tpl_vars['ARTICLE']['introduction'] != ''): ?>
<div id="<?php echo $this->_tpl_vars['SYSTEM_LANG']; ?>
_<?php echo $this->_tpl_vars['ARTICLE']['id']; ?>
" class="introduction<?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('permcheck', true, $_tmp) : permcheck($_tmp))): ?> xt_liveedit_articleintroduction<?php endif; ?>">
	<?php echo $this->_tpl_vars['ARTICLE']['introduction']; ?>

</div>
<?php endif;  $_from = $this->_tpl_vars['CHAPTERCONTENT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['C'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['C']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['CHAPTER']):
        $this->_foreach['C']['iteration']++;
?>
	<?php echo $this->_tpl_vars['CHAPTER']['rendered']; ?>

    <?php if ($this->_tpl_vars['CHAPTER']['layout'] != "image_float.tpl" && ! ($this->_foreach['C']['iteration'] == $this->_foreach['C']['total'])): ?>
        <br class="clear" />
    <?php endif;  endforeach; endif; unset($_from); ?>