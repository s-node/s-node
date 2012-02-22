<?php /* Smarty version 2.6.9, created on 2011-01-21 10:53:04
         compiled from includes/lang_selector_submit.tpl */ ?>
<?php if (sizeof ( $this->_tpl_vars['LANGS'] ) > 1): ?>
<table cellspacing="0" cellpadding="0" width="100%">
<tr>
<td class="lang_tab" style="padding: 0px;">
<table cellspacing="0" cellpadding="0">
 <tr style="cursor: hand; cursor: pointer;">
 <?php $_from = $this->_tpl_vars['LANGS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['F_LANGS'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['F_LANGS']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['KEY'] => $this->_tpl_vars['LANG']):
        $this->_foreach['F_LANGS']['iteration']++;
?>
   <?php if ($this->_tpl_vars['ACTIVE_LANG'] == $this->_tpl_vars['KEY']): ?>
    <td onclick="document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter.value='<?php echo $this->_tpl_vars['KEY']; ?>
'; document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='<?php echo $this->_tpl_vars['action']; ?>
';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();" class="lang_tab_active"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
lang/<?php echo $this->_tpl_vars['KEY']; ?>
.png" alt="<?php echo $this->_tpl_vars['LANGS'][$this->_tpl_vars['KEY']]['name']; ?>
" title="<?php echo $this->_tpl_vars['LANGS'][$this->_tpl_vars['KEY']]['name']; ?>
" /></td>
    <?php if (sizeof ( $this->_tpl_vars['LANGS'] ) < 5): ?>
    <td onclick="document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter.value='<?php echo $this->_tpl_vars['KEY']; ?>
'; document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='<?php echo $this->_tpl_vars['action']; ?>
';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();" class="lang_tab_active" style="padding-right: 10px;"><?php echo $this->_tpl_vars['KEY']; ?>
</td>
    <?php endif; ?>
   <?php else: ?>
    <td onclick="document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter.value='<?php echo $this->_tpl_vars['KEY']; ?>
'; document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='<?php echo $this->_tpl_vars['action']; ?>
';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();" class="lang_tab"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
lang/<?php echo $this->_tpl_vars['KEY']; ?>
.png" alt="<?php echo $this->_tpl_vars['LANGS'][$this->_tpl_vars['KEY']]['name']; ?>
" title="<?php echo $this->_tpl_vars['LANGS'][$this->_tpl_vars['KEY']]['name']; ?>
" /></td>
    <?php if (sizeof ( $this->_tpl_vars['LANGS'] ) < 5): ?>
    <td onclick="document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter.value='<?php echo $this->_tpl_vars['KEY']; ?>
'; document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='<?php echo $this->_tpl_vars['action']; ?>
';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();" class="lang_tab" style="padding-right: 10px;"><?php echo $this->_tpl_vars['KEY']; ?>
</td>
    <?php endif; ?>
   <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
 </tr>
</table>
</td>
</tr>
</table>
<?php endif; ?>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_lang_filter" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_save_lang" value="<?php echo $this->_tpl_vars['ACTIVE_LANG']; ?>
" />