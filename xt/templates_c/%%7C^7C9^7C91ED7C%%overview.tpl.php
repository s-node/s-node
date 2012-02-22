<?php /* Smarty version 2.6.9, created on 2011-01-21 10:26:37
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/overview.tpl', 7, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/overview.tpl', 45, false),array('modifier', 'truncate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/overview.tpl', 47, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/overview.tpl', 12, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/overview.tpl', 17, false),array('function', 'actionLink', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.googlemaps/admin/overview.tpl', 47, false),)), $this); ?>
<form method="POST" name="map">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/lang_selector_simple.tpl", 'smarty_include_vars' => array('form' => 'map')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <table cellspacing="0" cellpadding="0" width="100%">
  <?php if ($this->_tpl_vars['KEYNOTFOUND']): ?>
  <tr>
   <td class="error_msg" colspan="4"><?php echo ((is_array($_tmp='No Key Added Yet')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  </tr>
  <?php endif; ?>
  <tr>
   <td class="table_header" width="80">&nbsp;</td>
   <td class="table_header" width="100"><?php echo actionIcon(array('action' => 'NULL','form' => 'map','label' => 'Date','sort' => $this->_tpl_vars['sort']['0']['value'],'icon' => $this->_tpl_vars['sort']['0']['icon']), $this);?>
</td>
   <td class="table_header" width="40"><?php echo actionIcon(array('action' => 'NULL','label' => 'ID','form' => 'map','sort' => $this->_tpl_vars['sort']['1']['value'],'icon' => $this->_tpl_vars['sort']['1']['icon']), $this);?>
</td>
   <td class="table_header"><?php echo actionIcon(array('action' => 'NULL','form' => 'map','label' => 'Title','sort' => $this->_tpl_vars['sort']['2']['value'],'icon' => $this->_tpl_vars['sort']['2']['icon']), $this);?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['MAPTABLE'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['MAPTABLE']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['MAP']):
        $this->_foreach['MAPTABLE']['iteration']++;
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "row_a,row_b"), $this);?>
" <?php if ($this->_tpl_vars['MAP']['locked_user'] == $this->_tpl_vars['USER_ID']): ?>style="background-image: url(<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
admin/gfx/naventry_active.gif);"<?php endif; ?>>
   <td class="button"><?php if ($this->_tpl_vars['MAP']['locked'] != 1 || $this->_tpl_vars['MAP']['locked_user'] == $this->_tpl_vars['USER_ID']):  if ($this->_tpl_vars['MAP']['active']):  echo actionIcon(array('action' => 'deactivateMap','icon' => "active.png",'form' => 'map','perm' => 'statuschange','id' => $this->_tpl_vars['MAP']['id'],'title' => 'Deactivate this map'), $this); else:  echo actionIcon(array('action' => 'activateMap','icon' => "inactive.png",'form' => 'map','perm' => 'statuschange','id' => $this->_tpl_vars['MAP']['id'],'title' => 'Activate this map'), $this); endif;  echo actionIcon(array('action' => 'editMap','icon' => "pencil.png",'form' => '0','target' => 'slave1','id' => $this->_tpl_vars['MAP']['id'],'perm' => 'edit','title' => 'Edit this map'), $this); echo actionIcon(array('action' => 'deleteMap','icon' => "delete.png",'form' => 'map','id' => $this->_tpl_vars['MAP']['id'],'perm' => 'delete','title' => 'Delete this map','ask' => "Are you sure you want to delete this map?"), $this); else:  echo ((is_array($_tmp='In edit')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp));  endif; ?></td>
   <td class="row"><?php echo ((is_array($_tmp=$this->_tpl_vars['MAP']['c_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I")); ?>
</td>
    <td class="row"><?php echo $this->_tpl_vars['MAP']['id']; ?>
</td>
   <td class="row"><?php echo actionLink(array('action' => 'editMap','form' => '0','target' => 'slave1','perm' => 'view','id' => $this->_tpl_vars['MAP']['id'],'text' => ((is_array($_tmp=$this->_tpl_vars['MAP']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true))), $this);?>
&nbsp;</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
 </table>
 <input type="hidden" name="map" value="">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'map')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="">
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sort" value="" />
 <input type="hidden" name="module" value="">
</form>