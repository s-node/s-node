<?php /* Smarty version 2.6.9, created on 2011-01-21 11:09:01
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/overview.tpl', 6, false),array('modifier', 'getConfigValue', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/overview.tpl', 9, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/overview.tpl', 47, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/overview.tpl', 17, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/overview.tpl', 47, false),array('function', 'math', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.newsletter/admin/overview.tpl', 59, false),)), $this); ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" name="overview">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="table_header" width="100">&nbsp;</td>
  <td class="table_header" colspan="2"><?php echo ((is_array($_tmp='Title')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
    <td class="table_header" width="40"><?php echo ((is_array($_tmp='Language')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="40"><?php echo ((is_array($_tmp='Status')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <?php if (((is_array($_tmp='batched_mode')) ? $this->_run_mod_handler('getConfigValue', true, $_tmp) : getConfigValue($_tmp)) == true): ?>
   <td class="table_header" width="40"><?php echo ((is_array($_tmp='Waiting')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="40"><?php echo ((is_array($_tmp='Sent')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="40"><?php echo ((is_array($_tmp='Views')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <?php endif; ?>
 </tr>
 <?php $_from = $this->_tpl_vars['NEWSLETTERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NEWSLETTER']):
?>
 <tr>
  <td class="button"><?php echo actionIcon(array('action' => 'editNewsletter','icon' => "pencil.png",'title' => 'Edit newsletter','newsletter_id' => $this->_tpl_vars['NEWSLETTER']['id'],'target' => 'slave1','form' => '0'), $this);?>

  <?php echo actionIcon(array('action' => 'deleteNewsletter','icon' => "delete.png",'title' => 'Delete newsletter','form' => 'overview','newsletter_id' => $this->_tpl_vars['NEWSLETTER']['id'],'ask' => "Are you sure you want to delete this newsletter?"), $this);?>

  <?php if (((is_array($_tmp='batched_mode')) ? $this->_run_mod_handler('getConfigValue', true, $_tmp) : getConfigValue($_tmp)) == true): ?>
  <?php echo actionIcon(array('action' => 'emptyQueue','icon' => "warning.png",'title' => 'Empty queue','form' => 'overview','newsletter_id' => $this->_tpl_vars['NEWSLETTER']['id'],'ask' => "Are you sure you want to empty the queue for this newsletter?"), $this);?>

  <?php endif;  echo actionIcon(array('action' => 'duplicateNewsletter','icon' => "copy.png",'title' => 'Duplicate newsletter','newsletter_id' => $this->_tpl_vars['NEWSLETTER']['id'],'form' => 'overview'), $this);?>

  </td>
  <td class="button" width="16"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/mail2.png" alt="" /></td>
  <td class="row" style="padding-left: 0px;"><?php echo actionLink(array('action' => 'editNewsletter','title' => 'Edit newsletter','newsletter_id' => $this->_tpl_vars['NEWSLETTER']['id'],'target' => 'slave1','form' => '0','text' => ((is_array($_tmp=@$this->_tpl_vars['NEWSLETTER']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, 'untitled') : smarty_modifier_default($_tmp, 'untitled'))), $this);?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=$this->_tpl_vars['NEWSLETTER']['lang'])) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="row"><?php echo $this->_tpl_vars['NEWSLETTER']['status']; ?>
</td>
  <?php if (((is_array($_tmp='batched_mode')) ? $this->_run_mod_handler('getConfigValue', true, $_tmp) : getConfigValue($_tmp)) == true): ?>
   <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['NEWSLETTER']['waiting'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
</td>
   <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['NEWSLETTER']['sent'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
</td>
   <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['NEWSLETTER']['views'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
 <?php if ($this->_tpl_vars['NEWSLETTER']['views'] != 0 && $this->_tpl_vars['NEWSLETTER']['sent'] != 0): ?>(<?php echo smarty_function_math(array('equation' => "(x / y)*100",'x' => $this->_tpl_vars['NEWSLETTER']['views'],'y' => $this->_tpl_vars['NEWSLETTER']['sent'],'format' => "%.2f"), $this);?>
 %)<?php endif; ?></td>
  <?php endif; ?>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.newsletter/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>