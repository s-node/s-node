<?php /* Smarty version 2.6.9, created on 2011-01-24 11:25:40
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editTemplate.tpl */ ?>
<form method="POST">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr class="row_a">
  <td class="row"><textarea name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_content" style="width: 100%" rows="30"><?php echo $this->_tpl_vars['TPL_CONTENT']; ?>
</textarea></td>
 </tr>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_tpl_file" value="<?php echo $this->_tpl_vars['TPL_FILE']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="<?php echo $this->_tpl_vars['NODE_ID']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_position" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target_module" value="" />
<input type="hidden" name="TPL" value="<?php echo $this->_tpl_vars['TPL']; ?>
" />
</form>