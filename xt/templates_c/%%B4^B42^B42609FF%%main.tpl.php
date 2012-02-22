<?php /* Smarty version 2.6.9, created on 2011-06-08 10:39:15
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_images/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_images/main.tpl', 4, false),array('function', 'image', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_images/main.tpl', 11, false),)), $this); ?>
<?php if (count ( $this->_tpl_vars['IMAGES'] ) > 0):  if ($this->_tpl_vars['IMAGES']['0']['type'] == 2): ?>
<div class="left">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['IMAGES']['0']['width'],'height' => $this->_tpl_vars['IMAGES']['0']['height']), $this);?>
">
<param name="movie" value="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['IMAGES']['0']['id']; ?>
" />
<param name="quality" value="high" />
<embed src="<?php echo $this->_tpl_vars['XT_WEB_ROOT']; ?>
download.php?file_id=<?php echo $this->_tpl_vars['IMAGES']['0']['id']; ?>
" quality="high" width="200" height="<?php echo smarty_function_math(array('equation' => "200/(width/height)",'width' => $this->_tpl_vars['IMAGES']['0']['width'],'height' => $this->_tpl_vars['IMAGES']['0']['height']), $this);?>
" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>
</object>
</div>
<?php else:  echo image(array('id' => $this->_tpl_vars['IMAGES']['0']['id'],'version' => $this->_tpl_vars['VERSION'],'title' => $this->_tpl_vars['IMAGES']['0']['description'],'alt' => $this->_tpl_vars['IMAGES']['0']['description'],'align' => 'left','hspace' => 10,'vspace' => 10), $this); endif;  endif; ?>