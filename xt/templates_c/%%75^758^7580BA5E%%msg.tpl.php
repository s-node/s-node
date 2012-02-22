<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:19
         compiled from includes/msg.tpl */ ?>
<?php $_from = $this->_tpl_vars['ERRORS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ERROR']):
 if ($this->_tpl_vars['ERROR']['severity'] == 16): ?>
<table cellspacing="0" cellpadding="0" width="100%" class="info">
 <tr>
  <td class="info_msg"><?php echo $this->_tpl_vars['ERROR']['desc']; ?>
</td>
 </tr>
</table>
<?php endif;  if ($this->_tpl_vars['ERROR']['severity'] == 1): ?>
<table cellspacing="0" cellpadding="0" width="100%" class="error">
 <tr>
  <td class="error_msg"><?php echo $this->_tpl_vars['ERROR']['desc']; ?>
</td>
 </tr>
</table>
<?php endif;  if ($this->_tpl_vars['ERROR']['severity'] == 4): ?>
<table cellspacing="0" cellpadding="0" width="100%" class="warning">
 <tr>
  <td class="warning_msg"><?php echo $this->_tpl_vars['ERROR']['desc']; ?>
</td>
 </tr>
</table>
<?php endif;  if ($this->_tpl_vars['ERROR']['severity'] == 2): ?>
<table cellspacing="0" cellpadding="0" width="100%" class="info">
 <tr>
  <td class="info_msg"><?php echo $this->_tpl_vars['ERROR']['desc']; ?>
</td>
 </tr>
</table>
<?php endif;  endforeach; endif; unset($_from); ?>