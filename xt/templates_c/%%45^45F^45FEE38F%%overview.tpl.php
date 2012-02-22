<?php /* Smarty version 2.6.9, created on 2011-01-21 10:51:51
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.assessment/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.assessment/admin/overview.tpl', 5, false),array('modifier', 'allowed', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.assessment/admin/overview.tpl', 12, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.assessment/admin/overview.tpl', 10, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.assessment/admin/overview.tpl', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form method="POST" name="overview">
<table cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td class="table_header" width="81"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="table_header" width="32">ID</td>
   <td class="table_header"><?php echo ((is_array($_tmp='Display name')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['xt8200_admin']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['TABLE'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['TABLE']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ASSESSMENT']):
        $this->_foreach['TABLE']['iteration']++;
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button">
       <?php if (((is_array($_tmp='edit')) ? $this->_run_mod_handler('allowed', true, $_tmp) : allowed($_tmp))): ?>
       <?php if ($this->_tpl_vars['ASSESSMENT']['active'] == 1):  echo actionIcon(array('action' => 'deactivateAssessment','form' => 'overview','icon' => "active.png",'title' => 'deactivate this assessment','perm' => 'edit','id' => $this->_tpl_vars['ASSESSMENT']['id']), $this); else:  echo actionIcon(array('action' => 'activateAssessment','form' => 'overview','icon' => "inactive.png",'title' => 'activate this assessment','perm' => 'edit','id' => $this->_tpl_vars['ASSESSMENT']['id']), $this); endif;  echo actionIcon(array('action' => 'editAssessment','icon' => "pencil.png",'form' => '0','target' => 'slave1','perm' => 'edit','id' => $this->_tpl_vars['ASSESSMENT']['id'],'title' => 'Edit this assessment'), $this);?>

       <?php endif; ?>
       <?php if (((is_array($_tmp='delete')) ? $this->_run_mod_handler('allowed', true, $_tmp) : allowed($_tmp))): ?>
       <?php if ($this->_tpl_vars['ASSESSMENT']['active'] == 0):  echo actionIcon(array('action' => 'deleteAssessment','icon' => "delete.png",'title' => 'Delete this assessment','perm' => 'edit','id' => $this->_tpl_vars['ASSESSMENT']['id'],'ask' => "Are you sure to delete this assessment?",'form' => 'overview'), $this); endif; ?>
       <?php endif; ?></td>
       <td class="row"><?php echo $this->_tpl_vars['ASSESSMENT']['id']; ?>
&nbsp;</td>
       <td class="row">
 		<?php echo $this->_tpl_vars['ASSESSMENT']['title']; ?>

		</td>
      </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'overview')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
</form>