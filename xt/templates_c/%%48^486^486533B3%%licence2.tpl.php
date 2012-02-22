<?php /* Smarty version 2.6.9, created on 2011-01-21 11:10:32
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/licence2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/licence2.tpl', 6, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.packagebuilder/admin/licence2.tpl', 50, false),)), $this); ?>
<form method="post" name="licence">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ch.iframe.snode.installer/admin/hiddenValues.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td class="view_header" colspan="2">
<span class="title_light"><?php echo ((is_array($_tmp='Licencegenerator')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>
</td>
</tr>
<tr>
<td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
</tr>
<tr>
<td colspan="2">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['BUTTONS'],'withouthidden' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</td>
</tr>
<tr>
 <td class="left">
    Vorname des lizenznehmers 
 </td>
 <td class="right">
   <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value[firstname]" value="<?php echo $this->_tpl_vars['VALUES']['firstname']; ?>
" />
 </td>
</tr>
<tr>
 <td class="left">
   Name des lizenznehmers
 </td>
 <td class="right">
  <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value[lastname]" value="<?php echo $this->_tpl_vars['VALUES']['lastname']; ?>
" />
 </td>
</tr>
<tr>
 <td class="left">
  Produktname
 </td>
 <td class="right">
<select name=x<?php echo $this->_tpl_vars['BASEID']; ?>
_value[product]" style="width:200px;"/>
 <?php $_from = $this->_tpl_vars['PRODUCTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PRODUCT']):
?>
      <option label="<?php echo $this->_tpl_vars['PRODUCT']; ?>
" value="<?php echo $this->_tpl_vars['PRODUCT']; ?>
" <?php if ($this->_tpl_vars['SELECTEDPRODUCT'] == $this->_tpl_vars['PRODUCT']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['PRODUCT']; ?>
</option>  
 <?php endforeach; endif; unset($_from); ?>
 </select>
 </td>
</tr>
<tr>
 <td class="left">
   Ablaufdatum 08-Okt-2006 
 </td>
 <td class="right">
  <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value[date]" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['VALUES']['date'])) ? $this->_run_mod_handler('default', true, $_tmp, 'never') : smarty_modifier_default($_tmp, 'never')); ?>
">
 </td>
</tr>
<tr>
 <td class="left">
   userid
 </td>
 <td class="right">
  <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value[userid]" value="<?php echo $this->_tpl_vars['VALUES']['userid']; ?>
">
 </td>
</tr>
<tr>
 <td class="left">
   bundleid
 </td>
 <td class="right">
  <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value[bundleid]" value="<?php echo $this->_tpl_vars['VALUES']['bundleid']; ?>
">
 </td>
</tr>
<tr>
 <td class="left">
   domainname
 </td>
 <td class="right">
  <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value[domainname]" value="<?php echo $this->_tpl_vars['VALUES']['domainname']; ?>
">
 </td>
</tr>
</table>
</form>
<?php $_from = $this->_tpl_vars['OUTPUT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['LINE']):
 echo $this->_tpl_vars['LINE']; ?>
<br />
<?php endforeach; endif; unset($_from); ?>