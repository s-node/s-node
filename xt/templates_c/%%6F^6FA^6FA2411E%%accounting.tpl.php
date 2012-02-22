<?php /* Smarty version 2.6.9, created on 2011-01-21 11:15:32
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/accounting.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.tickets/admin/accounting.tpl', 6, false),)), $this); ?>
<form method="post">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo ((is_array($_tmp='Accounting')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
  </td>
 </tr>
   <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Start date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_startdate_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_startdate_str" value="<?php echo $this->_tpl_vars['xt8100_admin']['startdate']; ?>
" size="12" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'startdate_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </td>
</tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='End date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 (d.m.y)</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_enddate_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_enddate_str" value="<?php echo $this->_tpl_vars['xt8100_admin']['enddate']; ?>
" size="12" />
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'enddate_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </td>
</tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Ignore accounted')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_ignore_accounted"  /> <?php echo ((is_array($_tmp='Ignore accounted still accounted efforts')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
</tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Mark as accounted')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="checkbox" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_mark_accounted" checked="checked" /> <?php echo ((is_array($_tmp='Mark exported efforts as accounted')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
</tr>
 </table>