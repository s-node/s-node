<?php /* Smarty version 2.6.9, created on 2011-06-07 15:25:36
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop_orders/admin/overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop_orders/admin/overview.tpl', 5, false),array('modifier', 'date_format', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop_orders/admin/overview.tpl', 25, false),array('modifier', 'round5', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop_orders/admin/overview.tpl', 30, false),array('function', 'cycle', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop_orders/admin/overview.tpl', 17, false),array('function', 'actionIcon', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop_orders/admin/overview.tpl', 18, false),)), $this); ?>
<form method="POST" name="overview">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td class="table_header" width="70"><?php echo ((is_array($_tmp="Order No.")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="120"><?php echo ((is_array($_tmp="When?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header"><?php echo ((is_array($_tmp="Who?")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="30">P</td>
  <td class="table_header" width="30">DP</td>
  <td class="table_header" width="30">G</td>
  <td class="table_header" width="80" align="right"><?php echo ((is_array($_tmp='Total')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="80" align="right"><?php echo ((is_array($_tmp='Discount')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="80" align="right"><?php echo ((is_array($_tmp='Transport')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="table_header" width="80" align="right"><?php echo ((is_array($_tmp='Endprice')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
 </tr>
 <?php $_from = $this->_tpl_vars['DATA']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ORDER']):
?>
 <tr class="<?php if ($this->_tpl_vars['ORDER']['status'] == 0): ?>row_yellow<?php else:  if ($this->_tpl_vars['ORDER']['status'] == 2): ?>row_red<?php else:  if ($this->_tpl_vars['ORDER']['status'] == 1): ?>row_green<?php else:  if ($this->_tpl_vars['ORDER']['status'] == 3): ?>row_blue<?php else:  echo smarty_function_cycle(array('values' => "row_a,row_b"), $this); endif;  endif;  endif;  endif; ?>">
  <td class="row"><?php echo $this->_tpl_vars['ORDER']['id'];  echo actionIcon(array('icon' => "book_blue_next.png",'form' => 0,'action' => 'show_details','target' => 'slave1','title' => 'show details','id' => $this->_tpl_vars['ORDER']['id']), $this);?>
</td>
  <td class="row"><?php echo ((is_array($_tmp=$this->_tpl_vars['ORDER']['creation_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%I:%S") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%I:%S")); ?>
</td>
  <td class="row"><?php echo $this->_tpl_vars['ORDER']['lastName']; ?>
 <?php echo $this->_tpl_vars['ORDER']['firstName']; ?>
 (<?php echo $this->_tpl_vars['ORDER']['user_id']; ?>
)</td>
  <td class="row"><?php echo $this->_tpl_vars['ORDER']['products_count']; ?>
&nbsp;</td>
  <td class="row"><?php echo $this->_tpl_vars['ORDER']['products']; ?>
&nbsp;</td>
  <td class="row"><?php if ($this->_tpl_vars['ORDER']['gifts'] > 0):  echo $this->_tpl_vars['ORDER']['gifts'];  else: ?><span style="color: #BBBBBB;">0</span><?php endif; ?>&nbsp;</td>
  <td class="row" width="80" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['ORDER']['totalprice'])) ? $this->_run_mod_handler('round5', true, $_tmp) : round5($_tmp)); ?>
 <?php echo $this->_tpl_vars['BASECURRENCY']; ?>
</td>
  <td class="row" width="80" align="right"><?php if ($this->_tpl_vars['ORDER']['discount'] > 0):  echo ((is_array($_tmp=$this->_tpl_vars['ORDER']['discount'])) ? $this->_run_mod_handler('round5', true, $_tmp) : round5($_tmp)); ?>
 <?php echo $this->_tpl_vars['BASECURRENCY'];  else: ?><span style="color: #BBBBBB;"><?php echo ((is_array($_tmp='No discount')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php endif; ?></td>
  <td class="row" width="80" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['ORDER']['transport'])) ? $this->_run_mod_handler('round5', true, $_tmp) : round5($_tmp)); ?>
 <?php echo $this->_tpl_vars['BASECURRENCY']; ?>
</td>
  <td class="row" width="80" align="right"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['ORDER']['endprice'])) ? $this->_run_mod_handler('round5', true, $_tmp) : round5($_tmp)); ?>
</b> <?php echo $this->_tpl_vars['BASECURRENCY']; ?>
</td>
 </tr>
 <?php endforeach; endif; unset($_from); ?>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/navigator.tpl", 'smarty_include_vars' => array('form' => 'overview')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</form>