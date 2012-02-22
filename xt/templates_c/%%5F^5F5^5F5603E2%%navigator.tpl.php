<?php /* Smarty version 2.6.9, created on 2011-01-21 10:18:43
         compiled from includes/navigator.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'includes/navigator.tpl', 4, false),)), $this); ?>
<?php if ($this->_tpl_vars['PAGE_START'] <= $this->_tpl_vars['PAGE_END'] && $this->_tpl_vars['PAGE_START'] >= 0): ?>
  <table cellspacing="0" cellpadding="0" width="100%">
   <tr>
    <td class="subhead_bottom" style="width: 90px;"><b><?php echo $this->_tpl_vars['PAGE_START']; ?>
</b> <?php echo ((is_array($_tmp='to')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <b><?php echo $this->_tpl_vars['PAGE_END']; ?>
</b> <?php echo ((is_array($_tmp='from')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 <b><?php echo $this->_tpl_vars['TOTAL_COUNT']; ?>
</b></td>

    <?php $_from = $this->_tpl_vars['PAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['NAVIGATOR'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['NAVIGATOR']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['PAGE']):
        $this->_foreach['NAVIGATOR']['iteration']++;
?>
    <td class="pages<?php if ($this->_tpl_vars['ACTIVE_PAGE'] == $this->_foreach['NAVIGATOR']['iteration']): ?>_active<?php endif; ?>" style="width: 9px;" 
        onclick="document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_page.value='<?php echo $this->_foreach['NAVIGATOR']['iteration']; ?>
';document.forms['<?php echo $this->_tpl_vars['form']; ?>
'].submit();"><?php echo $this->_foreach['NAVIGATOR']['iteration']; ?>

    </td>
    <?php endforeach; endif; unset($_from); ?>
    <td class="subhead_bottom">&nbsp;</td>
   </tr>
  </table>
  <?php endif; ?>
 <?php if (! $this->_tpl_vars['withouthidden']): ?>
 <input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_page" value="<?php echo $this->_tpl_vars['ACTIVE_PAGE']; ?>
" />
 <?php endif; ?>