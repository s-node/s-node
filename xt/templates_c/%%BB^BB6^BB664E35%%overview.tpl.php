<?php /* Smarty version 2.6.9, created on 2011-01-21 10:33:07
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/overview.tpl', 6, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/overview.tpl', 38, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/overview.tpl', 7, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/overview.tpl', 12, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/overview.tpl', 38, false),)), $this); ?>
<form method="post" name="formstable" action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'formstable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="45"><?php echo actionIcon(array('action' => 'NULL','label' => 'ID','form' => 'formstable','sort' => $this->_tpl_vars['sort']['0']['value'],'icon' => $this->_tpl_vars['sort']['0']['icon']), $this);?>
</td>
   <td class="table_header"><?php echo actionIcon(array('action' => 'NULL','form' => 'formstable','label' => 'Title','sort' => $this->_tpl_vars['sort']['1']['value'],'icon' => $this->_tpl_vars['sort']['1']['icon']), $this);?>
</td>
   <td class="table_header" width="60">&nbsp;</td>
  </tr>
  <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FORM']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button"><?php if ($this->_tpl_vars['FORM']['active'] == 0):  echo actionIcon(array('action' => 'activate','icon' => "inactive.png",'form' => 'formstable','form_id' => $this->_tpl_vars['FORM']['id'],'title' => 'Activate this form'), $this); else:  echo actionIcon(array('action' => 'deactivate','icon' => "active.png",'form' => 'formstable','form_id' => $this->_tpl_vars['FORM']['id'],'title' => 'Deactivate this form'), $this); endif; ?><a href="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['VIEWER_TPL']; ?>
&amp;x<?php echo $this->_tpl_vars['BASEID']; ?>
_form_id=<?php echo $this->_tpl_vars['FORM']['id']; ?>
" target="_blank"><img class="icon" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/view.png" alt="<?php echo ((is_array($_tmp='Preview this form')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" title="<?php echo ((is_array($_tmp='Preview this form')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
" /></a
       ><?php echo actionIcon(array('action' => 'editForm','icon' => "pencil.png",'form' => '0','target' => 'slave1','form_id' => $this->_tpl_vars['FORM']['id'],'title' => 'Edit this form'), $this); echo actionIcon(array('action' => 'deleteForm','icon' => "delete.png",'form' => 'formstable','form_id' => $this->_tpl_vars['FORM']['id'],'title' => 'Delete this form','ask' => "Are you sure you want to delete this form?"), $this);?>
</td>
       <td class="row"><?php echo $this->_tpl_vars['FORM']['id']; ?>
&nbsp;</td>
       <td class="row"><?php echo actionLink(array('action' => 'editForm','form' => '0','target' => 'slave1','form_id' => $this->_tpl_vars['FORM']['id'],'text' => ((is_array($_tmp=$this->_tpl_vars['FORM']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true))), $this);?>
&nbsp;</td>
       <td class="button" align="right"><?php echo actionIcon(array('action' => 'copyForm','icon' => "copy.png",'form' => 'formstable','form_id' => $this->_tpl_vars['FORM']['id'],'title' => 'Copy this form'), $this);?>

       <?php echo actionIcon(array('action' => 'exportForm','icon' => "download.png",'form' => '0','form_id' => $this->_tpl_vars['FORM']['id'],'title' => 'Export this form','target' => 'slave1'), $this);?>

       </td>
      </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'formstable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_form_id" value="" />
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sort" value="" />
</form>