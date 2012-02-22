<?php /* Smarty version 2.6.9, created on 2011-01-21 11:09:35
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/overview.tpl', 7, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.installer/admin/overview.tpl', 22, false),)), $this); ?>
<form method="POST" name="overview">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.installer/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header">
   <span class="title"><?php echo ((is_array($_tmp='Installed Packages')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
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
   <td class="table_header" width="50"><?php echo ((is_array($_tmp='ID')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" colspan="2"><?php echo ((is_array($_tmp='Name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="40"><?php echo ((is_array($_tmp='version')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="100"><?php echo ((is_array($_tmp='Provider')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['INSTALLED']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PACKAGE']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="row"><?php echo $this->_tpl_vars['PACKAGE']['id']; ?>
</td>
       <td class="button" width="20"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/box_software.png" alt="" /></td>
       <td class="row" style="padding-left: 0px;"><span title="<?php echo $this->_tpl_vars['PACKAGE']['package']; ?>
"><?php echo $this->_tpl_vars['PACKAGE']['title']; ?>
&nbsp;</span></td>
       <td class="row"><?php echo $this->_tpl_vars['PACKAGE']['version']; ?>
&nbsp;</td>
       <td class="row"><?php echo $this->_tpl_vars['PACKAGE']['provider']; ?>
&nbsp;</td>
      </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <br />

</form>