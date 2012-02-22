<?php /* Smarty version 2.6.9, created on 2011-01-21 10:37:33
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editAction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editAction.tpl', 5, false),array('modifier', 'alttag', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.formmanager/admin/editAction.tpl', 38, false),)), $this); ?>
<form method="POST" name="editAction">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Action')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
:</span><span class="title"> <?php echo $this->_tpl_vars['DATA']['pos']; ?>
</span>
  </td>
 </tr>
 <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDIT_ACTION_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Action type')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_type" onChange="document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_new_type.value=1;document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveAction';document.forms['editAction'].submit()">
    <option value="1" <?php if ($this->_tpl_vars['DATA']['type'] == 1): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Redirect (External)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="7" <?php if ($this->_tpl_vars['DATA']['type'] == 7): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp="Redirect (Internal)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="2" <?php if ($this->_tpl_vars['DATA']['type'] == 2): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Send mail')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="5" <?php if ($this->_tpl_vars['DATA']['type'] == 5): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Send internal message')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="3" <?php if ($this->_tpl_vars['DATA']['type'] == 3): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Call script')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
    <option value="4" <?php if ($this->_tpl_vars['DATA']['type'] == 4): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp='Call form')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</option>
   </select>
  </td>
 </tr>
 <?php if ($this->_tpl_vars['DATA']['type'] == 1): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="Value (e.g. redirect url...)")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value" value="<?php echo $this->_tpl_vars['DATA']['value']; ?>
" size="42" style="color: red;"></td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['type'] == 7): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Choose page')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
  <a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=131&field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_value&form=editAction',960,500);">
<img src="images/icons/breakpoint_add.png" <?php echo ((is_array($_tmp='please select a Page')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
></a>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value_title" size="60" disabled value="<?php echo $this->_tpl_vars['PAGES'][$this->_tpl_vars['BANNER']['link']][$this->_sections['title']['index']]; ?>
">


   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value" value="<?php echo $this->_tpl_vars['DATA']['value']; ?>
">
   <?php $_from = $this->_tpl_vars['PAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['PAGE']):
?>
    <option value="<?php echo $this->_tpl_vars['PAGE']['node_id']; ?>
" <?php if ($this->_tpl_vars['DATA']['value'] == $this->_tpl_vars['PAGE']['node_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['PAGE']['title']; ?>
</option>
   <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['type'] == 2): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp="E-Mail address")) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
 ++</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value" value="<?php echo $this->_tpl_vars['DATA']['value']; ?>
" size="42" style="color: red;">
  <br />
  <br />

  info@foo.bar.com<br />
  field:SCRIPTING_IDENTIFIER<br />
  session:SESSIONVARIABLE<br />
  request:PHP REQUEST Value<br />
  get:PHP GET Value<br />
  post:PHP POST Value<br />


  </td>
 </tr>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='mail template')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right"><input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_metadata" value="<?php echo $this->_tpl_vars['DATA']['metadata']; ?>
" size="42">
   </td>
 </tr>

 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['type'] == 3): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Choose script')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value" onChange="document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_new.value=1;document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveAction';document.forms['editAction'].submit()">
    <?php $_from = $this->_tpl_vars['SCRIPTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SCRIPT']):
?>
    <option value="<?php echo $this->_tpl_vars['SCRIPT']['id']; ?>
" <?php if ($this->_tpl_vars['SCRIPT']['id'] == $this->_tpl_vars['DATA']['value']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['SCRIPT']['title']; ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <tr>
  <td class="right" colspan="2"><?php echo $this->_tpl_vars['SCRIPT_CONTENT']; ?>
</td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['type'] == 4): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Choose form to call')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value" onChange="document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_new.value=1;document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveAction';document.forms['editAction'].submit()">
    <?php $_from = $this->_tpl_vars['FORMS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FORM']):
?>
    <option value="<?php echo $this->_tpl_vars['FORM']['id']; ?>
" <?php if ($this->_tpl_vars['FORM']['id'] == $this->_tpl_vars['DATA']['value']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['FORM']['title']; ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <?php endif; ?>
 <?php if ($this->_tpl_vars['DATA']['type'] == 5): ?>
 <tr>
  <td class="left"><?php echo ((is_array($_tmp='Choose receiver')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</td>
  <td class="right">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_value" onChange="document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_new.value=1;document.forms['editAction'].x<?php echo $this->_tpl_vars['BASEID']; ?>
_action.value='saveAction';document.forms['editAction'].submit()">
    <?php $_from = $this->_tpl_vars['USERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['USER']):
?>
    <option value="<?php echo $this->_tpl_vars['USER']['id']; ?>
" <?php if ($this->_tpl_vars['USER']['id'] == $this->_tpl_vars['DATA']['value']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['USER']['username']; ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
   </select>
  </td>
 </tr>
 <?php endif; ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_rule_id" value="<?php echo $this->_tpl_vars['DATA']['id']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_new" value="0" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_form_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_new_type" value="0" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_script_id" />
</form>