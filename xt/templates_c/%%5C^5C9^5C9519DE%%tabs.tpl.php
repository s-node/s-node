<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from includes/tabs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'includes/tabs.tpl', 3, false),)), $this); ?>
<?php if ($_GET['adminmode'] == 1 || $this->_tpl_vars['SHOWTABS'] == 1): ?>
<table cellspacing="0" cellpadding="0" width="100%" style="background-color: white;">
 <tr><td class="top_head" colspan="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_REAL_TITLE'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : xt_htmlspecialchars($_tmp)); ?>
</td></tr>
 <tr>
  <td class="tab_container" style="padding: 0px; height: 22px;" valign="top">
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['TPL']; ?>
" method="post" name="tabs"><input type="hidden" name="module" value="" />
   <input type="hidden" name="showtabs" value="<?php echo $this->_tpl_vars['SHOWTABS']; ?>
" />
   <table cellspacing="0" cellpadding="0" align="left">
    <tr>
     <?php $_from = $this->_tpl_vars['TABS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['TABLOOP'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['TABLOOP']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['KEY'] => $this->_tpl_vars['TAB']):
        $this->_foreach['TABLOOP']['iteration']++;
?>
      <?php if ($this->_tpl_vars['TAB']['visible']): ?>
       <?php if ($this->_tpl_vars['KEY'] == $this->_tpl_vars['MODULE']): ?>
       <td class="tab_active" onclick="document.forms['tabs'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';document.forms['tabs'].module.value='<?php echo $this->_tpl_vars['KEY']; ?>
';document.forms['tabs'].submit();"><?php echo $this->_tpl_vars['TAB']['title']; ?>
</td>
       <?php else: ?>
        <td class="tab" onclick="document.forms['tabs'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='';document.forms['tabs'].module.value='<?php echo $this->_tpl_vars['KEY']; ?>
';document.forms['tabs'].submit();"><?php echo $this->_tpl_vars['TAB']['title']; ?>
</td>
       <?php endif; ?>
      <?php endif; ?>
     <?php endforeach; endif; unset($_from); ?>
    </tr>
   </table><a name="top">&nbsp;</a><input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" /></form>
  </td>
 </tr>
</table>
<?php endif; ?>