<?php /* Smarty version 2.6.9, created on 2011-01-21 10:07:35
         compiled from includes/buttons.tpl */ ?>
<?php if (! $this->_tpl_vars['withouthidden']): ?>
<input type="hidden" name="showtabs" value="<?php echo $this->_tpl_vars['SHOWTABS']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_action" value="" />
<?php endif; ?>
<div class="toolbar">
<?php if (sizeof ( $this->_tpl_vars['data'] ) > 0):  $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['BUTTON']):
?>
<div class="ab"><div class="bbar">&nbsp;</div>
<div class="tbicon"><input type="image" src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
icons/<?php echo $this->_tpl_vars['BUTTON']['icon']; ?>
" <?php if ($this->_tpl_vars['BUTTON']['accesskey']): ?>accesskey="<?php echo $this->_tpl_vars['BUTTON']['accesskey']; ?>
"<?php endif; ?> value="<?php echo $this->_tpl_vars['BUTTON']['label']; ?>
" name="submit_<?php echo $this->_tpl_vars['BUTTON']['action']; ?>
" class="<?php echo $this->_tpl_vars['BUTTON']['class']; ?>
" onclick="<?php echo $this->_tpl_vars['BUTTON']['target']; ?>
document.forms['<?php echo $this->_tpl_vars['BUTTON']['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='<?php echo $this->_tpl_vars['BUTTON']['action']; ?>
';<?php if ($this->_tpl_vars['yoffset']):  echo $this->_tpl_vars['BUTTON']['target']; ?>
document.forms['<?php echo $this->_tpl_vars['BUTTON']['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;<?php endif;  echo $this->_tpl_vars['BUTTON']['target']; ?>
document.forms['<?php echo $this->_tpl_vars['BUTTON']['form']; ?>
'].submit();<?php echo $this->_tpl_vars['BUTTON']['script']; ?>
" <?php echo $this->_tpl_vars['BUTTON']['disabled']; ?>
 /></div>
<div class="tb"><a href="javascript:<?php echo $this->_tpl_vars['BUTTON']['focus'];  echo $this->_tpl_vars['BUTTON']['target']; ?>
document.forms['<?php echo $this->_tpl_vars['BUTTON']['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='<?php echo $this->_tpl_vars['BUTTON']['action']; ?>
';<?php if ($this->_tpl_vars['yoffset']):  echo $this->_tpl_vars['BUTTON']['target']; ?>
document.forms['<?php echo $this->_tpl_vars['BUTTON']['form']; ?>
'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_yoffset.value=window.pageYOffset;<?php endif;  echo $this->_tpl_vars['BUTTON']['target']; ?>
document.forms['<?php echo $this->_tpl_vars['BUTTON']['form']; ?>
'].submit();<?php echo $this->_tpl_vars['BUTTON']['script']; ?>
"><?php echo $this->_tpl_vars['BUTTON']['label']; ?>
</a></div>
</div>
<?php endforeach; endif; unset($_from);  endif; ?>
</div> 