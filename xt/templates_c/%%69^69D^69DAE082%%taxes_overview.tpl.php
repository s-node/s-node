<?php /* Smarty version 2.6.9, created on 2011-06-08 09:13:52
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/admin/taxes_overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/admin/taxes_overview.tpl', 6, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/admin/taxes_overview.tpl', 12, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/admin/taxes_overview.tpl', 13, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/admin/taxes_overview.tpl', 39, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&module=<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" method="POST" name="taxes">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['TAXES_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<table cellspacing="0" cellpadding="0" width="100%">
     <tr>
       <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header" width="20"><b>ID</b></td>
       <td class="table_header"><?php echo ((is_array($_tmp='Value')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      </tr>

      <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button"><?php echo actionIcon(array('action' => 'editTaxes','icon' => "pencil.png",'form' => '0','perm' => 'manage_taxes','title' => 'edit taxes','target' => 'slave1','id' => $this->_tpl_vars['ENTRY']['id']), $this); echo actionIcon(array('action' => 'deleteTaxes','icon' => "delete.png",'form' => 'taxes','perm' => 'manage_taxes','yoffset' => 1,'ask' => "Are you sure to delete this value?",'title' => 'delete taxes','id' => $this->_tpl_vars['ENTRY']['id']), $this);?>
</td>
       <td class="row">
       <?php echo $this->_tpl_vars['ENTRY']['id']; ?>

       </td>
       <td class="row">
       <?php echo $this->_tpl_vars['ENTRY']['value']; ?>

       </td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'taxes')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php echo yoffset(array(), $this);?>

</form>