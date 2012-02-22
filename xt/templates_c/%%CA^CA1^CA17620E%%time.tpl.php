<?php /* Smarty version 2.6.9, created on 2011-01-21 10:27:09
         compiled from ch.iframe.snode.articles/admin/time.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'ch.iframe.snode.articles/admin/time.tpl', 1, false),)), $this); ?>
<h2><?php echo ((is_array($_tmp='Time')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</h2>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
  <td class="left" width="200" valign="top">
   <?php echo ((is_array($_tmp='From')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
  <td class="right">
  <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_time_type" value="0" <?php if ($this->_tpl_vars['TIME']['type'] == '0'): ?>checked<?php endif; ?> /><?php echo ((is_array($_tmp='none')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_time_type" value="1" <?php if ($this->_tpl_vars['TIME']['type'] == '1'): ?>checked<?php endif; ?> /><?php echo ((is_array($_tmp='from')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_time_type" value="2" <?php if ($this->_tpl_vars['TIME']['type'] == '2'): ?>checked<?php endif; ?> /><?php echo ((is_array($_tmp='to')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_time_type" value="3" <?php if ($this->_tpl_vars['TIME']['type'] == '3'): ?>checked<?php endif; ?> /><?php echo ((is_array($_tmp='between')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

 </td>
</tr>
<?php if ($this->_tpl_vars['TIME']['type'] == '1' || $this->_tpl_vars['TIME']['type'] == '3'): ?>
<tr>
  <td class="left" width="200" valign="top">
   <?php echo ((is_array($_tmp='From')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
  <td class="right"><?php echo ((is_array($_tmp='Hour')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_hstart" class="default">
<?php $_from = $this->_tpl_vars['TIME']['shour']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['HOUR'] => $this->_tpl_vars['SHOUR']):
?>
   <option value="<?php echo $this->_tpl_vars['HOUR']; ?>
" <?php if ($this->_tpl_vars['SHOUR']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['HOUR']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
   </select>&nbsp;

   <?php echo ((is_array($_tmp='Minute')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_mstart" class="default">
   <?php $_from = $this->_tpl_vars['TIME']['smin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MIN'] => $this->_tpl_vars['SMIN']):
?>
    <option value="<?php echo $this->_tpl_vars['MIN']; ?>
" <?php if ($this->_tpl_vars['SMIN']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['MIN']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>

   <br /><?php echo ((is_array($_tmp='Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

<input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sdate_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sdate_str" size="12" value="<?php echo $this->_tpl_vars['TIME']['sdate_str']; ?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'sdate_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_sdate" value="<?php echo $this->_tpl_vars['TIME']['sdate']; ?>
">


  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['TIME']['type'] == '2' || $this->_tpl_vars['TIME']['type'] == '3'): ?>
 <tr>
  <td class="left" width="200" valign="top">
   <?php echo ((is_array($_tmp='Until')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

  </td>
  <td class="right"><?php echo ((is_array($_tmp='Hour')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_hend" class="default">
   <?php $_from = $this->_tpl_vars['TIME']['ehour']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['HOUR'] => $this->_tpl_vars['EHOUR']):
?>
   <option value="<?php echo $this->_tpl_vars['HOUR']; ?>
" <?php if ($this->_tpl_vars['EHOUR']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['HOUR']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>&nbsp;
   <?php echo ((is_array($_tmp='Minute')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_mend" class="default">
 <?php $_from = $this->_tpl_vars['TIME']['emin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MIN'] => $this->_tpl_vars['EMIN']):
?>
    <option value="<?php echo $this->_tpl_vars['MIN']; ?>
" <?php if ($this->_tpl_vars['EMIN']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['MIN']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>

   <br /><?php echo ((is_array($_tmp='Date')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>

   <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_edate_str" id="x<?php echo $this->_tpl_vars['BASEID']; ?>
_edate_str" size="15" value="<?php echo $this->_tpl_vars['TIME']['edate_str']; ?>
" class="default" maxlength="10" readonly>
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/widgets/datepicker.tpl", 'smarty_include_vars' => array('relative' => 'edate_str')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_edate" value="<?php echo $this->_tpl_vars['TIME']['edate']; ?>
">
 </td>
 </tr>
 <?php endif; ?>
</table>