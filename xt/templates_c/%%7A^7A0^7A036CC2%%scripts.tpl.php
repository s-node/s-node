<?php /* Smarty version 2.6.9, created on 2011-01-21 15:59:17
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/scripts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/scripts.tpl', 6, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/scripts.tpl', 27, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/scripts.tpl', 7, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/scripts.tpl', 12, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/scripts.tpl', 27, false),)), $this); ?>
<form method="post" name="scripts">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'scripts')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="45"><?php echo actionIcon(array('action' => 'NULL','label' => 'ID','form' => 'scripts','sort' => $this->_tpl_vars['sort']['0']['value'],'icon' => $this->_tpl_vars['sort']['0']['icon']), $this);?>
</td>
   <td class="table_header"><?php echo actionIcon(array('action' => 'NULL','form' => 'scripts','label' => 'Title','sort' => $this->_tpl_vars['sort']['1']['value'],'icon' => $this->_tpl_vars['sort']['1']['icon']), $this);?>
</td>
   <td class="table_header" width="30">&nbsp;</td>
  </tr>
  <?php $_from = $this->_tpl_vars['SCRIPTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SCRIPT']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button"><?php echo actionIcon(array('action' => 'editScript','icon' => "pencil.png",'form' => '0','target' => 'slave1','script_id' => $this->_tpl_vars['SCRIPT']['id'],'title' => 'Edit this script'), $this); echo actionIcon(array('action' => 'deleteScript','icon' => "delete.png",'form' => 'scripts','script_id' => $this->_tpl_vars['SCRIPT']['id'],'title' => 'Delete this script','ask' => "Are you sure you want to delete this script?"), $this);?>
</td>
       <td class="row"><?php echo $this->_tpl_vars['SCRIPT']['id']; ?>
&nbsp;</td>
       <td class="row"><?php echo actionLink(array('action' => 'editScript','form' => '0','target' => 'slave1','script_id' => $this->_tpl_vars['SCRIPT']['id'],'text' => ((is_array($_tmp=$this->_tpl_vars['SCRIPT']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true))), $this);?>
&nbsp;</td>
       <td class="button" align="right"><?php echo actionIcon(array('action' => 'duplicateScript','icon' => "copy.png",'form' => 'scripts','script_id' => $this->_tpl_vars['SCRIPT']['id'],'title' => 'Duplicate this script'), $this);?>
</td>
      </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'scripts')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_script_id" value="" />
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sort" value="">
 <input type="hidden" name="module" value="s" />
</form>