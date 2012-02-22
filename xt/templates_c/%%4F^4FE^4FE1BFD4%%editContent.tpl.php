<?php /* Smarty version 2.6.9, created on 2011-01-24 09:44:48
         compiled from /Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editContent.tpl', 5, false),array('modifier', 'alttag', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editContent.tpl', 53, false),array('modifier', 'default', '/Applications/MAMP/htdocs/s-node/xt/templates//default/ch.iframe.snode.navigation/admin/editContent.tpl', 56, false),)), $this); ?>
<form method="post" name="edit">
<table cellspacing="0" cellpadding="0" width="100%">
 <tr>
  <td class="view_header" colspan="2">
   <span class="title_light"><?php echo ((is_array($_tmp='Parameters for')) ? $this->_run_mod_handler('translate', true, $_tmp) : translate($_tmp)); ?>
</span>:&nbsp;<span class="title"><?php echo $this->_tpl_vars['DATA']['package']; ?>
.<?php echo $this->_tpl_vars['DATA']['module']; ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/buttons.tpl", 'smarty_include_vars' => array('data' => $this->_tpl_vars['EDITCONTENTS_BUTTONS'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" width="100%">
<?php $_from = $this->_tpl_vars['DATA']['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NAME'] => $this->_tpl_vars['PARAM']):
?>
 <tr>
  <td class="view_header" colspan="2">
   <span class="title"><?php echo $this->_tpl_vars['PARAM']['title']; ?>
</span>
  </td>
 </tr>
  <tr>
  <td class="view_separator" colspan="2"><img src="<?php echo $this->_tpl_vars['XT_IMAGES']; ?>
spacer.gif" alt="" /></td>
 </tr>
 <tr>
  <td colspan="2" class="view_right"><?php echo $this->_tpl_vars['PARAM']['description']; ?>
&nbsp;</td>
 </tr>
  <?php if ($this->_tpl_vars['PARAM']['entrytype'] == 'userinput'): ?>
  <?php if ($this->_tpl_vars['PARAM']['title'] == 'style' || $this->_tpl_vars['PARAM']['title'] == 'Style'): ?>
  	<tr>
       <td class="view_right" colspan="2">

          <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_params[<?php echo $this->_tpl_vars['NAME']; ?>
]">
          	<?php $_from = $this->_tpl_vars['TEMPLATES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TT']):
?>
          		<?php if ($this->_tpl_vars['TT']['default'] != ""): ?>
          		<option value="<?php echo $this->_tpl_vars['TT']['default']; ?>
" <?php if ($this->_tpl_vars['PARAM']['value'] == $this->_tpl_vars['TT']['default']): ?>selected="selected"<?php endif;  if ($this->_tpl_vars['PARAM']['value'] == "" && $this->_tpl_vars['PARAM']['defaultvalue'] == $this->_tpl_vars['TT']['default']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['TT']['default']; ?>
</option>
          		<?php else: ?>
          		<option value="<?php echo $this->_tpl_vars['TT']['theme']; ?>
" style="background-color:#38FF18;" <?php if ($this->_tpl_vars['PARAM']['value'] == $this->_tpl_vars['TT']['theme']): ?>selected="selected"<?php endif;  if ($this->_tpl_vars['PARAM']['value'] == "" && $this->_tpl_vars['PARAM']['defaultvalue'] == $this->_tpl_vars['TT']['theme']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['TT']['theme']; ?>
 (<?php echo $this->_tpl_vars['THEME']; ?>
)</option>
          		<?php endif; ?>
          	<?php endforeach; endif; unset($_from); ?>
          </select>
       </td>
    </tr>
  <?php else: ?>
     <tr>
       <td class="view_right" colspan="2">
          <input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_params[<?php echo $this->_tpl_vars['NAME']; ?>
]" size="50" value="<?php if ($this->_tpl_vars['PARAM']['value'] == ''):  echo $this->_tpl_vars['PARAM']['defaultvalue'];  else:  echo $this->_tpl_vars['PARAM']['value'];  endif; ?>">
       </td>
    </tr>
  <?php endif; ?>
 <?php elseif ($this->_tpl_vars['PARAM']['entrytype'] == 'popup'): ?>
      <tr>
       <td class="view_right" colspan="2">
<a href="#" onclick="popup('<?php echo $_SERVER['PHP_SELF']; ?>
?TPL=<?php echo $this->_tpl_vars['PARAM']['tpl']; ?>
&field=x<?php echo $this->_tpl_vars['BASEID']; ?>
_params_<?php echo $this->_tpl_vars['NAME']; ?>
&form=edit&data=<?php echo $this->_tpl_vars['PARAM']['value']; ?>
',960,500);">
<img src="images/icons/breakpoint_add.png" <?php echo ((is_array($_tmp='please select an item')) ? $this->_run_mod_handler('alttag', true, $_tmp) : alttag($_tmp)); ?>
></a>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_params[<?php echo $this->_tpl_vars['NAME']; ?>
]" value="<?php echo $this->_tpl_vars['PARAM']['value']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_params_<?php echo $this->_tpl_vars['NAME']; ?>
" value="<?php echo $this->_tpl_vars['PARAM']['value']; ?>
">
<input type="text" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_params_<?php echo $this->_tpl_vars['NAME']; ?>
_title" size="60" disabled value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['PARAM']['titlevalue'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['PARAM']['value']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['PARAM']['value'])); ?>
">

       </td>
    </tr>
 <?php else: ?>
 <tr>
   <td class="view_right" colspan="2">
   <select name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_params[<?php echo $this->_tpl_vars['NAME']; ?>
]" size="1">

        <option value="not_selected">&nbsp;</option>
       <?php $_from = $this->_tpl_vars['PARAM']['allowed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['VALUE']):
?>
            <option <?php if ($this->_tpl_vars['VALUE']['value'] != ''): ?>value="<?php echo $this->_tpl_vars['VALUE']['value']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['PARAM']['value'] == $this->_tpl_vars['VALUE']['value']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['VALUE']['label']; ?>
</option>
       <?php endforeach; endif; unset($_from); ?>

   </select>
   </td>
 </tr>
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_id" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_id" value="<?php echo $this->_tpl_vars['NODE_ID']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_pid" value="<?php echo $this->_tpl_vars['NODE_PID']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_pid" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_node_perm_id" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_id" value="<?php echo $this->_tpl_vars['ENTRY_ID']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_entry_position" value="<?php echo $this->_tpl_vars['ENTRY_POSITION']; ?>
" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_target_module" value="" />
<input type="hidden" name="x<?php echo $this->_tpl_vars['BASEID']; ?>
_livetpl" value="<?php echo $this->_tpl_vars['LIVETPL']; ?>
" />
<input type="hidden" name="TPL" value="<?php echo $this->_tpl_vars['TPL']; ?>
" />
</form>