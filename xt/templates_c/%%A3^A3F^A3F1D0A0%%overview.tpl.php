<?php /* Smarty version 2.6.9, created on 2011-06-07 15:25:31
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packaging_units/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packaging_units/admin/overview.tpl', 8, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packaging_units/admin/overview.tpl', 40, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packaging_units/admin/overview.tpl', 16, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packaging_units/admin/overview.tpl', 17, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packaging_units/admin/overview.tpl', 49, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
&module=<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" method="POST" name="units">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'units')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'units')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<table cellspacing="0" cellpadding="0" width="100%">
     <tr>
       <td class="table_header" width="80"><?php echo ((is_array($_tmp='Options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header" width="20">ID</td>
       <td class="table_header" width="60"><?php echo ((is_array($_tmp='Default')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header" width="120"><?php echo ((is_array($_tmp='short')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header"><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      </tr>

      <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button"><?php echo actionIcon(array('action' => 'editUnit','icon' => "pencil.png",'form' => '0','perm' => 'edit','title' => 'Edit taxes','target' => 'slave1','id' => $this->_tpl_vars['ENTRY']['id']), $this); echo actionIcon(array('action' => 'delete','icon' => "delete.png",'form' => 'units','perm' => 'delete','yoffset' => 1,'ask' => 'Do you want to delete this unit','title' => 'Delete unit','id' => $this->_tpl_vars['ENTRY']['id']), $this);?>
</td>
       <td class="row">
       <?php echo $this->_tpl_vars['ENTRY']['id']; ?>

       </td>
       <td class="row">
       <?php echo $this->_tpl_vars['ENTRY']['standard']; ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['short'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>

       </td>
       <td class="row">
       <?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['full'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>

       </td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'units')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php echo yoffset(array(), $this);?>

</form>