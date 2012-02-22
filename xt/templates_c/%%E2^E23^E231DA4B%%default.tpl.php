<?php /* Smarty version 2.6.9, created on 2011-06-08 10:43:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_viewer/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_viewer/default.tpl', 3, false),array('function', 'subplugin', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_viewer/default.tpl', 16, false),array('function', 'get_param', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog/product_viewer/default.tpl', 22, false),)), $this); ?>
<table style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
  <tr>
   <td><?php echo ((is_array($_tmp="Art. Nr.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <?php echo $this->_tpl_vars['DATA']['art_nr']; ?>
,quantity:<?php echo $this->_tpl_vars['DATA']['quantity']; ?>
 unit:<?php echo $this->_tpl_vars['DATA']['unit']; ?>
 
   </td>
  </tr>
  <tr>
   <td><h2 class="proddetail"><?php echo $this->_tpl_vars['DATA']['title']; ?>
</h2></td>
  </tr>
  <?php if ($this->_tpl_vars['DATA']['subtitle'] != ""): ?>
  <tr>
   <td><h3 class="proddetail"><?php echo $this->_tpl_vars['DATA']['subtitle']; ?>
</h3></td>
  </tr>
  <?php endif; ?>
  <tr>
   <td>
      <?php echo load_subplugin(array('package' => "ch.iframe.snode.catalog",'module' => 'product_images','style' => "main.tpl",'show' => 'main','version' => 3), $this);?>

      <?php if ($this->_tpl_vars['DATA']['lead'] != ""): ?><b><?php echo $this->_tpl_vars['DATA']['lead']; ?>
</b><br /><?php endif; ?>
      <?php echo $this->_tpl_vars['DATA']['description']; ?>
 
   </td>
  </tr>
</table>
      <A href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo get_param(array('param' => 'overview_tpl'), $this);?>
"><?php echo ((is_array($_tmp='back to overview')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</A><br />
      