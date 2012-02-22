<?php /* Smarty version 2.6.9, created on 2011-06-07 15:25:33
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/admin/slave1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/admin/slave1.tpl', 11, false),)), $this); ?>
<form method="POST" name="taxes">
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
</form>

<form method="POST" name="discounts">
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
 </form>
 <table cellspacing="0" cellpadding="0" width="100%">
  <tr class="<?php echo smarty_function_cycle(array('values' => 'row_a,row_b'), $this);?>
">
   <td>
   </td>

  </tr>
 </table>


<script language="javascript"><!--
yoffset = window.parent.frames['master'].pageYOffset;
window.parent.frames['master'].document.forms[1].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=yoffset
window.parent.frames['master'].document.forms[1].submit();
//-->
</script>
