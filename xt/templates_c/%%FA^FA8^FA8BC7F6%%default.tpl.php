<?php /* Smarty version 2.6.9, created on 2011-01-21 10:57:30
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/googlemap/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'rfc2822', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.search/googlemap/default.tpl', 8, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8" <?php echo '?>'; ?>

<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">
<?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
   <url>
    <loc>http://<?php echo $_SERVER['SERVER_NAME'];  echo $this->_tpl_vars['page']['url']; ?>
</loc>
    <lastmod><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['lastmod'])) ? $this->_run_mod_handler('rfc2822', true, $_tmp) : rfc2822($_tmp)); ?>
</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
   </url>
<?php endforeach; endif; unset($_from); ?>
</urlset>