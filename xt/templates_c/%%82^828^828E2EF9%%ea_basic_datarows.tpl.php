<?php /* Smarty version 2.6.9, created on 2011-06-07 15:23:06
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/includes/contributions/ea_basic_datarows.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/includes/contributions/ea_basic_datarows.tpl', 4, false),array('function', 'inline_navigator_top', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/includes/contributions/ea_basic_datarows.tpl', 4, false),array('function', 'html_options', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.shop/includes/contributions/ea_basic_datarows.tpl', 15, false),)), $this); ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"> <?php echo ((is_array($_tmp='Shop details')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span><?php echo inline_navigator_top(array('anchor' => 'shop_details'), $this);?>

  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
   <td class="left"><?php echo ((is_array($_tmp='Price')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 / <?php echo ((is_array($_tmp='Taxes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right">
    <input type="text" size="12" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_price" value="<?php echo $this->_tpl_vars['DATA'][0]['price']; ?>
"> /
    <select name=x<?php echo $this->_tpl_vars['BASEID']; ?>
_taxes>
     <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['TAXES'],'selected' => $this->_tpl_vars['DATA'][0]['taxes']), $this);?>

    </select>
   </td>
 </tr>
  <tr>
   <td class="left"><?php echo ((is_array($_tmp='STAFFELPREISE')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right">
 <?php $_from = $this->_tpl_vars['STAFFELPREISE']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SP']):
?>
 <?php echo ((is_array($_tmp='pcs')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <input type="text" value="<?php echo $this->_tpl_vars['SP']['pcs']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_SPpcs[<?php echo $this->_tpl_vars['SP']['id']; ?>
]" size="3" /> &nbsp;&nbsp;&nbsp;
 <?php echo ((is_array($_tmp='price')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <input type="text" value="<?php echo $this->_tpl_vars['SP']['price']; ?>
" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_SPprice[<?php echo $this->_tpl_vars['SP']['id']; ?>
]" size="10" />
<br />
 <?php endforeach; endif; unset($_from); ?>
<hr />
 <?php echo ((is_array($_tmp='pcs')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <input type="text" value="" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_SPpcs[new]" size="3" /> &nbsp;&nbsp;&nbsp;
 <?php echo ((is_array($_tmp='price')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <input type="text" value="" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_SPprice[new]" size="10" />

    </td>
 </tr>
 <tr>
   <td class="left"><?php echo ((is_array($_tmp='Gift')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right">
   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_gift" value="0"<?php if ($this->_tpl_vars['DATA'][0]['gift'] == 0): ?> checked="checked"<?php endif; ?>><?php echo ((is_array($_tmp='No')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_gift" value="1"<?php if ($this->_tpl_vars['DATA'][0]['gift'] == 1): ?> checked="checked"<?php endif; ?>><?php echo ((is_array($_tmp='Present1')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_gift" value="2"<?php if ($this->_tpl_vars['DATA'][0]['gift'] == 2): ?> checked="checked"<?php endif; ?>><?php echo ((is_array($_tmp='Present2')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   </td>
 </tr>
 <tr>
   <td class="left"><?php echo ((is_array($_tmp='Product of the month')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right">
   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_product_of_month" value="0"<?php if ($this->_tpl_vars['DATA'][0]['product_of_month'] == 0): ?> checked="checked"<?php endif; ?>><?php echo ((is_array($_tmp='No')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_product_of_month" value="1"<?php if ($this->_tpl_vars['DATA'][0]['product_of_month'] == 1): ?> checked="checked"<?php endif; ?>><?php echo ((is_array($_tmp='Yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   </td>
 </tr>
 <tr>
   <td class="left"><?php echo ((is_array($_tmp='Product is buyable')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
   <td class="right">
   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_buyable" value="0"<?php if ($this->_tpl_vars['DATA'][0]['buyable'] == 0): ?> checked="checked"<?php endif; ?>><?php echo ((is_array($_tmp='No')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   <input type="radio" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_buyable" value="1"<?php if ($this->_tpl_vars['DATA'][0]['buyable'] == 1): ?> checked="checked"<?php endif; ?>><?php echo ((is_array($_tmp='Yes')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
&nbsp;
   </td>
 </tr>

 </table>