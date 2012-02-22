<?php /* Smarty version 2.6.9, created on 2011-06-07 15:25:28
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog_properties/admin/properties_overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog_properties/admin/properties_overview.tpl', 9, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog_properties/admin/properties_overview.tpl', 36, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog_properties/admin/properties_overview.tpl', 37, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog_properties/admin/properties_overview.tpl', 16, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog_properties/admin/properties_overview.tpl', 18, false),array('function', 'yoffset', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.catalog_properties/admin/properties_overview.tpl', 42, false),)), $this); ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="POST" name="properties_overview">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['PROPERTIES_OVERVIEW_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'properties_overview')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/charfilter.tpl", 'smarty_include_vars' => array('form' => 'properties_overview')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_property_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_module" value="<?php echo $this->_tpl_vars['ADMINMODULE']; ?>
" />
<table cellspacing="0" cellpadding="0" width="100%">
     <tr>
       <td class="table_header" width="80"><?php echo ((is_array($_tmp='options')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header" width="20">ID</td>
       <td class="table_header" width="180"><?php echo ((is_array($_tmp='fieldname')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
       <td class="table_header"><?php echo ((is_array($_tmp='description')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
      </tr>

      <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ENTRY']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
">
       <td class="button">
       <?php echo actionIcon(array('action' => 'editProperty','icon' => "pencil.png",'form' => '0','perm' => 'manageProperties','title' => 'edit property','target' => 'slave1','property_id' => $this->_tpl_vars['ENTRY']['id']), $this); echo actionIcon(array('action' => 'deleteProperty','icon' => "delete.png",'form' => 'properties_overview','perm' => 'manageProperties','ask' => "Are you sure to delete this property?",'title' => 'delete property','property_id' => $this->_tpl_vars['ENTRY']['id']), $this);?>
</td>
       <td class="row">
       <?php echo $this->_tpl_vars['ENTRY']['id']; ?>

       </td>
       <td class="row"><?php echo ((is_array($_tmp=@$this->_tpl_vars['ENTRY']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")); ?>
</td>
       <td class="row"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['ENTRY']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, "?") : smarty_modifier_default($_tmp, "?")))) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...") : smarty_modifier_truncate($_tmp, 35, "...")); ?>
</td>
      </tr>
     <?php endforeach; endif; unset($_from); ?>
    </table>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'properties_overview')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php echo yoffset(array(), $this);?>

</form>